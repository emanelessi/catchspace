@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #FECA2F !important;
        }
        a:hover {
            color: #ffffff !important;
            text-decoration:underline  !important;

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
/*    width: 119px;*/
/*    height: 32px;*/
/*right: 1240px;*/
/*top: 28px;*/
font-family: 'Avenir LT Std', sans-serif;
font-style: normal;
font-weight: normal;
/*font-size: 16px;*/
/*line-height: 48px;*/
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
             style="
             /*left: 631px;*/
             /*top: 186px;*/
             /*line-height: 36px;*/
             /*margin-left: 575px;*/
             /*margin-top: 23px;*/
             /*width: 178px;*/
             /*height: 48px;*/
"/>
    </a>
    <div>
        <img src="../assets/pages/img/login/vector.png" class="img-responsive margin-top-150 " style="
/*width: 1349px;    height: 145px;*/
/*    left: 794px;*/
/*    margin-top:192px;*/
"></div>

    <div class="content margin-top--200 " style="
    border-radius: 20px !important;
    /*width: 464px;*/
    /*height: 390px;*/
    /*top: -500px;*/
    background: #FFFFFF;
    /*margin-top:225px;*/
    /*margin-left:455px;*/
">
        <!-- BEGIN LOGIN FORM -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}" class=" margin-right-12  margin-left-12" >
            @csrf
            <h3 class="form-title m-grid-col-lg-9 m-grid-col-md-9 m-grid-col-xs-9  "
                style="
                color: #333333;
                /*height: 69.6px;*/
                /*left: 522px;*/
                /*top: 389px;*/
                font-family: 'Avenir LT Std', sans-serif;
                /*font-style: normal;*/
                /*font-weight: 500 !important;*/
                /*font-size: 33px;*/
                /*line-height: 80px;*/
                /*margin-bottom: 10px;*/
                /*letter-spacing: -0.022em;*/
                /*text-transform: capitalize;*/
                /*margin-left: -90px;*/
">Forgot Passwoard</h3>
            <h5 class="control-label " style="
            color: #333333;
            /*width: 447px;*/
            /*height: 148.42px;*/
            /*left: 522px;*/
            /*top: 468.84px;*/
font-family: 'Avenir LT Std', sans-serif;
/*            font-style: normal;*/
/*            font-weight: 500;*/
/*            font-size: 18px;*/
            line-height: 30px;
/*!* or 267% *!letter-spacing: -0.022em;*/
/*text-transform: capitalize;*/
/*margin-left: 70px;*/
">Please enter your registered email address.<br>
                We'll send instructions to help reset your<br>
                password</h5>
            <div class="form-group margin-bottom-15">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">{{ __('Email Address') }}</label>
                <input class="form-control form-control-solid placeholder-no-fix @error('email') is-invalid @enderror"
                       placeholder="enter your email" name="email" id="email" type="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus style="
    border-radius: 20px !important;
    /*width: 396px;*/
    height: 53px;
    /*left: 522px;*/
    /*top: 617px;*/
    background: #FFFFFF;
    border: 1px solid #333333;
    box-sizing: border-box;
    /*margin-left: 70px;*/
"/>
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

<button  type="submit" class="btn green" style="
            border-color: #FFC107;
            border-radius: 20px !important;
            width: 100%;
            height: 53px;
            /*left: 522px;*/
            /*top: 697px;*/
            background: #FFC107;
            /*margin-left: 70px;*/
            font-family: 'Avenir LT Std', sans-serif;
            /*font-style: normal;*/
            /*font-weight: 500;*/
            font-size: 22px;
            /*line-height: 48px;*/
            /*letter-spacing: -0.022em;*/
            color: #FFFFFF;
">  {{ __('Log in') }}</button>
        </form>
        <!-- END LOGIN FORM -->

    </div>


    </body>
@endsection
