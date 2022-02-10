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
        <a class="navbar-brand" href="{{ url('/') }}"  style="
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
">
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
    margin-top:355px;
"></div>
    <!-- BEGIN LOGIN -->
    <div class="content" style="
    border-radius: 20px !important;
    margin-top: -345px;
    margin-left: 410px;
    width: 578px;
    height: 586px;
    background: #FFFFFF;
    ">
        <!-- BEGIN LOGIN FORM -->
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            {{--            <input type="hidden" name="token" value="{{ $token }}">--}}
            <img class="login-logo login-6" src="../assets/pages/img/login/Email.png"
                 style="
    margin-left: 189px;
    margin-top: 52px;
    margin-bottom: 15px;
"/>
            <h3 class="form-title " style="color: #333333;width: 596.43px;height: 56.6px;left: 526px;top: 385px;font-family: Poppins;font-style: normal;font-weight: 500 !important;font-size: 33px;line-height: 80px;
/* or 242% */letter-spacing: -0.022em;text-transform: capitalize;margin-left: -120px;">{{ __('Reset Password') }}</h3>

            {{--            <div class="form-group">--}}
            {{--                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->--}}
            {{--                <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>--}}
            {{--                <input class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"--}}
            {{--                       placeholder="email" name="email" id="email" type="email"--}}
            {{--                         value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/>--}}
            {{--                @error('email')--}}
            {{--                <span class="invalid-feedback" role="alert">--}}
            {{--                        <strong>{{ $message }}</strong>--}}
            {{--                    </span>--}}
            {{--                @enderror--}}
            {{--            </div>--}}
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                <input
                    class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror"
                    placeholder="******" name="password" id="password" type="password"
                    required autocomplete="current-password" style="
    border-radius: 20px !important;
    width: 396px;
    height: 67px;
    left: 526px;
    top: 468px;
    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
    margin-left: 53px;
"/>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ __('Confirm password') }}</label>
                <input
                    class="form-control form-control-solid placeholder-no-fix @error('confirm_password') is-invalid @enderror"
                    placeholder="Confirm password" name="password-confirm"
                    id="password-confirm" type="password"
                    required autocomplete="new-password" style="
    border-radius: 20px !important;
    width: 396px;
    height: 67px;
    left: 526px;
    top: 468px;
    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
    margin-left: 53px;
"/>
                @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <h5 class="control-label" style="
    width: 371px;
    height: 48px;
    left: 526px;
    top: 628px;
    font-family: Inter;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
/* or 150% */
    letter-spacing: -0.011em;
    text-transform: capitalize;
    color: rgba(51, 51, 51, 0.76);
    margin-left: 65px;
    ">Minimum 10 characters, must have lower and upercase, number</h5>


            <button type="submit" class="btn green" style="border-color: #FFC107;border-radius: 20px !important;width: 396px;height: 67px;left: 526px;top: 709px;background: #FFC107;margin-left: 65px;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 22px;line-height: 48px;
/* or 218% */letter-spacing: -0.022em;color: #FFFFFF;">    {{ __('Reset Password') }}</button>


        </form>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
