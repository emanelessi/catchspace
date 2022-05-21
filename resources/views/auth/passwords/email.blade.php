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
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">

    <body class=" login" style="background-color: #28282B;
            background-image: linear-gradient(#28282B, #090808);
            height: 768px;
    ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand m-grid-col-md-3 m-grid-col-xs-12 m-grid-col-lg-2 nav-link "
           href="{{ url('/dashboard') }}" style="
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
    <a class=" m-grid-col-xs-offset-2 " href="{{ url('/dashboard') }}">
        <img class=" img-responsive m-grid-col-lg-offset-5-5  margin-bottom-5
        m-grid-col-md-offset-5 m-grid-col-xs-offset-4 " style=" height: 47px;"
             src="../assets/pages/img/login/catchspace-logo.png"
        />
    </a>
    <div>
        <img src="../assets/pages/img/login/vector.png" class="img-responsive margin-top-111 "></div>

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
            <h3 class="form-title m-grid-col-lg-7 m-grid-col-md-8 m-grid-col-xs-8 margin-left--5
            margin-bottom-10" style="
font-family: 'Montserrat', sans-serif !important;
color: #000000;
font-size: 17px;
">Forgot Passwoard</h3>
            <h5 class="control-label " style="
            color: #333333;
          font-family: 'Montserrat', sans-serif !important;
         font-size: 13px;
line-height: 30px;
">Please enter your registered email address<br>
                We'll send instructions to help reset your<br>
                email</h5>
            <div class="form-group margin-bottom-10">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                <div class="input-icon">
                    <i style="background: -webkit-linear-gradient(#E93B77, #b9a6a6);
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

            <button type="submit"
                    class="btn btn-login blue margin-left-8  m-grid-col-lg-offset-1 m-grid-col-md-offset-4
                    m-grid-col-xs-1"
                    style="
width: 100%;
background: #E93B77;
border-color: #E93B77;
border-radius: 20px !important;
font-family: 'Montserrat', sans-serif !important;
font-size: 15px;
color: #FFFFFF;">  {{ __('Send') }}</button>
        </form>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
