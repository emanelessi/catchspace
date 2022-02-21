@extends('layouts.provider.signupApp')

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

    </style>
    <body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix" style="min-height: 768px;background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);">
                <a class=" m-grid-col-lg-offset-1 m-grid-col-md-offset-1 m-grid-col-xs-offset-1 " href="{{ url('/') }}">
                    <img class="margin-top-20 " src="../assets/pages/img/login/catchspace-logo.png" style="
    width: 145px;
"/>
                </a>
                <div>
                    <img src="../assets/pages/img/login/WORKSPACES-Vector.png" class="img-responsive margin-top-226"
                         style="
       width: 680px;
">
                </div>

            </div>
            <div class="col-md-5 login-container bs-reset mt-login-5-bsfix">
                <div class="login-content margin-top-30 margin-left-20
                            m-grid-col-lg-12 m-grid-col-md-11 m-grid-col-xs-12
                            ">
                    <h1 style="
font-family: AvenirLTStd-Book;
                    font-style: normal;
                    color: #333333;
                    ">Create an account</h1>
                    <p style="
                    color: #333333;
font-family: AvenirLTStd-Book;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 16px;
                    letter-spacing: -0.022em;
                    "> Sign up to have an account</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Enter any username and password. </span>
                        </div>
                        <div class="form-group margin-bottom-15">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Name') }}</label>
                            <div class="input-icon">
                                <i style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    font-size: 20px;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;                    height: 40px;

                    " class="fa fa-user"></i>

                                <input
                                    class="form-control form-control-solid placeholder-no-fix  @error('name') is-invalid @enderror"
                                    placeholder="name" onfocus="this.placeholder = ''" id="name" type="text"
                                    name="full_name"
                                    value="{{ old('full_name') }}" required autocomplete="name" autofocus
                                    style="
    border-radius: 20px !important;
    height: 53px;padding-left: 42px;
    background: #FFFFFF;
    border: 1px solid #343A40;
    box-sizing: border-box;
"/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group margin-bottom-15">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Co-work Space Name') }}</label>
                            <div class="input-icon">

                                <i style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    font-size: 23px;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;                    height: 40px;

                    " class="fa fa-map-marker"></i>

                                <input
                                    class="form-control form-control-solid placeholder-no-fix  @error('Co-name') is-invalid @enderror"
                                    placeholder="Co-work space name" onfocus="this.placeholder = ''" id="Co-name"
                                    type="text" name="Co-name"
                                    value="{{ old('Co-name') }}" required autocomplete="Co-name" autofocus
                                    style="
    border-radius: 20px !important;
    height: 53px;padding-left: 42px;
    background: #FFFFFF;
    border: 1px solid #343A40;
    box-sizing: border-box;
"/>
                                @error('Co-name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group margin-bottom-15">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                            <div class="input-icon">
                                <i style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;
                    height: 40px;
                    " class="fa fa-envelope"></i>

                                <input
                                    class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                                    placeholder="Enter your email" onfocus="this.placeholder = ''" name="email"
                                    id="email" type="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    style="
    border-radius: 20px !important;
    height: 53px;padding-left: 42px;
    background: #FFFFFF;
    border: 1px solid #343A40;
    box-sizing: border-box;
"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group margin-bottom-15">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('phone') }}</label>
                            <div class="input-icon">
                                <i style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    font-size: 23px;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;                    height: 40px;

                    " class="fa fa-mobile"></i>

                                <input
                                    class="form-control form-control-solid placeholder-no-fix @error('phone') is-invalid @enderror"
                                    placeholder="phone" name="phone" id="phone" type="number"
                                    onfocus="this.placeholder = ''"
                                    value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                    style="
    border-radius: 20px !important;
    height: 53px;padding-left: 42px;
    background: #FFFFFF;
    border: 1px solid #343A40;
    box-sizing: border-box;
"/>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group margin-bottom-15">
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                            <div class="input-icon">
                                <i style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    font-size: 23px;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;                    height: 40px;

                    " class="fa fa-lock"></i>

                                <input
                                    class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror"
                                    placeholder="*******" onfocus="this.placeholder = ''" name="password" id="password"
                                    type="password"
                                    required autocomplete="current-password"
                                    style="
    border-radius: 20px !important;
    height: 53px;padding-left: 42px;
    background: #FFFFFF;
    border: 1px solid #343A40;
    box-sizing: border-box;
"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group margin-bottom-15">
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Confirm password') }}</label>
                            <div class="input-icon">
                                <i style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    font-size: 18px;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;                    height: 40px;

                    " class="fa fa-check-circle"></i>

                                <input
                                    class="form-control form-control-solid placeholder-no-fix @error('confirm_password') is-invalid @enderror"
                                    placeholder="Confirm password" name="password-confirm"
                                    id="password-confirm" onfocus="this.placeholder = ''" type="password"
                                    required autocomplete="new-password"
                                    style="
    border-radius: 20px !important;
    height: 53px;padding-left: 42px;
    background: #FFFFFF;
    border: 1px solid #343A40;
    box-sizing: border-box;
"/>
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="rem-password" style="
                                width: 222px;
">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline" style="                                           margin-bottom: 10px;
                                    font-family: AvenirLTStd-Book;
                                            font-style: normal;
                                            font-weight: normal;
                                            font-size: 13px;
                                            color: rgba(51, 51, 51, 0.7);">
                                        <input type="checkbox" name="remember" value="1"/> I agree for the term &
                                        conditions
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 text-left">
                                <button type="submit" class=" btn btn-login blue margin-left-8  m-grid-col-lg-offset-1 m-grid-col-md-offset-6
                    m-grid-col-xs-1"
                                        style="
width: 100%;
background: #FFC107;
border-color: #FFC107;
border-radius: 20px !important;
font-family: AvenirLTStd-Book;
color: #FFFFFF;">
                                    {{ __('Sign up') }}
                                </button>
                            </div>
                            <div class="col-lg-9 ">
                                <h5 style="
font-family: AvenirLTStd-Book;
font-style: normal;
font-weight: normal;
color: rgba(114, 103, 103, 0.78);
margin-left: 100px;
">
                                    You have an account?<span><a style="color: #343A40" href="{{ route('login') }}"
                                                                 class="nav-link ">sign in</a></span>
                                </h5>
                            </div>
                        </div>
                    </form>
                </div>
                {{--            <div class="login-footer">--}}
                {{--                <div class="row bs-reset">--}}
                {{--                    <div class="col-xs-5 bs-reset">--}}
                {{--                        <ul class="login-social">--}}
                {{--                            <li>--}}
                {{--                                <a href="javascript:;">--}}
                {{--                                    <i class="icon-social-facebook"></i>--}}
                {{--                                </a>--}}
                {{--                            </li>--}}
                {{--                            <li>--}}
                {{--                                <a href="javascript:;">--}}
                {{--                                    <i class="icon-social-twitter"></i>--}}
                {{--                                </a>--}}
                {{--                            </li>--}}
                {{--                            <li>--}}
                {{--                                <a href="javascript:;">--}}
                {{--                                    <i class="icon-social-dribbble"></i>--}}
                {{--                                </a>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-xs-7 bs-reset">--}}
                {{--                        <div class="login-copyright text-right">--}}
                {{--                            <p>Copyright &copy; Keenthemes 2015</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
        </div>
    </div>
    <!-- END : LOGIN PAGE 5-1 -->
    </body>
@endsection
