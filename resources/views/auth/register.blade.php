@extends('layouts.welcome')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <img src="{{asset("images/logo.png")}}" alt="" srcset="" style="width:130px;height:100px;">
        <h3 class="mb-4">Sistem Informasi Perpustakaan <br>Universitas Negeri Gorontalo</h3>
        <div class="col-md-5">
            <div class="card border-0">
                <div class="card-body">
                    <h4 class="text-dark text-start">Registrasi Sekarang</h4>
                    <form method="POST" action="{{ route('register') }} ">
                        @csrf
                        <div class="row justify-content-start">
                            <div class="col-12">
                                <div class="form-group text-start">
                                    <label class="text-dark" for="name">{{ __('Nama Lengkap') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Nama Lengkap">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-start">
                                    <label class="text-dark" for="npm">{{ __('NPM') }}</label>
                                    <input id="npm" type="text" class="form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" placeholder="Enter NPM">
                                    @error('npm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-start">
                                    <label class="text-dark" for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-start">
                                    <label class="text-dark" for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-start">
                                    <label class="text-dark" for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Register') }}
                            </button>
                            <br>
                            <span class="text-dark text-start">Sudah Punya Akun ? <a href="{{ route('login') }}" class="p-0">login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
