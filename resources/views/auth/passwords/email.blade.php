@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #FECA2F !important;
        }
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
    <!-- BEGIN LOGIN -->
    <a class="navbar-brand" href="{{ url('/') }}">
        <img class="login-logo login-6" src="../assets/pages/img/login/catchspace-logo.png"
             style="height: 36px;left: 631px;top: 186px;font-family: Poppins;font-style: normal;font-weight: bold;font-size: 24px;line-height: 36px;
                    letter-spacing: -0.022em;margin-left: 631px;margin-top: 90px;"/>
    </a>
    <div><img src="../assets/pages/img/login/vector.png" style="
width: 1349px;    height: 145px;
    left: 794px;
    margin-top: 375px
"></div>

    <div class="content" style="border-radius: 20px !important;width: 576px;
    height: 610px;background: #FFFFFF;margin-top: -400px;margin-left: 432px;">
        <!-- BEGIN LOGIN FORM -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <img class="login-logo login-6" src="../assets/pages/img/login/Email.png"
                 style="
    margin-left: 206px;
    margin-top: 48px;
    margin-bottom: 32px;
"/>
            <h3 class="form-title "
                style="color: #333333;height: 69.6px;left: 522px;top: 389px;font-family: Poppins;font-style: normal;font-weight: 500 !important;font-size: 33px;line-height: 80px;
    margin-bottom: 10px;letter-spacing: -0.022em;text-transform: capitalize;margin-left: -90px;">Forgot Passwoard</h3>
            <h5 class="control-label" style="color: #333333;width: 447px;height: 148.42px;left: 522px;top: 468.84px;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 18px;line-height: 48px;
/* or 267% */letter-spacing: -0.022em;text-transform: capitalize;margin-left: 70px;">Please enter your registered email address.<br>
                We'll send instructions to help reset your<br>
                password</h5>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                <input class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                       placeholder="enter your email" name="email" id="email" type="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus style="
    border-radius: 20px !important;
    width: 396px;
    height: 67px;
    left: 522px;
    top: 617px;
    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
    margin-left: 70px;
"/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

<button  type="submit" class="btn green" style="border-color: #FFC107;
            border-radius: 20px !important;width: 396px;height: 67px;
            left: 522px;top: 697px;background: #FFC107;margin-left: 70px;
            font-family: Poppins;font-style: normal;font-weight: 500;
            font-size: 22px;line-height: 48px;
            letter-spacing: -0.022em;color: #FFFFFF;">  {{ __('send reset instructions') }}</button>
        </form>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
