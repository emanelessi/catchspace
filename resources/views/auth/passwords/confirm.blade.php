
@extends('layouts.provider.loginApp')

@section('content')
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">
    <style>
        a:hover {
            color: #ffffff !important;
            text-decoration: underline !important;

        }

    </style>
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
        <img class="margin-top-20 m-grid-col-lg-2-5 m-grid-col-md-2 m-grid-col-xs-3 margin-left-70"
             src="../assets/pages/img/login/Email.png"
        />
        <h3 class="form-title m-grid-col-lg-10 m-grid-col-md-10 m-grid-col-xs-10 margin-bottom-15 "
            style="
font-family: 'Montserrat', sans-serif !important;
font-size: 25px;
color: #333333;">Check Your Email</h3>
        <h5 class="control-label margin-left-16" style="
font-family: 'Montserrat', sans-serif !important;
font-size: 15px;
line-height: 38px;
color: #333333;">
            <i style="
                    background: -webkit-linear-gradient(#E93B77, #b9a6a6);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    padding-top: 7px;
                    margin-right: 7px;
                    " class="fa fa-dot-circle-o"></i>
            Open your email inbox.<br>
            <i style="
                    background: -webkit-linear-gradient(#E93B77, #b9a6a6);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    padding-top: 7px;
                    margin-right: 7px;
                    " class="fa fa-dot-circle-o"></i>

            Find our "Welcome" email.<br>
            <i style="
                    background: -webkit-linear-gradient(#E93B77, #b9a6a6);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    padding-top: 7px;
                    margin-right: 7px;
                    " class="fa fa-dot-circle-o"></i>

            Click Confirm and back to login to <br><span style="padding-left: 28px;">catch space.</span><br></h5>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
