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
                    <h3 class="mb-30 text-center">Silahkan Login Disini</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="login-form">
                            <label class="mt-25" for="email"> E-Mail <span class="theme-color">**</span></label>
                            <div class="email">
                                <input type="email" class="form-control primary-bg2 rounded-0 pl-20 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan E-Mail...">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label class="mt-25"> Password <span class="theme-color">**</span></label>
                            <div class="password" for="password">
                                <input type="password" class="form-control primary-bg2 rounded-0 pl-20 @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password" placeholder="Masukan Password...">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="forget-pass d-sm-flex align-items-center justify-content-between pt-20 pb-20">
                                <div class="save-info d-flex mb-15">
                                    <input class="form-check-input p-0 mr-2" name="remember" id="remember" type="checkbox" aria-label="Checkbox for following text input" {{ old('remember') ? 'checked' : '' }}>
                                    <p class="mb-0 cursor-pinter" for="remember"> {{ __('Ingatkan Saya') }} </p>
                                </div>

                                @if (Route::has('password.request'))
                                <p class="mb-15"><a class="theme-color" href="{{ route('password.request') }}">{{ __('Lupa Password?') }} </a></p>
                                @endif
                            </div>

                            <div class="mb-3">
                                 {!! NoCaptcha::renderJs() !!}
                                 {!! NoCaptcha::display() !!}
                            </div>

                        </div><!-- /login-form -->
                        <button class="web-btn d-block text-center black-color  text-uppercase over-hidden position-relative border-theme02 pt-18 pb-18 pl-40 pr-40 s-btn w-100 s-btn" type="submit">
                            {{ __('Login') }}
                        </button>
                        <div class="or text-center mt-30 mb-30">
                            <span class="d-block position-relative">or</span>
                        </div>
                        <a href="{{ route('register') }}" class="web-btn d-block text-center theme-bg theme-color02 white primary text-uppercase over-hidden position-relative border-theme02 pt-18 pb-18 pl-40 pr-40">
                            {{ __('Daftar Sekarang') }}
                        </a>
                    </form>
                </div>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</div>
@endsection
