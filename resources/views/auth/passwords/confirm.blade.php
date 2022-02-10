{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Confirm Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    {{ __('Please confirm your password before continuing.') }}--}}

{{--                    <form method="POST" action="{{ route('password.confirm') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Confirm Password') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


@extends('layouts.provider.loginApp')

@section('content')
    <style>
        a:hover {
            color: #ffffff !important;
            text-decoration:underline  !important;

        }

    </style>
    <body class=" login" style="
            background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);
            min-height: 1024px;
            ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="
    width: 363px;
    height: 48px;
    right: 998px;
    top: 31px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 48px;
    letter-spacing: -0.022em;
    color: #FFFFFF;
" >
            Back to main
        </a>
    </div>
    <a class="navbar-brand" href="{{ url('/') }}">
        <img class="login-logo login-6" src="../assets/pages/img/login/catchspace-logo.png" style="height: 36px;left: 631px;top: 186px;font-family: Poppins;font-style: normal;font-weight: bold;font-size: 24px;line-height: 36px;
                    letter-spacing: -0.022em;margin-left: 600px;margin-top: 90px;"/>
    </a>
    <div><img src="../assets/pages/img/login/vector.png" style="
width: 1349px;    height: 145px;
    left: 794px;
    margin-top: 305px;
"></div>
    <!-- BEGIN LOGIN -->
    <div class="content" style="
    border-radius: 20px !important;
    margin-top: -319px;
    margin-left: 438px;
    width: 528.54px;
    height: 483px;
    background: #FFFFFF;
    ">
        <!-- BEGIN LOGIN FORM -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <img class="login-logo login-6" src="../assets/pages/img/login/Email.png"
             style="
    margin-left: 168px;
    margin-top: 52px;
    margin-bottom: 15px;
"/>
        <h3 class="form-title"
            style="margin-bottom: 10px;color: #333333;left: 556.99px;
                top: 432.17px;font-family: Inter;font-style: normal;
                font-weight: 500 !important;font-size: 33px;line-height: 80px;
                letter-spacing: -0.022em;text-transform: capitalize;margin-left: -85px;">Check your email</h3>
        <h5 class="control-label" style="color: #333333;width: 325.83px;height: 187.02px;left: 569.16px;top: 509.64px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 18px;line-height: 48px;
/* or 267% */letter-spacing: -0.022em;text-transform: capitalize;margin-left: 68px;"> Open your email inbox.<br>
            Find our "Welcome" email.<br>
            Click Confirm and back to login to catxh space.<br> </h5>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
