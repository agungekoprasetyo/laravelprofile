<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    // Route::get('dokumen', [App\Http\Controllers\DokumenController::class, 'edit'])->name('profile.edit');
    Route::get('dokumen', [App\Http\Controllers\DokumenController::class, 'index'])->name('dokumen');
    Route::post('dokumen', [App\Http\Controllers\DokumenController::class, 'upload'])->name('dokumen.upload');
});
