@extends('layouts.provider.loginApp')

@section('content')
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">

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
            background-image: linear-gradient(#726767, #090808);
            height: 768px;
    ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand m-grid-col-md-3 m-grid-col-xs-12 m-grid-col-lg-2" href="{{ url('/') }}" style="
/*    width: 119px;*/
/*    height: 32px;*/
/*right: 1240px;*/
/*top: 28px;*/
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
font-weight: normal;
/*font-size: 16px;*/
/*line-height: 48px;*/
letter-spacing: -0.022em;
color: #FFFFFF;
">
            Back to main
        </a>
    </div>
    <!-- BEGIN LOGIN -->
    <a class=" m-grid-col-xs-offset-2 " href="{{ url('/') }}">
        <img class=" img-responsive m-grid-col-lg-offset-5-5  margin-bottom-5
        m-grid-col-md-offset-5 m-grid-col-xs-offset-4 "
             src="../assets/pages/img/login/catchspace-logo.png"
             style="
             /*left: 631px;*/
             /*top: 186px;*/
             /*line-height: 36px;*/
             /*margin-left: 575px;*/
             /*margin-top: 23px;*/
             /*width: 178px;*/
             /*height: 48px;*/
"/>
    </a>
    <div>
        <img src="../assets/pages/img/login/vector.png" class="img-responsive margin-top-150 " style="
/*width: 1349px;    height: 145px;*/
/*    left: 794px;*/
/*    margin-top:192px;*/
"></div>

    <!-- BEGIN LOGIN -->
    <div class="content margin-top--192 " style="
    border-radius: 20px !important;
    /*width: 464px;*/
    /*height: 390px;*/
    /*top: -500px;*/
    background: #FFFFFF;
    /*margin-top:225px;*/
    /*margin-left:455px;*/
">
        <!-- BEGIN LOGIN FORM -->
        <form method="POST" action="{{ route('login') }}" class=" margin-right-12  margin-left-12" style="
    /*margin-left: 25px !important;*/
">
            @csrf
            <h3 class="form-title m-grid-col-lg-4-5 m-grid-col-md-4 m-grid-col-xs-4 " style="
/*            width: 123px; margin-bottom: 9px;*/
/*height: 52px;*/
/*left: 541px;*/
/*top: 213px;*/
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
/*font-weight: 590  !important;*/
/*font-size: 33px;*/
/*line-height: 40px;*/
/* margin-left: -15px;*/
color: #000000;
">{{ __('Log In') }}</h3>
            <h5 class="control-label" style="
/*            width: 275px; margin-bottom: 19px;*/
/*height: 25px;*/
/*left: 540px;*/
/*top: 276px;*/
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
font-weight: normal;
/*font-size: 16px;*/
/*line-height: 19px;*/
color: #333333;
">Log in to manage your account</h5>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                <input class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                       placeholder="Enter your email" name="email" id="email" type="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus style="
/*  width: 360.25px;*/
/*height: 53px;*/
/*left: 540px;*/
/*top: 320px;*/

background: #FFFFFF;
border: 1px solid #333333;
box-sizing: border-box;
border-radius: 20px !important;
"/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group" style="
    /*margin-bottom: 5px;*/
">
                <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                <input
                    class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror"
                    placeholder="******" name="password" id="password" type="password"
                    required autocomplete="current-password" style="
/*   width: 360.25px;*/
/*height:53px;*/
/*left: 540px;*/
/*top: 405.2px;*/

background: #FFFFFF;
border: 1px solid #333333;
box-sizing: border-box;
border-radius: 20px !important;
"/>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <label class="rememberme check mt-checkbox mt-checkbox-outline" for="remember" style="
              /*width: 363px;*/
              /*margin-bottom: 14px;*/
              /*height: 15.9px;*/
              font-family: 'Avenir LT Std', sans-serif;
              font-style: normal;
              font-weight: normal;
              /*font-size: 12px;*/
              color: rgba(51, 51, 51, 0.7) !important;
              /*margin-top: 0px;*/
">
                <input type="checkbox" name="remember" value="1"
                       id="remember" {{ old('remember') ? 'checked' : '' }} style="color:#333333; "
                />
                <span style="
    border: 2px solid rgba(51, 51, 51, 0.7);
    box-sizing: border-box;
    border-radius: 2px !important;
/*    width: 13px;*/
/*height: 14.77px;*/

"></span>
                {{ __('Remember me') }}
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" id="forget-password"
                       class="forget-password m-grid-col-lg-6 margin-left-20 " style="
/*  width:114px;*/
/*height: 19.31px;*/
/*margin-top: 0;*/
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
font-weight: normal;
/*font-size: 12px;*/
color: rgba(51, 51, 51, 0.7);
">{{ __('Forgot password?') }}</a>
                @endif
            </label>
            <button type="submit"
                    class="btn-login blue margin-left-8  m-grid-col-lg-offset-1 m-grid-col-md-offset-4
                    m-grid-col-xs-1"
                    style="
            /*display: flex;*/
/*flex-direction: column;*/
/*justify-content: center;*/
/*align-items: center;*/
/*padding: 0px;*/
width: 100%;
/*height: 53px;*/
background: #FFC107;
border-color: #FFC107;
border-radius: 20px !important;
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
/*font-weight: 750;*/
/*font-size: 16px;*/
/*line-height: 24px;*/
color: #FFFFFF;">  {{ __('Login') }}</button>
        </form>
        <!-- END LOGIN FORM -->
    </div>
    <div class=" m-grid-col-xs-offset-1 ">
        <p style="
        /*width: 260px;height: 20px;*/
        font-family: 'Avenir LT Std', sans-serif;
        font-style: normal;
        /*font-weight: normal;*/
        /*font-size: 16px;*/
        /*line-height: 24px;*/
        color: #FFFFFF;
        /*margin-top: -505px;*/
        /*margin-left: 570px;*/
        /*left: 593px;*/
        /*top: 572px;*/
" class="m-grid-col-lg-offset-4-5 m-grid-col-md-offset-4 m-grid-col-xs-offset-3">Don’t have an account?
            <a href="javascript:;" id="register-btn" style="color: #FFC107;">Sign up</a>
        </p>
    </div>
    </body>
@endsection
