@extends('publicSite.layouts.index-1')

@section('content')
    <style>
        :root {
            --blue-color: #6B60E6;
            --yellow-color: hsl(45, 100%, 51%);
            --gray-color: #EFEEEF;
        }

        body {
            font-family: "roboto", sans-serif !important;
        }

        .main-btn1 {
            background-color: white;
            color: #D9368B;
            font-size: small;
            width: 80px;
            height: 35px;
            padding-top: -50px;

        }

        .main-btn1:hover {
            background-color: #e47db2;
            color: #EFEEEF;
        }

        .navbar {
            background-color: #6B60E6;;
        }

        .navbar .navbar-nav .nav-link {
            color: white;
        }

        .navbar .navbar-nav .nav-link.active,
        .navbar .navbar-nav .nav-link:focus,
        .navbar .navbar-nav .nav-link:hover {
            color: var(--yellow-color);
        }


        .navbar .navbar-toggler {
            color: white;
            font-size: 25px;
            border-color: white;

        }

        .navbar .navbar-toggler:focus {
            box-shadow: none;
        }

        /*search box*/
        #hero {
            width: 100%;
            height: 90vh;


            background-size: cover;
            position: relative;
            padding: 0;

        }

        #hero1 .centered {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-family: 'roboto';
            color: hsl(0, 0%, 100%);
            font-size: 36px;
            font-weight: 800;
            line-height: 56px;
            color: #fff;
            letter-spacing: 0em;
        }


        #hero .hero1-img {

            padding-top: 20px;

        }


        #nav1 {
            margin-top: 480px;
            width: 100%;
            font-size: 16px;
            margin-right: 10px;
            background: #fff;
            border-radius: 10px;
            height: 80px;
            box-shadow: 0.625 erm, .937 erm, rgba(105, 105, 105, 0.001);
            position: relative;
        }

        #nav1 .navbar-nav .nav-link {
            color: #717171;
        }

        #nav1 .navbar-nav .nav-link.active,
        #nav1 .navbar-nav .nav-link:focus,
        #nav1 .navbar-nav .nav-link:hover {
            color: var(--yellow-color);
        }


        #nav1 .navbar-toggler {
            color: white;
            font-size: 25px;
            border-color: white;

        }

        #nav1 .navbar-toggler:focus {
            box-shadow: none;
        }


        .pic .rimg {
            width: 410px;;
            height: 480px;
            /*margin-left: 150px;*/
            /*margin-top: 80px;*/

        }

        .pic .vimg {
            width: 430px;
            height: 240px;
            /*margin-top: 80px;*/


        }

        .pic .aimg {
            width: 430px;;
            height: 228px;

            margin-top: 12px;

        }


        .content {
            /*width: 300px;*/
            margin-top: 100px;


        }

        .ratings {

            background-color: #fff;
            border-radius: 6px;
            border: solid rgba(0, 0, 0, 0.01);
            box-shadow: 0px 10px 10px #E0E0E0;
        }

        .ratings1 {

            background-color: #fff;
            border-radius: 6px;


        }

        .product-rating {

            font-size: 50px;
        }

        .stars i {

            font-size: 18px;
            color: var(--yellow-color);
        }

        .rating-text {
            margin-top: 10px;
        }


        .star .h6h {
            font-size: 10px;
        }

        .main-btn2 {
            font-size: 14px;
            font-family: 'roboto' !important;
            font-weight: 100px;
            text-align: center;
            color: #ffffff;
            background-color: #6B60E6;
            border-radius: 5px;
            margin-top: 10px;
            padding: 5px 20px;

        }


        .main-btn2:hover {
            background-color: #8077e0;
            color: #EFEEEF;

        }


        .product-grid {
            font-family: 'Oswald', sans-serif;
            text-align: center;
            background-color: #fff;
            box-shadow: 0.625 erm .937 erm rgba(105, 105, 105, 0.001);
            border-radius: 10px;
            height: 350px;


        }

        .product-grid .product-image {
            position: relative;
            margin: 10px;
        }

        .product-grid .product-image a.image {
            display: block;
        }

        .product-grid .product-image img {
            width: 100%;
            height: auto;
            margin-top: 10px;
        }


        .main-btn6 {

            color: #6B60E6;

            border-color: #6B60E6;
            font-size: small;

            margin-top: 13px;
            padding: 6px 30px;

        }

        .main-btn6:hover {
            background-color: #6B60E6;
            color: #EFEEEF;
        }


        .main-btn5 {
            background-color: white;
            box-shadow: 0.625 erm .937 erm rgba(105, 105, 105, 0.001);
            color: #6B60E6;
            font-size: 16px;

            padding: 6px 50px;

        }

        .main-btn5:hover {
            border-color: #6B60E6;;
            color: #6B60E6;
        }


        .main-btn7 {
            background-color: #6B60E6;
            box-shadow: 0.625 erm .937 erm rgba(105, 105, 105, 0.001);
            color: #fff;
            font-size: 16px;

            padding: 4px 10px;

        }

        .main-btn7:hover {
            background-color: #8178e2;;
            border-radius: 20px;
            color: #ffff;
        }

        .main-btn9 {

            background-color: #fff;
            border-color: #6B60E6;
            color: #6B60E6;
            font-size: 16px;
            margin-left: 120px;
            font-weight: 600 !important;
            margin-top: 13px;
            padding: 6px 40px;

        }

        .main-btn9:hover {
            background-color: #8f86e9;
            color: #d2cff1;
        }


        .content .table {
            background-color: #e6e4fa;

        }

        h2 {
            font-size: 20px;
        }

        .custom-table {
            margin-top: -50px;
            text-align: center;
            font-family: roboto;
        }

        .custom-table {
            min-width: 690px;
        }

        .custom-table thead tr, .custom-table thead th {
            color: var(--blue-color);
            border-top: none;
            border-bottom: none !important;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: .1rem;
        }

        .custom-table tbody th, .custom-table tbody td {
            border: #8178e2;
            font-weight: 400;
            padding-bottom: 20px;
            padding-top: 20px;
            font-weight: 300;
        }


        .card {

            background-color: #fff;
            border: none;
            padding-left: 60px;
            padding-right: 60px;
            margin-top: 30px;
            padding-top: 30px;
            padding-bottom: 30px
        }

        .rating-box {
            width: 130px;
            height: 130px;

            background-color: #FBC02D;
            color: #fff
        }

        .rating-label {
            font-weight: bold
        }

        .rating-bar {
            width: 300px;
            padding: 8px;
            border-radius: 5px
        }

        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            margin-bottom: 5px
        }

        .bar-5 {
            width: 70%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .bar-4 {
            width: 30%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .bar-3 {
            width: 20%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .bar-2 {
            width: 10%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .bar-1 {
            width: 0%;
            height: 13px;
            background-color: #FBC02D;
            border-radius: 20px
        }

        .rate-section {
            margin-left: 220px;
            margin-top: 60px;

        }

        @media only screen and (max-width: 600px) {
            #hero1 .centered {
                font-size: 20px;
                font-weight: 800;
                line-height: normal;
            }

            #nav1 {
                margin-top: 391px;
                width: 100%;
                font-size: 16px;
                margin-right: 10px;
                background: #fff;
                border-radius: 10px;
                height: 145px;
                box-shadow: 0.625 erm, .937 erm, rgba(105, 105, 105, 0.001);
                position: relative;
            }
            .rate-section {
                margin-left: 0px;

            }
        }


    </style>
    <!-- ======= Hero Section ======= -->
    @include('publicSite.layouts.header')

    <!--end nav bar-->
    <!--Start Hero-->
    <div class="container mt-5">
        <div id="hero1" class="d-flex align-items-center  row mt-5">
            <div class="col-lg-12   order-1 order-lg-2 hero1-img" data-aos="zoom-in" data-aos-delay="200"
                 style="background-color: rgb(22 22 23 / 41%);
                         position: relative;
                         border-radius: 10px">
                <img src="{{'/storage/'.$provider->logo}}" style="height: 500px;
                                                                    width: -webkit-fill-available;
                                                                    z-index: -1;
                                                                    position: relative;"
                     class="img-fluid animated" alt="">
                <div class="centered ">Find The Best Place To <br>Enjoy Your Time</div>
                <div class="centered ">
                    <nav class="navbar navbar-expand-lg shadow " id="nav1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="navbar-nav" style="float: none !important;">

                                        <li class="nav-item">
                                            <a class="nav-link p-2 p-lg-3 active " aria-current="page" href="#overview">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-2 p-lg-3  " href="#location">
                                                Location</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-2 p-lg-3  " href="#meetingRoom">{{$provider->name}}
                                                Rooms</a>
                                        </li>


                                    </ul>
                                </div>

                            </div>


                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!--end hero-->

        <section id="pic" class="pic row  mt-5">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-12 mt-5" style="
    margin-top: 110px !important;
">
                    <div class="col-lg-6 d-flex align-items-center " data-aos="fade-right" data-aos-delay="100">
                        @if(isset($provider->workSpaces[0]->image))
                            <img src="{{'/storage/'.$provider->workSpaces[0]->image }}  " class=" rimg img-fluid"
                                 style="border-radius: 20px;"
                                 alt="">
                        @else
                            <img src="{{asset('../img/lego.png') }}  " class=" rimg img-fluid" alt="">

                        @endif
                    </div>
                    <div class="col-lg-6  " data-aos="fade-left" data-aos-delay="100">
                        @if(isset($provider->workSpaces[1]->image))
                            <img src="{{'/storage/'.$provider->workSpaces[1]->image }}  " class=" vimg img-fluid"
                                 style="border-radius: 20px;margin-top: 5px;"
                                 alt="">
                        @else
                            <img src="{{asset('../img/space1.png') }}  " class=" vimg img-fluid" alt="">

                        @endif
                        @if(isset($provider->workSpaces[2]->image))
                            <img src="{{'/storage/'.$provider->workSpaces[2]->image }}  " class=" aimg img-fluid"
                                 style="border-radius: 20px;"
                                 alt="">
                        @else
                            <img src="{{asset('../img/space3.png') }}  " class=" aimg img-fluid" alt="">

                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--lego overview-->
    <section id="star" class="star">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <div class="col-lg-6   pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h1 style="color:#FFC107 ;font-weight: 800;">{{$provider->name}}</h1>


                        <h4 style="color:#6B60E6; margin-top: 35px;font-weight: 700;font-size: 20px; " id="overview">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                 class="bi bi-bullseye" style="  margin-top:-4px;" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                            Overview
                        </h4>
                        <p style="font-size: 14px;font-weight: 600;padding-top: 10px">
                            {{$provider->providerAttributes[0]->value ?? ''}}
                        </p>
                        <h4 style="color:#6B60E6; margin-top: 35px;font-weight: 700;font-size: 20px; " id="location">
                            <svg style="color:#6B60E6;  margin-bottom: 4px;" xmlns="http://www.w3.org/2000/svg"
                                 width="18" height="18" fill="currentColor" class="bi bi-geo-alt-fill"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                            Location
                        </h4>
                        <p style="font-size: 14px;font-weight: 600;padding-top: 10px">
                            {{$provider->address ?? ''}}
                        </p>
                        <!--enf lego over view-->
                    </div>


                    <!--end pricing table-->
                    <!--start Member Reviews-->
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <div class="content text-center rate-section">
                            <!--end Member Reviews-->
                            <!-- start pricing box-->
                            <div class="content text-center" style="margin-top: 40px;">
                                <div class="ratings">
                                    <div class="rating-text">
                                        <h4 style="color:#6B60E6;font-weight: 700;font-size: 15px;">Price Start
                                            From</h4>
                                        <h4 style="color:#FFC107 ; ">
                                            $ {{$provider->ProviderAttributes[1]->value ?? ''}}/mo </h4>
                                    </div>

                                </div>
                            </div>
                            <!--end pricing box-->
                            <!--start Member Access Hours -->
                            <div class="content text-center" style="margin-top: 40px;">
                                <div class="ratings">
                                    <div class="rating-text">
                                        <h5 style="color:#6B60E6; font-weight: 700;font-size: 15px;"> Access
                                            Hours </h5>
                                        <p style="font-size: 16px; color:  #717171 ;">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 style="color: #717171; margin-right:6px;" width="12" height="12"
                                                 fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                <path
                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                            </svg>
                                            Opining Hours
                                        </p>

                                    </div>
                                    <div class="ratings">
                                        <h4 style="color:#FFC107 ;">{{$provider->ProviderAttributes[2]->value ?? ''}}</h4>

                                    </div>
                                </div>
                                <!--end Member Access Hours -->
                            </div>

                        </div>

                    </div>
                </div>


                <!--end section overview + pricing -->
                <!-- start Meeting Room-->


            </div>
            <div class="container  ">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 style="color:#6B60E6; margin-top: 35px;font-weight: 700;font-size: 20px; " id="meetingRoom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                 class="bi bi-person-workspace" viewBox="0 0 16 16">
                                <path
                                    d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                <path
                                    d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                            </svg>
                            {{$provider->name}} Rooms
                        </h4>

                        @foreach($workspaces as $myworkspace)
                            <div class="col-md-4 col-sm-4 mt-5" style="background-color:#fff ; ">
                                <div class="product-grid shadow">
                                    <div class="product-image">
                                        <img class="pic-1" src="{{'/storage/'.$myworkspace->image}}"
                                             style="height: 220px;">
                                    </div>
                                    <div class="product-content">
                                        <ul class="rating">
                                        </ul>
                                        <h4 class="title">
                                            {{$myworkspace->name}}

                                        </h4>
                                        <h5 style="color: #D9368B" class="mt-2">
                                            <i class="fa fa-wordpress"></i>
                                            {{$myworkspace->workSpaceType->type}}
                                            <i class="fa fa-users" style="margin-left: 10px"></i>
                                            {{$myworkspace->capacity}}
                                        </h5>
                                        <div class="product-button-group">
                                            <a class="btn main-btn6"
                                               href="/worker/workspace-details/{{$myworkspace->id}}">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Team section-->
    <!-- Footer -->


@endsection

{{--@section('js')--}}
{{--@stop--}}

