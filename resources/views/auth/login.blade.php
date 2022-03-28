@extends('layouts.provider.loginApp')

@section('content')
    {{--    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">--}}

    <style>
        .btn:hover {
            background-color: #ef6198!important;
        }

        .nav-link:hover {
            color: #ef6198!important;
        }

        a:hover {
            color: #ef6198 !important;
        }

        .uppercase:hover {
            color: #ef6198!important;
        }

        /*@font-face {*/
        /*    font-family: avenir-ltstd-book-font;*/
        /*    src: url(AvenirLTStd-Book.ttf);*/
        /*}*/
    </style>
    <body class=" login" style="background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);
            height: 768px;
    ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand m-grid-col-md-3 m-grid-col-xs-12 m-grid-col-lg-2 nav-link " href="{{ url('/') }}" style="
font-family: AvenirLTStd-Book;
font-style: normal;
font-weight: normal;
letter-spacing: -0.022em;
color: #FFFFFF;
">
            <i class="fa fa-arrow-left" style="font-size: 15px"></i>
            Back to main
        </a>
    </div>
    <!-- BEGIN LOGIN -->
    <a class=" m-grid-col-xs-offset-2 " href="{{ url('/') }}">
        <img class=" img-responsive m-grid-col-lg-offset-5-5  margin-bottom-5
        m-grid-col-md-offset-5 m-grid-col-xs-offset-4 " style=" height: 47px;"
             src="../assets/pages/img/login/catchspace-logo.png"/>
    </a>
    <div>
        <img src="../assets/pages/img/login/vector.png" class="img-responsive margin-top-111 "></div>

    <!-- BEGIN LOGIN -->
    <div class="content margin-top--220  " style="
    border-radius: 20px !important;
    background: #FFFFFF;
">
        <!-- BEGIN LOGIN FORM -->
        <form method="POST" action="{{ route('login') }}" class=" margin-right-12  margin-left-12">
            @csrf
            <h3 class="form-title m-grid-col-lg-4-5 m-grid-col-md-4 m-grid-col-xs-4 " style="
font-family: AvenirLTStd-Book;
color: #000000;
">{{ __('Log in') }}</h3>
            <h5 class="control-label margin-top--15 margin-left-9" style="
font-family: AvenirLTStd-Book;
font-weight: normal;
color: #333333;
">Log in to manage your account</h5>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group margin-bottom-10">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                <div class="input-icon">
                    <i style=" background: -webkit-linear-gradient(#E93B77, #E6729A);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    margin-left: 19px;" class="fa fa-envelope padding-tb-3"></i>
                    <input
                        class="form-control form-control-solid margin-top-20 placeholder-no-fix @error('email') is-invalid @enderror"
                        placeholder="Enter your email" name="email" id="email" type="email"
                        onfocus="this.placeholder = ''"
                        value="{{ old('email') }}" required autocomplete="email" autofocus style="
background: #FFFFFF;
border: 1px solid #333333;
box-sizing: border-box;
padding-left: 42px;
border-radius: 20px !important;
"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>
            <div class="form-group margin-bottom-5">
                <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                <div class="input-icon">
                    <i style="
                    background: -webkit-linear-gradient(#E93B77, #E6729A);
                    -webkit-background-clip: text;
                    font-size: 23px;
                    -webkit-text-fill-color: transparent;
                    margin-left: 19px;
                    " class="fa fa-lock padding-tb-3"></i>
                    <input class="form-control form-control-solid placeholder-no-fix " placeholder="******"
                           name="password" id="password" type="password" required="" autocomplete="current-password"
                           onfocus="this.placeholder = ''"
                           style="background: #FFFFFF;
                           border: 1px solid #333333;
                           box-sizing: border-box;
                           border-radius: 20px !important;
                           padding-left: 42px;
">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
            </div>
            <label class="rememberme check mt-checkbox mt-checkbox-outline padding-left-18 " for="remember" style="
font-family: AvenirLTStd-Book;
              font-weight: normal;
              color: rgba(51, 51, 51, 0.7) !important;
              font-size: 12px;
">
                <input type="checkbox" name="remember" value="1"
                       id="remember" {{ old('remember') ? 'checked' : '' }} style="color:#333333; "
                />
                <span style="
    border: 2px solid rgba(51, 51, 51, 0.7);
    box-sizing: border-box;
    border-radius: 2px !important;
    height: 13px;
    width: 13px;
"></span>
                {{ __('Remember me') }}
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" id="forget-password"
                       class="forget-password margin-left-125 " style="
font-family: AvenirLTStd-Book;
font-weight: normal;
color: rgba(51, 51, 51, 0.7);
              font-size: 12px;

">{{ __('Forgot password?') }}</a>
                @endif
            </label>
            <button type="submit"
                    class="btn btn-login blue margin-left-8  m-grid-col-lg-offset-1 m-grid-col-md-offset-4
                    m-grid-col-xs-1"
                    style="
width: 100%;
background: #E93A76;
border-color: #E93A76;
border-radius: 20px !important;
font-family: AvenirLTStd-Book;
font-size: 16px;
color: white;">  {{ __('Log in') }}</button>
        </form>
        <!-- END LOGIN FORM -->
    </div>
    <div class=" m-grid-col-xs-offset-1 ">
        <p style="
font-family: AvenirLTStd-Book;
        font-style: normal;
        color: #FFFFFF;
        font-size: 15px;
" class="m-grid-col-lg-offset-4-5 m-grid-col-md-offset-4 m-grid-col-xs-offset-3 margin-top-10">Don’t have an account?
            <a href="{{ route('register') }}" id="register-btn" class="nav-link" style="color: #E93A76;">Sign up</a>
        </p>
    </div>
    </body>
@endsection
