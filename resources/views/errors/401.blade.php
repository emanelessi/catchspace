@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #9162B3 !important;
        }

    </style>
    <body class=" login" style="background-color: white !important;">
    <div class="logo margin-top-10 margin-bottom-40 m-grid-col-lg-7 m-grid-col-md-12 m-grid-col-xs-9" style="
    color: #343A40;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 44px;
    line-height: 137.5%;
">
        401: No Authorization found
    </div>
    <div class="logo margin-top-10 m-grid-col-lg-7 m-grid-col-md-11 m-grid-col-xs-12">
        <img src="{{asset('assets/pages/img/login/401-page.png')}}" class="center-block img-responsive
             m-grid-col-lg-9 m-grid-col-md-12 m-grid-col-xs-12  " alt="">
        <div class="logo margin-top-10 m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-9" style="
    color: #343A40;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 30px;
    line-height: 137.5%;
">
            This page is not publically available, to access it please to login first
        </div>
        <button
            class="btn blue m-grid-col-lg-offset-5 m-grid-col-md-offset-5 m-grid-col-xs-offset-3 margin-top-15 center-block "
            type="submit"
            onclick="window.location='{{url('/')}}'"

            style="
                            border-color: #9162B3;
                            border-radius: 3px !important;
                            align-items: center;
font-family: AvenirLTStd-Book;
                            font-style: normal;
                            font-size: 16px;
                            color: #FFFFFF;
                            background: #9162B3;
                            ">
            <i class="fa fa-arrow-left"></i>
            Go back to Dashboard
        </button>
    </div>
    </body>

@endsection

