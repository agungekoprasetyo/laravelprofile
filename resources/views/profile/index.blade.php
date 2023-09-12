@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Profile
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('patch')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hp" class="col-md-4 col-form-label text-md-right">{{ __('No HP') }}</label>

                            <div class="col-md-6">
                                <input id="hp" type="text" class="form-control @error('hp') is-invalid @enderror" name="hp" value="{{ old('hp', $user->hp) }}" autocomplete="hp" autofocus disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email" disabled>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company', $user->company) }}" autocomplete="company" autofocus disabled>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="divisi" class="col-md-4 col-form-label text-md-right">{{ __('Divisi') }}</label>

                            <div class="col-md-6">
                                <input id="divisi" type="text" class="form-control @error('divisi') is-invalid @enderror" name="divisi" value="{{ old('divisi', $user->divisi) }}" autocomplete="divisi" autofocus disabled>

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <!-- <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit Profile
                                </button>
                            </div> -->
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection