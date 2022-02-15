@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #FECA2F !important;
        }

        a:hover {
            color: #ffffff !important;
            text-decoration: underline !important;

        }

    </style>
    <body class=" login" style="
            background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);
            min-height: 768px;
            ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand m-grid-col-md-3 m-grid-col-xs-11 m-grid-col-lg-2" href="{{ url('/') }}" style="
font-family: AvenirLTStd-Book;
font-weight: normal;
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
        />
    </a>
    <div>
        <img src="../assets/pages/img/login/vector.png" class="img-responsive margin-top-180 "></div>

    <div class="content margin-top--250 " style="
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
            <img class=" m-grid-col-lg-3 m-grid-col-md-3 m-grid-col-xs-3 margin-left-70"
                 src="../assets/pages/img/login/Email.png"
            />
            <h3 class="form-title m-grid-col-lg-8 m-grid-col-md-8 m-grid-col-xs-8 " style="
            color: #333333;
           font-family: AvenirLTStd-Book;
            font-size: 30px;
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
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">{{ __('Password') }}</label>
                <input
                    class="form-control form-control-solid placeholder-no-fix @error('password') is-invalid @enderror"
                    placeholder="******" name="password" id="password" type="password"
                    required autocomplete="current-password" style="
    border-radius: 20px !important;
    height: 53px;
    background: #FFFFFF;
    border: 1px solid #333333;
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
                    required autocomplete="new-password" style="
    border-radius: 20px !important;
    height: 53px;
    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
"/>
                @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <h5 class="control-label" style="
font-family: AvenirLTStd-Book;
    font-size: 16px;
    color: rgba(51, 51, 51, 0.76);
    ">Minimum 10 characters, must have lower and upercase, number</h5>


            <button type="submit" class="btn green" style="
            border-color: #FFC107;
            border-radius: 20px !important;
            width: 100%;
            height: 53px;
            background: #FFC107;
 font-family: AvenirLTStd-Book;
            font-size: 16px;
color: #FFFFFF;">    {{ __('Reset Password') }}</button>


        </form>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
