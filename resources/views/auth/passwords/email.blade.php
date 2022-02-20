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
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">

    <body class=" login" style="
            background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);
            min-height: 768px;
            ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand m-grid-col-md-3 m-grid-col-xs-12 m-grid-col-lg-2" href="{{ url('/') }}" style="
font-family: AvenirLTStd-Book;
font-weight: normal;
letter-spacing: -0.022em;
color: #FFFFFF;
">
            <i class="fa fa-arrow-left"></i>
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
        <form method="POST" action="{{ route('password.email') }}" class=" margin-right-12 margin-left-12">
            @csrf
            <h3 class="form-title m-grid-col-lg-8 m-grid-col-md-8 m-grid-col-xs-8  "
                style="
                color: #333333;
               font-family: AvenirLTStd-Book;
">Forgot Passwoard</h3>
            <h5 class="control-label " style="
            color: #333333;
          font-family: AvenirLTStd-Book;
            line-height: 30px;
">Please enter your registered email address.<br>
                We'll send instructions to help reset your<br>
                Email</h5>
            <div class="form-group margin-bottom-15">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                <div class="input-icon">

                    <i style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    padding-top: 7px;
                    margin-left: 19px;
                    " class="fa fa-envelope"></i>

                    <input
                        class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                        placeholder="enter your email" name="email" id="email" type="email"
                        value="{{ old('email') }}" onfocus="this.placeholder = ''" required autocomplete="email"
                        autofocus style="
    border-radius: 20px !important;
    height: 53px;padding-left: 42px;
    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <button type="submit"
                    class="btn-login blue margin-left-8  m-grid-col-lg-offset-1 m-grid-col-md-offset-4
                    m-grid-col-xs-1"
                    style="
width: 100%;
background: #FFC107;
border-color: #FFC107;
border-radius: 20px !important;
font-family: AvenirLTStd-Book;
color: #FFFFFF;">  {{ __('Send') }}</button>
        </form>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
