@extends('layouts.provider.loginApp')

@section('content')
    <body class=" login" style="background-color: white !important;">
    <div class="logo margin-top-10 margin-bottom-40 m-grid-col-lg-7 m-grid-col-md-12 m-grid-col-xs-9" style="
    color: #343A40;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 44px;
    line-height: 137.5%;
">
        500: Interal Server Error
    </div>
    <div class="logo margin-top-10 m-grid-col-lg-8 m-grid-col-md-12 m-grid-col-xs-12">
        <img src="{{asset('assets/pages/img/login/500-page.png')}}" class="center-block img-responsive
             m-grid-col-lg-9 m-grid-col-md-12 m-grid-col-xs-12  " alt="">
    </div>
    <div class="logo m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-9" style="
    color: #343A40;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 30px;
    line-height: 137.5%;
">
        We can’t seem to find the page you are looking for!
    </div>
    </body>
@endsection

