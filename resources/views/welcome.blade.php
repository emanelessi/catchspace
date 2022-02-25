@extends('layouts.welcome.app')

@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Catch Space</title>

    <style>
        .nav-btn:hover {
            /*background-color: #FECA2F !important;*/
            color: #FECA2F !important;
            border-color: #FECA2F !important;

        }
    </style>
</head>

{{--    <body class="antialiased">--}}
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

<body class=" login">
<!-- BEGIN : LOGIN PAGE 5-2 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-7 login-container bs-reset" style="
         height: 768px; background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);">
            <a class=" m-grid-col-lg-offset-1 m-grid-col-md-offset-1 m-grid-col-xs-offset-1 " href="{{ url('/') }}">
                <img class="margin-top-20 " src="../assets/pages/img/login/catchspace-logo.png" style="
    width: 145px;
"/>
            </a>
            <div class=" m-grid-col-lg-offset-1 m-grid-col-md-12 m-grid-col-xs-12 margin-top-100">
                <h5 style="
                        color: #FFF;
font-family: AvenirLTStd-Book;
                        font-style: normal;
                        font-weight: 750;
                        font-size: 31px;
                        letter-spacing: -0.022em;
                        line-height: 48px;
                        ">Welcome to<br>
                    <span style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
font-family: AvenirLTStd-Book;
                    font-style: normal;
                    font-weight: 750;
                    font-size: 43px;
                    letter-spacing: -0.022em;

                    ">Catch space!</span>
                </h5>
                <p style="
                        color: #FFF;
font-family: AvenirLTStd-Book;
                        font-style: normal;
                        font-weight: normal;
                       font-size: 20px;
                        line-height: 35px;
                        letter-spacing: -0.022em;
                        ">
                    Manage and market your space, to Help people<br>
                    to find the best coworking space,
                    we are here to<br> help you</p>
                <div class="text-left margin-left-6 ">
                    <a href="{{route('register')}}" class="btn blue " style="
                            border-color: #FFC107;
                            border-radius: 3px !important;
                            align-items: center;
                            width: 113px;
                            height: 39px;
                            background: #FFC107;
                            font-family: AvenirLTStd-Book;
                            font-style: normal;
                            font-weight: 522;
                            font-size: 16px;
                            color: #FFFFFF;
                            ">
                        Sign up
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-5 login-container bs-reset" style="  background-color: #7952B3;
            background-image: linear-gradient( #7952B3, #FFBF00);">
            <nav class="navbar navbar-expand-md navbar-light  shadow-sm  ">
                <div class=" navbar-collapse " id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav me-auto margin-top-25 margin-right-20 " style="list-style-type:none;
                                       color:#fff;">
                        <li class="nav-item" style="
    width: 85px;
    height: 22px;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    letter-spacing: -0.022em;
"><a class="nav-link">Home</a></li>
                        <li class="nav-item margin-right-28" style="
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    letter-spacing: -0.022em;

"><a href="{{url('contact')}}" class="nav-link">Contact Us </a></li>
                        <a href="{{route('login')}}" class="nav-btn btn blue m-grid-col-lg-offset-9 m-grid-col-md-offset-10
                        m-grid-col-xs-12 "
                           style="
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            width: 70px;
                            height: 26px;
                            border: 1px solid #FFFFFF;
                            box-sizing: border-box;
                            border-radius: 3px !important;
                            font-family: AvenirLTStd-Book;
                            font-style: normal;
                            font-weight: normal;
                            font-size: 12px;
                            line-height: 24px;
                            color: #FFFFFF;
                            background-color: #845ba6;
">
                            Login
                        </a>
                    </ul>

                </div>
            </nav>
            <div>
                <img src="../assets/pages/img/login/WORKSPACES-Vector.png"
                     class="img-responsive margin-top-195" style="
       width: 562px;
    height: 145px;
">
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
