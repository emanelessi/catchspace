@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #f36596 !important;
        }

        a:hover {
            color: #ffffff !important;
            text-decoration: underline !important;

        }

    </style>
    <!-- BEGIN LOGO -->
    <body class=" login" style="background-color: #28282B;
            background-image: linear-gradient(#28282B, #090808);
            height: 768px;
    ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand m-grid-col-md-3 m-grid-col-xs-12 m-grid-col-lg-2 nav-link "
           href="{{ url('/') }}" style="
font-family: 'Montserrat', sans-serif !important;
font-style: normal;
font-weight: normal;
letter-spacing: -0.022em;
color: #FFFFFF;
font-size: 16px;
">
            <i class="fa fa-arrow-left" style="font-size: 13px"></i>
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
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.update') }}" class=" margin-right-12  margin-left-12">
            @csrf
            {{--            <input type="hidden" name="token" value="{{ $token }}">--}}
            <img class="margin-top-20 m-grid-col-lg-3 m-grid-col-md-3 m-grid-col-xs-3 margin-left-70"
                 src="../assets/pages/img/login/Email.png"
            />
            <h3 class="form-title m-grid-col-lg-8 m-grid-col-md-8 m-grid-col-xs-8 margin-left--10
            margin-bottom-10" style="
font-family: 'Montserrat', sans-serif !important;
color: #000000; font-size: 21px;
">{{ __('Reset Password') }}</h3>

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
            {{--        --}}
            <div class="form-group margin-bottom-10">
                <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                <div class="input-icon">
                    <i style="
                    background: -webkit-linear-gradient(#E93B77, #b9a6a6);
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

            <div class="form-group margin-bottom-10">
                <label class="control-label visible-ie8 visible-ie9">{{ __('Confirm password') }}</label>
                <div class="input-icon">
                    <i style="
                    background: -webkit-linear-gradient(#E93B77, #b9a6a6);
                    -webkit-background-clip: text;
                    font-size: 18px;
                    -webkit-text-fill-color: transparent;
                    margin-left: 19px;
                    " class="fa fa-check-circle padding-tb-3"></i>
                    <input class="form-control form-control-solid placeholder-no-fix @error('confirm_password')
                        is-invalid @enderror" placeholder="Confirm password"
                           name="password-confirm" id="password-confirm" type="password" required=""
                           autocomplete="new-password"
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

            <h5 class="control-label margin-left-9" style="
font-family: 'Montserrat', sans-serif !important;
font-weight: normal;
color: rgba(51, 51, 51, 0.76);
              font-size: 11px;

">
                Minimum 10 characters, must have lower and uppercase, number
            </h5>


            <button type="submit"
                    class="btn  blue margin-left-8  m-grid-col-lg-offset-1 m-grid-col-md-offset-4
                    m-grid-col-xs-1 "
                    style="
width: 100%;
background: #E93B77;
border-color: #E93B77;
border-radius: 20px !important;
font-family: 'Montserrat', sans-serif !important;
font-size: 15px;
color: #FFFFFF;">  {{ __('Reset Password') }}</button>

        </form>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
