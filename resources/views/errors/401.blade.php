@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #7952b3 !important;
        }

    </style>
    <body class=" login" style="background-color: white !important;">
    <div class="logo margin-top-10 margin-bottom-40 m-grid-col-lg-5 m-grid-col-md-12 m-grid-col-xs-8" style="
    color: #343A40;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 35px;
    line-height: 137.5%;
">
        401: No Authorization found
    </div>
    <div>
        <img src="../assets/pages/img/login/401-page.png" class=" img-responsive
             m-grid-col-lg-4 m-grid-col-md-6 m-grid-col-xs-7 margin-left-40 " alt="">
        <div class="logo margin-top-10 margin-bottom-40 m-grid-col-lg-7 m-grid-col-md-12 m-grid-col-xs-8" style="
    color: #343A40;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 35px;
    line-height: 137.5%;
">
            This page is not publically available, to access it please to login first
        </div>
        <button class="btn blue m-grid-col-lg-offset-5 m-grid-col-md-offset-5 m-grid-col-xs-offset-4 margin-top-15 "
                type="submit"
                style="
                            border-color: #7952B3;
                            border-radius: 3px !important;
                            align-items: center;
font-family: AvenirLTStd-Book;
                            font-style: normal;
                            font-size: 16px;
                            color: #FFFFFF;
                            background: #7952B3;
                            ">
            <i class="fa fa-arrow-left"></i>

            Go back to Dashboard
        </button>


    </div>


    </body>

@endsection

