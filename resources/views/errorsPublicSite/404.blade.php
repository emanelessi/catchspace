@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #f36596 !important;
            border-color: #f36596 !important;

        }

        .header {
            color: #343A40;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 40px;
            line-height: 137.5%;
        }

        .submit-btn {
            border-color: #6B60E6 !important;
            background: #6B60E6 !important;
            border-radius: 3px !important;
            align-items: center;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 15px;
            color: #FFFFFF;
        }

    </style>
    <body class=" login" style="background-color: white !important;">
    <div class="logo margin-top-10 margin-bottom-40 m-grid-col-lg-7 m-grid-col-md-12 m-grid-col-xs-9 header">
        404: The page you are looking for isn’t here
    </div>
    <div class="logo margin-top-10 m-grid-col-lg-9 m-grid-col-md-12 m-grid-col-xs-12">
        <img src="{{asset('assets/pages/img/login/404-page-public.png')}}" class="center-block img-responsive
             m-grid-col-lg-9 m-grid-col-md-12 m-grid-col-xs-12  " alt="">
        <button
            class="btn blue submit-btn m-grid-col-lg-offset-5 m-grid-col-md-offset-5 m-grid-col-xs-offset-4 margin-top-15 center-block "
            onclick="window.location='{{url('/')}}'">
            <i class="fa fa-arrow-left"></i>
            Go back to Dashboard
        </button>
    </div>
    </body>

@endsection

