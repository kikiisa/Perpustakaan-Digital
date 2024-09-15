@extends('layouts.welcome')

@section('content')
    <div class="container">
        @if (Route::has('login'))
            <div class="row justify-content-center">
                <img src="{{asset("images/logo.png")}}" alt="" srcset="" style="width:130px;height:100px;">

                <h3 class="mb-4">Sistem Informasi Perpustakaan <br>Universitas Negeri Gorontalo</h3>
                <div class="col-md-4">
                    <div class="card border-0">
                        <div class="card-body">
                            <h4 class="text-dark text-start">Login Ke Akun</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-12 col-form-label text-start text-dark">{{ __('Email') }}</label>
                                    <div class="col-md-12">
                                        <input id="email" type="email" placeholder="Enter Email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-12 text-start  col-form-label tex-start text-dark">{{ __('Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" placeholder="*******"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <span class="col-md-12 mb-3 text-start text-dark">Belum Punya Akun ? <a
                                            href="{{ route('register') }}" class="p-0">register</a></span>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-12 text-start">
                                        <button type="submit" class="btn btn-primary px-5 w-100">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
