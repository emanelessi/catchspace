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
        <img class="margin-top-20 m-grid-col-lg-2 m-grid-col-md-2 m-grid-col-xs-3 margin-left-70"
             src="../assets/pages/img/login/Email.png"
        />
        <h3 class="form-title m-grid-col-lg-10 m-grid-col-md-10 m-grid-col-xs-10 "
            style="
font-family: AvenirLTStd-Book;
font-size: 30px;
color: #333333;">Check Your Email</h3>
        <h5 class="control-label margin-left-15" style="
font-family: AvenirLTStd-Book;
font-size: 18px;
line-height: 48px;
color: #333333;">Please follow the instructions we sent<br> to your inbox<br>
            web@catchspace.com</h5>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
