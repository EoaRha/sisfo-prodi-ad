@extends('layouts.front')

@section('content')
<p>
    <br>
</p>
<div class="login-area pb-110 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8  col-lg-10  col-md-12  col-sm-12 col-12 offset-xl-2 offset-lg-1 px-xl-0">
                <div class="login-form-area border-light-gray2 pl-90 pr-90 pt-90 pb-100">
                    <h3 class="mb-30 text-center">Daftar Disini</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="login-form mb-25">
                            <label class="mt-25" for="name">Username<span class="theme-color">**</span></label>
                            <div class="name">
                                <input type="text" class="form-control primary-bg2 rounded-0 pl-20 @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukan Username...">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label class="mt-25" for="email">Email <span class="theme-color">**</span></label>
                            <div class="email">
                                <input type="email" class="form-control primary-bg2 rounded-0 pl-20 @error('email') is-invalid @enderror" name="email" id="email" required autocomplete="email" placeholder="Masukan Email...">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label class="mt-25" for="password">Password <span class="theme-color">**</span></label>
                            <div class="password">
                                <input type="password" class="form-control primary-bg2 rounded-0 pl-20 @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password" placeholder="Masukan Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="password-confirm" class="mt-25">Konfirmasi Password <span class="theme-color">**</span>
                            <div class="password">
        
                                    <input id="password-confirm" type="password" class="form-control primary-bg2 rounded-0 pl-20" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password...">
                                
                            </div>

                            <div class="mt-25 mb-3">
                                 {!! NoCaptcha::renderJs() !!}
                                 {!! NoCaptcha::display() !!}
                            </div>

                        </div><!-- /login-form -->

                        <button type="submit" class="web-btn d-block text-center theme-bg theme-color02 white text-uppercase over-hidden position-relative border-theme02 pt-18 pb-18 pl-40 pr-40 w-100 s-btn">
                            Register now
                        </button>

                        <div class="or text-center mt-30 mb-30">
                            <span class="d-block position-relative">or</span>
                        </div>
                        <a href="{{ route('login') }}" class="web-btn d-block text-center theme-bg theme-color02 white text-uppercase over-hidden position-relative border-theme02 pt-18 pb-18 pl-40 pr-40 w-100">
                            Login now
                        </a>
                    </form>
                </div>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div>
@endsection
