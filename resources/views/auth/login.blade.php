 @extends('layouts.front2')

 @section('meta')
    <meta name="description" content="Sisem ini merupakan sistem yang dikelola lansung oleh Prodi SI ITB AD. Sebagai media informasi dan Kegiatan Progaram Studi Sistem Informasi ITB AD">
    <meta name="author" content="XRha">
    <meta name="keywords" content="ITB AD, SI, Sistem Informasi, KKL, Skripsi, Sisfo, Akademik, Prodi">
    <meta name="robots" content="index, follow">
@endsection

@section('title')
    Login Sistem Informasi ITB AD
@endsection

@section('content2')
<p>
    <br>
</p>

<div class="container">
    <div class="row">
        <div class="col-xl-8  col-lg-10  col-md-12  col-sm-12 col-12 offset-xl-2 offset-lg-1 px-xl-0">
            <div class="login-form-area border-light-gray2 pl-90 pr-90 pt-90 pb-100">
                <h3 class="title-2 m-b-30 text-center">Sistem Informasi ITB AD</h3>
                <h3 class="title m-b-25 text-center">Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="login-form">
                        <label class="m-t-25" style="font-size: 20px;" for="email"> E-Mail <span class="theme-color">**</span></label>
                        <div class="email">
                            <input type="email" class="form-control primary-bg2 rounded-0 pl-20 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan E-Mail...">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label class="m-t-25" style="font-size: 20px;"> Password <span class="theme-color">**</span></label>
                        <div class="password" for="password">
                            <input type="password" class="form-control primary-bg2 rounded-0 pl-20 @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password" placeholder="Masukan Password...">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="forget-pass d-sm-flex align-items-center justify-content-between pt-20 pb-20 m-t-25">

                            @if (Route::has('password.request'))
                            <p class="m-b-15"><a class="theme-color" href="{{ route('password.request') }}">{{ __('Lupa Password?') }} </a></p>
                            @endif
                        </div>

                        <div class="m-b-25">
                             {!! NoCaptcha::renderJs() !!}
                             {!! NoCaptcha::display() !!}
                        </div>

                    </div><!-- /login-form -->
                    <div class="login">
                        <button class="web-btn d-block text-center black-color  text-uppercase over-hidden position-relative border-theme02 pt-18 pb-18 pl-40 pr-40 s-btn w-100 s-btn" type="submit">
                            {{ __('Login') }}
                        </button>
                        <div class="or text-center mt-30 mb-30">
                            <span class="d-block position-relative">or</span>
                        </div>
                        <a href="{{ route('register') }}" class="web-btn d-block text-center theme-bg theme-color02 white primary text-uppercase over-hidden position-relative border-theme02 m-b-100">
                            {{ __('Daftar Sekarang') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /row -->
</div>
@endsection
