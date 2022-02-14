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
                    {{--                {{ config('app.name', 'Laravel') }}--}}
                    <img class="margin-top-20 " src="../assets/pages/img/login/catchspace-logo.png"
                    />
                </a>
                <div>
                    <img src="../assets/pages/img/login/WORKSPACES-Vector.png" class="img-responsive margin-top-226" style="
       width: 680px;
    /*height: 145px;*/
    /*left: 794px;*/
    /*margin-top: 226px;*/
">
                </div>

            </div>
            <div class="col-md-5 login-container bs-reset mt-login-5-bsfix">
                <div class="login-content margin-top-30 margin-left-20
                            m-grid-col-lg-12 m-grid-col-md-11 m-grid-col-xs-12
                            " style="
                /*margin-top: 8%;*/
                /*margin-left: 65px;*/
">
                    <h1 style="
                    /*width: 313px;*/
                    /*height: 30px;*/
                    /*left: 864px;*/
                    /*top: 28px;*/
                    font-family: 'Avenir LT Std', sans-serif;
                    font-style: normal;
                    /*font-weight: 600;*/
                    /*font-size: 33px;*/
                    color: #333333;
                    ">Creat an account</h1>
                    <p style="
                    color: #333333;
                    /*width: 427.73px;*/
                    /*height: 24.87px;*/
                    /*left: 828px;*/
                    /*top: 241px;*/
                    font-family: 'Avenir LT Std', sans-serif;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 16px;
                    letter-spacing: -0.022em;
                    /*margin-bottom: 11px;*/
                    /*margin-top: 11px;*/
                    "> Sign up to have an account</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Enter any username and password. </span>
                        </div>
                        <div class="form-group margin-bottom-15" style="
    /*margin-bottom: 7px;*/
">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Name') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix  @error('name') is-invalid @enderror"
                                placeholder="name" id="name" type="text" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                style="
    border-radius: 20px !important;
    /*width: 396px;*/
    height: 53px;
    /*left: 824px;*/
    /*top: 373px;*/
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
                        <div class="form-group margin-bottom-15" style="
    /*margin-bottom: 7px;*/
">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Co-work Space Name') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix  @error('Co-name') is-invalid @enderror"
                                placeholder="Co-work space name" id="Co-name" type="text" name="Co-name"
                                value="{{ old('Co-name') }}" required autocomplete="Co-name" autofocus
                                style="
    border-radius: 20px !important;
    /*width: 396px;*/
    height: 53px;
    /*left: 824px;*/
    /*top: 373px;*/
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
                        <div class="form-group margin-bottom-15" style="
    /*margin-bottom: 7px;*/
">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                                placeholder="Enter your email" name="email" id="email" type="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                style="
    border-radius: 20px !important;
    /*width: 396px;*/
    height: 53px;
    /*left: 824px;*/
    /*top: 373px;*/
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
                        <div class="form-group margin-bottom-15" style="
    /*margin-bottom: 7px;*/
">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('phone') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix @error('phone') is-invalid @enderror"
                                placeholder="phone" name="phone" id="phone" type="number"
                                value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                style="
    border-radius: 20px !important;
    /*width: 396px;*/
    height: 53px;
    /*left: 824px;*/
    /*top: 373px;*/
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
                        <div class="form-group margin-bottom-15" style="
    /*margin-bottom: 7px;*/
">
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror"
                                placeholder="*******" name="password" id="password" type="password"
                                required autocomplete="current-password"
                                style="
    border-radius: 20px !important;
    /*width: 396px;*/
    height: 53px;
    /*left: 824px;*/
    /*top: 373px;*/
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
                        <div class="form-group margin-bottom-15" style="
    /*margin-bottom: 7px;*/
">
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Confirm password') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix @error('confirm_password') is-invalid @enderror"
                                placeholder="Confirm password" name="password-confirm"
                                id="password-confirm" type="password"
                                required autocomplete="new-password"
                                style="
    border-radius: 20px !important;
    /*width: 396px;*/
    height: 53px;
    /*left: 824px;*/
    /*top: 373px;*/
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
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="rem-password" style="
                                width: 222px;
">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline" style="                                           margin-bottom: 10px;
                                            /*width: 301.87px;*/
                                            /*height: 21px;*/
                                            font-family: 'Avenir LT Std', sans-serif;
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
                            <div class="col-lg-8 text-left">
                                <button type="submit" class="btn btn-primary " style="
    border-radius: 20px !important;
    border-color: #FFC107;
    background: #FFC107;
font-family: 'Avenir LT Std', sans-serif;
    letter-spacing: -0.022em;
    flex-direction: column;
justify-content: center;
align-items: center;
padding: 10px;
width: 396px;
height: 52px;
/*left: 821px;*/
/*top: 539px;*/
font-style: normal;
font-weight: normal;
font-size: 16px;
/*line-height: 24px;*/
color: #FFFFFF;
">
                                    {{ __('Sign up') }}
                                </button>
                            </div>
                            <div class="col-lg-9 ">
                                <h5 style="
/*                                width: 301.87px;*/
/*height: 24px;*/
/*left: 940px;*/
/*top: 709.85px;*/
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
font-weight: normal;
/*font-size: 16px;*/
/*line-height: 24px;*/
color: rgba(114, 103, 103, 0.78);
margin-left: 100px;
">
                                    You have an account?<span><a style="color: #343A40">sign in</a></span>
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
