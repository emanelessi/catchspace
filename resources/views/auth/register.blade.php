@extends('layouts.provider.signupApp')

@section('content')
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">
    <style>
        .btn:hover {
            background-color: #E93B77 !important;
        }

        .nav-link:hover {
            color: #E93B77 !important;
        }

        a:hover {
            color: #333333 !important;
        }

        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }

        .custom-file-input::before {
            content: 'Upload Workspace Logo \f093';
            display: inline-block;
            font-family: "Font Awesome";
            /*background: linear-gradient(top, #f9f9f9, #e3e3e3);*/
            /*border: 1px solid #999;*/
            /*border-radius: 3px;*/
            /*padding: 5px 8px;*/
            /*outline: none;*/
            /*white-space: nowrap;*/
            /*-webkit-user-select: none;*/
            cursor: pointer;
            /*text-shadow: 1px 1px #fff;*/
            font-weight: 700;
            font-size: 10pt;
        }

        .custom-file-input:hover::before {
            border-color: #FFFFFF;
        }

        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }

        .demo-loading-btn:hover {
            background-color: #D2CDCD54 !important;
        }

        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .inputfile + label {
            border-color: #eaeaea;
            /*margin-top: 60px;*/

            align-items: center;
            padding: 10px;
            border-radius: 20px !important;
            background-color: #eaeaea;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 14px;
            line-height: 24px;
            color: #6B7280;
            width: 100%;
            height: 40px;

            display: inline-block;
        }

        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: #E93B77;
            color: white;

        }


    </style>
    <body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix" style="
         height: 768px; background-color: #28282B;
            background-image: linear-gradient(#28282B, #0B0A0A);">
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
font-family: 'Montserrat', sans-serif !important;
                    font-style: normal;font-size: 27px;
                    color: #333333;
                    ">Create an account</h1>
                    <p style="
                    color: #333333;
font-family: 'Montserrat', sans-serif !important;
                    font-style: normal;
                    font-weight: normal;
                    font-size: 15px;
                    letter-spacing: -0.022em;
                    "> Sign up to have an account</p>
                    <form enctype="multipart/form-data" method="post" action="{{ route('register') }}">
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
                    background: -webkit-linear-gradient(#E93B77, #E6729A);
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
                    background: -webkit-linear-gradient(#E93B77, #E6729A);
                    -webkit-background-clip: text;
                    font-size: 20px;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;                    height: 40px;

                    " class="fa fa-building"></i>

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
                    background: -webkit-linear-gradient(#E93B77, #E6729A);
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
                    background: -webkit-linear-gradient(#E93B77, #E6729A);
                    -webkit-background-clip: text;
                    font-size: 23px;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;                    height: 40px;

                    " class="fa fa-mobile"></i>

                                <input
                                    class="form-control form-control-solid placeholder-no-fix @error('phone') is-invalid @enderror"
                                    placeholder="phone" name="phone" id="phone" type="tel"
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
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('address') }}</label>
                            <div class="input-icon">
                                <i style="
                    background: -webkit-linear-gradient(#E93B77, #E6729A);
                    -webkit-background-clip: text;
                    font-size: 23px;
                    -webkit-text-fill-color: transparent;
                    padding-top: 10px;
                    margin-left: 19px;                    height: 40px;

                    " class="fa fa-map-marker"></i>

                                <input
                                    class="form-control form-control-solid placeholder-no-fix @error('address') is-invalid @enderror"
                                    placeholder="Address" name="address" id="address" type="text"
                                    onfocus="this.placeholder = ''"
                                    value="{{ old('address') }}" required autocomplete="address" autofocus
                                    style="
    border-radius: 20px !important;
    height: 53px;padding-left: 42px;
    background: #FFFFFF;
    border: 1px solid #343A40;
    box-sizing: border-box;
"/>
                                @error('address')
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
                    background: -webkit-linear-gradient(#E93B77, #E6729A);
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
                    background: -webkit-linear-gradient(#E93B77, #E6729A);
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
                            <div class="col-lg-12 text-left">
                                <b class="profile-usertitle  " style="
                        text-align: justify;
">
                                    <input type="file" data-loading-text="Loading..."
                                           name="logo" id="file"
                                           class="inputfile img-logo demo-loading-btn btn btn-primary ">
                                    <label for="file" style="font-size: 12px;"> Upload Workspace Logo<i
                                            class="fa fa-file-photo-o"
                                            style="color: #6B7280 !important; "></i></label>
                                </b>
                                {{--                                <input type="file" name="logo" class="custom-file-input btn btn-login blue margin-left-8  m-grid-col-lg-offset-1 m-grid-col-md-offset-6--}}
                                {{--                    m-grid-col-xs-1"--}}
                                {{--                                        style="--}}
                                {{--width: 100%;--}}
                                {{--background: #9162B3;--}}
                                {{--border-color: #9162B3;--}}
                                {{--border-radius: 20px !important;--}}
                                {{--font-family: AvenirLTStd-Book;--}}
                                {{--color: #FFFFFF;"/>--}}
                            </div>
                            <div class="col-lg-8">
                                <div class="rem-password" style="
                                width: 222px;
">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline" style="                                           margin-bottom: 10px;
                                  font-family: 'Montserrat', sans-serif !important;
                                            font-style: normal;
                                            font-weight: normal;
                                            font-size: 11px;
                                            color: rgba(51, 51, 51, 0.7);">
                                        <input type="checkbox" name="remember" value="1"/> I agree for the term &
                                        conditions
                                        <span style=" top: 0px;left: 3px;height: 15px;width: 15px;"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 text-left">
                                <button type="submit" class=" btn btn-login blue margin-left-8  m-grid-col-lg-offset-1 m-grid-col-md-offset-6
                    m-grid-col-xs-1"
                                        style="
width: 100%;
background: #E93A76;
border-color: #E93A76;
border-radius: 20px !important;
font-family: 'Montserrat', sans-serif !important;
color: white;">
                                    {{ __('Sign up') }}
                                </button>
                            </div>
                            <div class="col-lg-9 ">
                                <h5 style="
font-family: 'Montserrat', sans-serif !important;
font-style: normal;
font-weight: normal;
color: rgba(114, 103, 103, 0.78);
margin-left: 100px;
font-size: 13px;
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
