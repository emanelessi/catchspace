@extends('layouts.provider.signupApp')

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

    </style>
    <body class=" login" >
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5" >
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix" style="min-height: 1024px;background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);">
                <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 64px;color:#fff">
                    {{--                {{ config('app.name', 'Laravel') }}--}}
                    <img class="login-logo login-6" src="../assets/pages/img/login/catchspace-logo.png"
                         style="left: 70px;top: 40px;width: 178px;height: 48.21px;"/>
                </a>
                <div><img src="../assets/pages/img/login/WORKSPACES-Vector.png" style="
width: 676px;    height: 145px;
    left: 794px;
    margin-top: 376px;"></div>

            </div>
            <div class="col-md-5 login-container bs-reset mt-login-5-bsfix">
                <nav class="navbar">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav me-auto" style="list-style-type:none;
                                        margin-left: 222px;float: left;color:#fff">
                            <li class="nav-item" style="
    font-family: Inter;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 48px;
/* identical to box height, or 267% */
    letter-spacing: -0.022em;
    margin-top: 32px;    margin-right: 20px;
"><a class="nav-link" style="color: #333333;">Home</a></li>
                            <li class="nav-item" style="
    font-family: Inter; margin-right: 8px;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 48px;
/* identical to box height, or 267% */
    letter-spacing: -0.022em;
    margin-top: 32px;
"><a class="nav-link" style="color: #333333;">provider login</a></li>
                            <li class="nav-item" style="
    font-family: Inter;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 48px;
/* identical to box height, or 267% */
    letter-spacing: -0.022em;
    margin-top: 32px;
"><a class="nav-link" style="color: #333333;">Admin login</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="login-content" style="margin-top: 10%;">
                    <h1 style="
                    color: #333333;
                    width: 313px;
                    height: 48px;
                    left: 824px;
                    top: 193px;
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: 600;
                    font-size: 33px;
                    line-height: 49px;
                    text-transform: capitalize;
                    ">Creat an account</h1>
                    <p style="
    color: #333333;
    width: 427.73px;
    height: 24.87px;
    left: 828px;
    top: 241px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 48px;
/* or 300% */
    letter-spacing: -0.022em;
    text-transform: capitalize;
"> sign up to have an account</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>Enter any username and password. </span>
                        </div>
                        <div class="form-group">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Name') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix  @error('name') is-invalid @enderror"
                                placeholder="name" id="name" type="text" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                style="
    border-radius: 20px !important;
    width: 396px;
    height: 57px;
    left: 824px;
    top: 373px;
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
                        <div class="form-group">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Co-work Space Name') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix  @error('Co-name') is-invalid @enderror"
                                placeholder="Co-work space name" id="Co-name" type="text" name="Co-name"
                                value="{{ old('Co-name') }}" required autocomplete="Co-name" autofocus
                                style="
    border-radius: 20px !important;
    width: 396px;
    height: 57px;
    left: 824px;
    top: 373px;
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
                        <div class="form-group">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                                placeholder="WEB@catchSpace.com" name="email" id="email" type="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                style="
    border-radius: 20px !important;
    width: 396px;
    height: 57px;
    left: 824px;
    top: 373px;
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
                        <div class="form-group">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">{{ __('phone') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix @error('phone') is-invalid @enderror"
                                placeholder="phone" name="phone" id="phone" type="number"
                                value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                style="
    border-radius: 20px !important;
    width: 396px;
    height: 57px;
    left: 824px;
    top: 373px;
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
                        <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror"
                                placeholder="*******" name="password" id="password" type="password"
                                required autocomplete="current-password"
                                style="
    border-radius: 20px !important;
    width: 396px;
    height: 57px;
    left: 824px;
    top: 373px;
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
                        <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">{{ __('Confirm password') }}</label>
                            <input
                                class="form-control form-control-solid placeholder-no-fix @error('confirm_password') is-invalid @enderror"
                                placeholder="Confirm password" name="password-confirm"
                                id="password-confirm" type="password"
                                required autocomplete="new-password"
                                style="
    border-radius: 20px !important;
    width: 396px;
    height: 57px;
    left: 824px;
    top: 373px;
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
                                <div class="rem-password">
                                    <label class="rememberme mt-checkbox mt-checkbox-outline" style="
    width: 301.87px;
    height: 21px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 13px;
    line-height: 21px;
    text-transform: capitalize;
    color: rgba(51, 51, 51, 0.7);
">
                                        <input type="checkbox" name="remember" value="1"/> I agree for the term & conditions
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-8 text-left">
                                <button type="submit" class="btn btn-primary" style="
    border-radius: 20px !important;
    border-color: #FFC107;
    width: 396px;
    height: 67px;
    left: 828px;
    top: 787px;
    background: #FFC107;
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 22px;
    line-height: 33px;
    letter-spacing: -0.022em;
">
                                    {{ __('sign up') }}
                                </button>
                            </div>
                            <div class="col-lg-9">
                                    <a style="    margin-left: 54px;
    width: 301.87px;
    height: 24px;
    left: 900px;
    top: 874.85px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 60px;
    text-transform: capitalize;
    color: rgba(114, 103, 103, 0.78);
" >
                                        You have an account? sign in
                                    </a>
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
