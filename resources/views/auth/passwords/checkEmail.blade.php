@extends('layouts.provider.loginApp')

@section('content')
    <style>
        a:hover {
            color: #ffffff !important;
            text-decoration:underline  !important;

        }

    </style>
    <body class=" login" style="
            background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);
            min-height: 1024px;
            ">
    <!-- BEGIN LOGO -->
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="
    width: 363px;
    height: 48px;
    right: 998px;
    top: 31px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
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
             style="height: 36px;left: 631px;top: 186px;font-family: Poppins;font-style: normal;font-weight: bold;font-size: 24px;line-height: 36px;
                    letter-spacing: -0.022em;margin-left: 631px;margin-top: 90px;"/>
    </a>
    <div><img src="../assets/pages/img/login/vector.png" style="
width: 1349px;    height: 145px;
    left: 794px;
    margin-top: 305px;
"></div>

    <div class="content"  style="
    border-radius: 20px !important;
    margin-top: -319px;
    margin-left: 484px;
    width: 473.49px;
    height: 455px;
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
    margin-left: 168px;
    margin-top: 52px;
    margin-bottom: 15px;
"/>
            <h3 class="form-title"
                style="margin-bottom: 10px;color: #333333;left: 556.99px;
                top: 432.17px;font-family: Inter;font-style: normal;
                font-weight: 500 !important;font-size: 33px;line-height: 80px;
                letter-spacing: -0.022em;text-transform: capitalize;margin-left: -23px;">Check your email</h3>
            <h5 class="control-label" style="color: #333333;width: 348.26px;height: 187.02px;left: 556.99px;top: 510.81px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 18px;line-height: 48px;
/* or 267% */letter-spacing: -0.022em;text-transform: capitalize;margin-left: 73px;">Please follow the instructions we sent<br> to your inbox<br>
                web@catchspace.com</h5>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
