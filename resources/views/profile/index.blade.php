@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                <a href="{{ url('home') }}" class="btn btn-primary mb-4"><i class="bi bi-chevron-double-left">Back</i></a>
            </div>
            <div class="col-md-8">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                  </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-4 text-center"> MY PROFILE</h2>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><h5>Name</h5></td>
                                <td><h5>:</h5></td>
                                <td><h5>{{ $user->name }}</h5></td>
                            </tr>
                            <tr>
                                <td><h5>Email</h5></td>
                                <td><h5>:</h5></td>
                                <td><h5>{{ $user->email }}</h5></td>
                            </tr>
                            <tr>
                                <td><h5>Address</h5></td>
                                <td><h5>:</h5></td>
                                <td><h5>{{ $user->alamat }}</h5></td>
                            </tr>
                            <tr>
                                <td><h5>Phone</h5></td>
                                <td><h5>:</h5></td>
                                <td><h5>{{ $user->nohp }}</h5></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h2 class="text-center mb-5">EDIT PROFILE</h2>
                    <form method="POST" action="{{ url('profile') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-end"><h5>Name</h5></label>

                            <div class="col-md-6">
                               <h5> <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus></h5>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label text-md-end"><h5>Email Address</h5></label>

                            <div class="col-md-6">
                              <h5><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email"></h5> 

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-3 col-form-label text-md-end"><h5>Address</h5></label>

                            <div class="col-md-6">
                               <h5> <textarea id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $user->alamat }}" required autocomplete="alamat" autofocus></textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nohp" class="col-md-3 col-form-label text-md-end"><h5>Phone</h5></label>

                            <div class="col-md-6">
                               <h5> <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $user->nohp }}" required autocomplete="nohp" autofocus></h5>

                                @error('nohp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-3 col-form-label text-md-end"><h5>{{ __('Password') }}</h5></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-end"><h5>{{ __('Confirm Password') }}</h5></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
@endsection
