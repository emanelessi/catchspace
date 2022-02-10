@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #FECA2F !important;
        }
        .nav-link:hover {
            color: #FECA2F !important;
        }
        a:hover {
            color: #333333 !important;
        }
        .uppercase:hover {
            color: #FECA2F !important;
        }
    </style>
    <body class=" login" style="background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);height: 1024px;
    ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="login-logo login-6" src="../assets/pages/img/login/catchspace-logo.png"
                 style="left: 70px;top: 40px;width: 178px;height: 48.21px;"/>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto" style="list-style-type:none;color:#fff">
                <li class="nav-item" style="
    width: 80px;
    height: 41px;
    right: 266px;
    top: 42px;
    font-family: Inter;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 48px;
    letter-spacing: -0.022em;
"><a class="nav-link" style="color: #fff;">Home</a></li>
                <li class="nav-item" style="
    padding-right: 44px;
    width: 155px;
    height: 41px;
    right: 266px;
    top: 42px;
    font-family: Inter;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 48px;
    letter-spacing: -0.022em;
"><a class="nav-link" style="color: #fff;">provider login</a>
                </li>
                <li class="nav-item" style="
    padding-right: 44px;
    width: 140px;
    height: 41px;
    right: 266px;
    top: 42px;
    font-family: Inter;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 48px;
    letter-spacing: -0.022em;
"><a class="nav-link" style="color: #fff;">Admin login</a></li>
            </ul>
        </div>
    </div>
    <div><img src="../assets/pages/img/login/vector.png" style="
width: 1349px;    height: 145px;
    left: 794px;
    margin-top: 386px;
"></div>

    <!-- BEGIN LOGIN -->
    <div class="content"
         style="margin-top: -378px;width: 576px;height: 551px;background: #FFFFFF;border-radius: 20px !important;">
        <!-- BEGIN LOGIN FORM -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="form-title" style="color: #333333;width: 104.53px;height: 50px;left: 522px;top: 281px;font-family: Poppins;font-style: normal;font-weight: 600 !important;font-size: 33px;line-height: 49px;
    margin-left: 60px;text-transform: capitalize;">{{ __('Log In') }}</h3>
            <h5 class="control-label" style="color: #333333;width: 301.87px;height: 24px;left: 522px;top: 341px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
text-transform: capitalize;margin-left: 60px;    margin-bottom: 38px;">log in to manage your account</h5>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                <input class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                       placeholder="WEB@catchSpace.com" name="email" id="email" type="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus style="
    width: 396px;
    height: 67px;
    left: 522px;
    top: 401px;
    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
    border-radius: 20px !important;
    margin-left: 60px;
"/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                <input
                    class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror"
                    placeholder="******" name="password" id="password" type="password"
                    required autocomplete="current-password" style="
    width: 396px;
    height: 67px;
    left: 522px;
    top: 401px;
    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
    border-radius: 20px !important;
    margin-left: 60px;
"/>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>


            <label class="rememberme check mt-checkbox mt-checkbox-outline" for="remember" style="    margin-bottom: 43px;
    height: 24px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 24px;
/* identical to box height */
    text-transform: capitalize;
    color: rgba(51, 51, 51, 0.7);
    margin-left: 60px;
">
                <input type="checkbox" name="remember" value="1"
                       id="remember" {{ old('remember') ? 'checked' : '' }} style="color:#333333;"
                />
                <span style="
    border: 2px solid rgba(51, 51, 51, 0.7);
    box-sizing: border-box;
    border-radius: 2px !important;
"></span>
                {{ __('Remember Me') }}
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" id="forget-password"
                       class="forget-password" style="
    margin-top: 0px;
    margin-left: 50px;
    top: 564px;
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
/* identical to box height */
    text-transform: capitalize;
    color: rgba(51, 51, 51, 0.7);
">{{ __('Forgot Your Password?') }}</a>
                @endif
            </label>
            <button type="submit" class="btn blue" style="border-color: #FFC107;border-radius: 20px !important;color: #fff;width: 396px;height: 67px;left: 517px;top: 631px;background: #FFC107;margin-left: 60px;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 22px;line-height: 33px;
/* identical to box height */letter-spacing: -0.022em;">  {{ __('Login') }}</button>


        </form>
        <!-- END LOGIN FORM -->

    </div>
    <div style="margin-top: 25px;text-align: center;">
        <p style="color: #fff;height: 24px;left: 570px;top: 813px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */text-transform: capitalize;">Don’t have an account?
            <a href="javascript:;" id="register-btn" class="uppercase" style="color: #FFC107;">sign up</a>
        </p>
    </div>
    </body>
@endsection
