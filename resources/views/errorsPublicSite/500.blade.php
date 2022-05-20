@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .header {
            color: #343A40;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 40px;
            line-height: 137.5%;
        }

        .description {
            color: #343A40;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 25px;
            line-height: 137.5%;
        }

    </style>
    <body class=" login" style="background-color: white !important;">
    <div class="logo margin-top-10 margin-bottom-40 m-grid-col-lg-7 m-grid-col-md-12 m-grid-col-xs-9 header">
        500: Interal Server Error
    </div>
    <div class="logo margin-top-10 m-grid-col-lg-8 m-grid-col-md-12 m-grid-col-xs-12">
        <img src="{{asset('assets/pages/img/login/500-page-public.png')}}" class="center-block img-responsive
             m-grid-col-lg-9 m-grid-col-md-12 m-grid-col-xs-12  " alt="">
    </div>
    <div class="logo m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-9 description">
        We can’t seem to find the page you are looking for!
    </div>
    </body>
@endsection

