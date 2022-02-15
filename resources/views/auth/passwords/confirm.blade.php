{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Confirm Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    {{ __('Please confirm your password before continuing.') }}--}}

{{--                    <form method="POST" action="{{ route('password.confirm') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Confirm Password') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


@extends('layouts.provider.loginApp')

@section('content')
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">
    <style>
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
        <a class="navbar-brand m-grid-col-md-3 m-grid-col-xs-12 m-grid-col-lg-2" href="{{ url('/') }}" style="
font-family: AvenirLTStd-Book;
font-style: normal;
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
        <img src="../assets/pages/img/login/vector.png" class="img-responsive margin-top-150 "></div>

    <div class="content margin-top--200 " style="
    border-radius: 20px !important;
    background: #FFFFFF;
">
        <!-- BEGIN LOGIN FORM -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <img class=" m-grid-col-lg-2 m-grid-col-md-2 m-grid-col-xs-3 margin-left-70"
             src="../assets/pages/img/login/Email.png"
        />
        <h3 class="form-title m-grid-col-lg-11 m-grid-col-md-11 m-grid-col-xs-11"
            style="
font-family: AvenirLTStd-Book;
font-size: 33px;
color: #333333;">Check Your Email</h3>
        <h5 class="control-label margin-left-15" style="
font-family: AvenirLTStd-Book;
font-size: 18px;
line-height: 38px;

color: #333333;"> Open your email inbox.<br>
            Find our "Welcome" email.<br>
            Click Confirm and back to login to <br>catxh space.<br></h5>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
