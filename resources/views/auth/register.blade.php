@extends('layouts.front2')

@section('content2')
<p>
    <br>
</p>
<div class="container">
    <div class="row">
        <div class="col-xl-8  col-lg-10  col-md-12  col-sm-12 col-12 offset-xl-2 offset-lg-1 px-xl-0">
            <div class="login-form-area border-light-gray2 pl-90 pr-90 pt-90 pb-100">
                <h3 class="title-2 m-b-30 text-center">Sistem Informasi ITB AD</h3>
                <h3 class="title m-b-25 text-center">Register</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-form m-b-25">
                        <label class="m-t-25" for="name" style="font-size: 20px;">Username<span class="theme-color">**</span></label>
                        <div class="name">
                            <input type="text" class="form-control primary-bg2 rounded-0 pl-20 @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukan Username...">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label class="m-t-25" for="email" style="font-size: 20px;">Email <span class="theme-color">**</span></label>
                        <div class="email">
                            <input type="email" class="form-control primary-bg2 rounded-0 pl-20 @error('email') is-invalid @enderror" name="email" id="email" required autocomplete="email" placeholder="Masukan Email...">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label class="m-t-25" for="password" style="font-size: 20px;">Password <span class="theme-color">**</span></label>
                        <div class="password">
                            <input type="password" class="form-control primary-bg2 rounded-0 pl-20 @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password" placeholder="Masukan Password...">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="password-confirm" class="m-t-25" style="font-size: 20px;">Konfirmasi Password<span class="theme-color">**</span>
                        <div class="password">
                            <input id="password-confirm" type="password" class="form-control primary-bg2 rounded-0 pl-20" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password..."> 
                        </div>

                        <div class="m-t-25 m-b-25">
                             {!! NoCaptcha::renderJs() !!}
                             {!! NoCaptcha::display() !!}
                        </div>

                    </div><!-- /login-form -->

                    <div class="login">

                        <button type="submit" class="web-btn d-block text-center theme-bg theme-color02 white text-uppercase over-hidden position-relative border-theme02 w-100 s-btn">
                            Register
                        </button>

                        <div class="or text-center mt-30 mb-30">
                            <span class="d-block position-relative">or</span>
                        </div>
                        <a href="{{ route('login') }}" class="web-btn d-block text-center theme-bg theme-color02 white text-uppercase over-hidden position-relative border-theme02 w-100 m-b-100">
                            Login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /row -->
</div>
@endsection
