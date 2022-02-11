@extends('layouts.provider.loginApp')

@section('content')
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">

    <style>
        a:hover {
            color: #ffffff !important;
            text-decoration:underline  !important;

        }

    </style>
    <body class=" login" style="
            background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);
            min-height: 768px;
            ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="
  width: 119px;
height: 32px;
right: 1179px;
top: 28px;
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
font-weight: normal;
font-size: 16px;
line-height: 48px;
letter-spacing: -0.022em;
color: #FFFFFF;
" >
            Back to main
        </a>
    </div>

    <!-- BEGIN LOGIN -->
    <a class="navbar-brand" href="{{ url('/') }}">
        <img class="login-logo login-6" src="../assets/pages/img/login/catchspace-logo.png"
             style="width: 178px;height: 49px;left: 603px;top: 108px;margin-left: 590px;margin-top: 50px; "/>
    </a>
    <div><img src="../assets/pages/img/login/vector.png" style="
width: 1349px;    height: 145px;
    left: 794px;
    margin-top: 240px;
"></div>

    <div class="content"  style="
    border-radius: 20px !important;
    margin-top: -306px;
    margin-left: 489px;
    width: 431px;
    height: 392px;
    background: #FFFFFF;
    ">
        <!-- BEGIN LOGIN FORM -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <img class="login-logo login-6" src="../assets/pages/img/login/Email.png"
             style="
  width: 87px;
height: 48px;
margin-left: 137px;
margin-top: 20px;
"/>
            <h3 class="form-title"
                style="width: 321px;
height: 42px;
left: 533px;
top: 269px;
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
font-weight: normal;
font-size: 33px; margin-top: 25px;
color: #333333;">Check your email</h3>
            <h5 class="control-label" style="width: 331px;
height: 125px;
left: 496px;
top: 342px;
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 48px;margin-left: 37px;
color: #333333;">Please follow the instructions we sent<br> to your inbox<br>
                web@catchspace.com</h5>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
