<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index(Request $request)
    {
        return view('profile.index', [
            'user' => $request->user()
        ]);
    }

    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/upload', $fileName);

        $request->user()->update(
            $request->all()
        );

        return redirect()->route('profile');
    }
}
