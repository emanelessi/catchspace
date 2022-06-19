@extends('layouts.welcome.app')

@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Catch Space</title>
    <style>
        .btn:hover {
            background-color: #ffffff !important;
            color: black !important;
        }

        .nav-link:hover {
            color: #000000 !important;
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
         height: 768px; background-color: #28282B;
            background-image: linear-gradient(#28282B, #0B0A0A);">
            <a class=" m-grid-col-lg-offset-1 m-grid-col-md-offset-1 m-grid-col-xs-offset-1 " href="{{ url('/') }}">
                <img class="margin-top-20 " src="../assets/pages/img/login/catchspace-logo.png" style="
    width: 145px;
"/>
            </a>
            <div class=" m-grid-col-lg-11-5 m-grid-col-md-12 m-grid-col-xs-12 margin-top-150">

                <h1 style="
font-family: 'Montserrat', sans-serif !important;
                      font-size: 28px;
line-height: 40px;
                   text-align: center;
                   color: #FFFFFF;
">
                    For obtaining services <br>contact our team via</h1>
                <a href="tel:+970 59 96 66 563" style="
                    color: #FFF;
font-family: 'Montserrat', sans-serif !important;                   font-size: 20px;
                    line-height: 60px;
                    text-align: center;
                    display: block;
                    ">
                    <i style="
                    background: -webkit-linear-gradient(#E93B77, #b9a6a6);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    padding-top: 5px;
                    margin-left: 19px;
                    " class="fa fa-phone"></i>
                    +970 59 96 66 563</a>
                <a href="mailto:WEB@catchSpace.com"
                   style="font-family: 'Montserrat', sans-serif !important;font-size: 16px;line-height: 25px;color: #FFFFFF;text-align: center;display: block;">
                    <i style="
                    background: -webkit-linear-gradient(#E93B77, #b9a6a6);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    padding-top: 5px;
                    margin-left: 19px;
                     font-size: 16px;
                    " class="fa fa-envelope"></i>
                    WEB@catchSpace.com</a>

            </div>
        </div>
        <div class="col-md-5 login-container bs-reset" style="  background-color: #E93B77;
            background-image: linear-gradient( #E93B77, #EC769E);">
            <nav class="navbar navbar-expand-md navbar-light  shadow-sm  ">
                <div class=" navbar-collapse " id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav me-auto margin-top-25 margin-right-20 " style="list-style-type:none;
                                       color:#fff;">
                        <li class="nav-item" style="
    width: 85px;
    height: 22px;
font-family: 'Montserrat', sans-serif !important;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 22px;
    letter-spacing: -0.022em;
"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item margin-right-28" style="
font-family: 'Montserrat', sans-serif !important;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
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
                            font-family: 'Montserrat', sans-serif;
                            font-style: normal;
                            font-weight: normal;
                            font-size: 12px;
                            line-height: 24px;
                            color: #FFFFFF;
                            background-color: #E93B77;
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
