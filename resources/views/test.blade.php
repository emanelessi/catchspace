@extends('layouts.welcome.app')

@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Catch Space</title>

    <!-- Fonts -->
    {{--    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}
    <link href="http://fonts.cdnfonts.com/css/avenir-lt-std" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
        }

        .btn:hover {
            background-color: #f36596 !important;
        }

        .nav-link:hover {
            color: #f36596 !important;
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
        <div class="col-md-7 login-container bs-reset" style=" height: 768px; background-color: #6B6767;
            background-image: linear-gradient(#726767, #090808);">
            <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 64px;color:#fff">
                {{--                {{ config('app.name', 'Laravel') }}--}}
                <img class="login-logo login-6" src="../assets/pages/img/login/catchspace-logo.png"
                     style="left: 78px;top: 32px;width: 178px;height: 48.21px;"/>
            </a>
            <div class="login-content">
                <h5 style="
                        color: #FFF;
                        margin-top: -100px;
                        width: 312px;
                        height: 157px;
                        left: 65px;
                        top: 168px;
                    font-family: 'Montserrat', sans-serif !important;
                        font-style: normal;
                        font-weight: 750;
                        font-size: 35px;
                        letter-spacing: -0.022em;line-height: 70px;
                        ">Welcome to<br>
                    <span style="
                    background: -webkit-linear-gradient(#7952B3, #FFBF00);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    width: 312px;
                    height: 157px;
                    left: 65px;
                    top: 168px;
font-family: 'Montserrat', sans-serif !important;                    font-style: normal;
                    font-weight: 750;
                    font-size: 52px;
                    letter-spacing: -0.022em;

                    ">Catch space!</span>
                </h5>
                <p style="
                        color: #FFF;
                        height: 48px;
                        left: 65px;
                     font-family: 'Montserrat', sans-serif !important;
                        font-style: normal;
                        font-weight: normal;
                        font-size: 22px;
                        line-height: 48px;
                        letter-spacing: -0.022em;
                        margin-top: -7px;
                        ">
                    Manage and market your space, to Help people<br>
                    to find the best coworking space,
                    we are here to<br> help you</p>
                <div class="col-lg-8 text-left">
                    <button class="btn blue" type="submit" style="    margin-left: -13px;
                            border-color: #FFC107;
                            border-radius: 3px !important;
                            align-items: center;
                            padding: 0px;
                            position: absolute;
                            width: 175px;
                            height: 46px;
                            top: 52px;
                            background: #FFC107;
                      font-family: 'Montserrat', sans-serif !important;
                            font-style: normal;
                            font-weight: 750;
                            font-size: 16px;
                            color: #FFFFFF;
                            margin-top: 56px;
                            ">
                        Login
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-5 login-container bs-reset" style="  background-color: #7952B3;
            background-image: linear-gradient( #7952B3, #FFBF00);">
            <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="top:32px;">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav me-auto" style="list-style-type:none;
                                       margin-left: 105px;float: left;color:#fff;">
                        <li class="nav-item " style="
    padding-right: 90px;
    width: 85px;
    height: 22px;
    right: 253px;
font-family: 'Montserrat', sans-serif !important;    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    letter-spacing: -0.022em;
"><a class="nav-link">Home</a></li>
                        <li class="nav-item" style="
    padding-right: 70px;
    height: 22px;
    right: 253px;
font-family: 'Montserrat', sans-serif !important;    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 22px;
    letter-spacing: -0.022em;
"><a class="nav-link">Contact Us </a></li>
                    </ul>
                    <button class="btn blue" type="submit"
                            style="display: flex;flex-direction: column;
                            justify-content: center;align-items: center;padding: 0px;
                            position: absolute;width: 84px;height: 27px;
                            left: 400px;top: 14px;border: 1px solid #FFFFFF;
                            box-sizing: border-box;border-radius: 3px !important;
font-family: 'Montserrat', sans-serif !important;                            font-style: normal;font-weight: normal;
                            font-size: 14px;line-height: 24px;
                            color: #FFFFFF;background-color: #845ba6;margin-right: 78px;">
                        Login
                    </button>
                </div>
            </nav>
            <div>
                <img src="../assets/pages/img/login/WORKSPACES-Vector.png" style="
       width: 562px;
    height: 145px;
    left: 794px;
    margin-top: 226px;
">
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
