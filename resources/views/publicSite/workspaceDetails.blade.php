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
            margin-left: 150px;
            margin-top: 80px;

        }

        .pic .vimg {
            width: 430px;
            height: 240px;
            margin-top: 80px;


        }

        .pic .aimg {
            width: 430px;;
            height: 228px;

            margin-top: 12px;

        }


        .content {
            width: 300px;
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
        }

        .product-grid .product-image a.image {
            display: block;
        }

        .product-grid .product-image img {
            width: 100%;
            height: auto;
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


    </style>
    <!-- ======= Hero Section ======= -->
    @include('publicSite.layouts.header')

    <!--end nav bar-->
    <!--Start Hero-->
    <div class="container">
        <div id="hero1" class="d-flex align-items-center  row">
            <div class="col   order-1 order-lg-2 hero1-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('../img/legopage.png')}}" class="img-fluid animated" alt="">
                {{--                <img src="{{'/storage/'.$workspace->image}}" class="img-fluid animated" alt="">--}}
                <div class="centered ">Find The Best Place To <br>Enjoy Your Time</div>
                <div class="centered ">
                    <nav class="navbar navbar-expand-lg shadow " id="nav1">
                        <div class="container">
                            <a class="navbar-brand" href="#">
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#main"
                                    aria-controls="main"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation"

                                >
                                    <i class="fa-solid fa-bars"></i>
                                </button>

                            </a>
                            <div class="collapse navbar-collapse  " id="main">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link p-2 p-lg-3 active " aria-current="page" href="#overview">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-2 p-lg-3 " href="#pricing">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-2 p-lg-3  " href="#meetingRoom">Meeting Room</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-2 p-lg-3" href="#amenities">Amenities</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-2 p-lg-3" href="#reviews">Reviews</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--end hero-->

    <section id="pic" class="pic">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src=" {{asset('../img/lego.png')}}" class=" rimg img-fluid" alt="">
                </div>
                <div class="col-lg-6  " data-aos="fade-left" data-aos-delay="100">
                    <img src=" {{asset('../img/space1.png')}}" class=" vimg img-fluid" alt="">
                    <img src=" {{asset('../img/space3.png')}}" class=" aimg img-fluid" alt="">
                </div>
            </div>
        </div>

        <!--lego overview-->
        <section id="star" class="star">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <div class="col-lg-6   pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h1 style="color:#FFC107 " id="overview">{{$workspace->name}}</h1>
                            <h6 style="color:  #BBBBBB ;">
                                <svg style="color:#6B60E6;  margin-bottom: 4px;" xmlns="http://www.w3.org/2000/svg"
                                     width="14" height="14" fill="currentColor" class="bi bi-geo-alt-fill"
                                     viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                                {{$workspace->location}}
                            </h6>
                            <h4 style="color:#6B60E6; margin-top: 35px; ">Overview</h4>
                            <p style=" color:#717171;font-weight: 400;">
                                    {{$workspace->workSpaceAttributes[0]->value ?? ''}}
                            </p>
                            <!--enf lego over view-->
                            <!--pricing table-->
                            <h4 style="color:#6B60E6; margin-top: 32px; " id="pricing">
                                <svg style="margin-right:6px; margin-top:-3px" xmlns="http://www.w3.org/2000/svg"
                                     width="18"
                                     height="18" fill="currentColor" class="bi bi-currency-exchange"
                                     viewBox="0 0 16 16">
                                    <path
                                        d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
                                </svg>
                                Pricing
                            </h4>

                            <div class="col-lg-6    content" data-aos="fade-left" data-aos-delay="100">
                                <div class="btn-toolbar ">
                                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right"
                                         data-aos-delay="100">
                                        @foreach($workspace_type as $workspace_types)
                                            <button class="btn main-btn5 shadow"
                                                    style="margin-right:30px ;margin-top: -90px;">
                                                {{$workspace_types->type}}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="content">
                                    <table class="table custom-table ">
                                        <thead>
                                        <th scope></th>
                                        <th class="tab">People</th>
                                        <th class="tab">Duration</th>
                                        <th class="tab">price</th>
                                        <th class="tab">access hours</th>
                                        <th class="tab">availability</th>
                                        </thead>
                                        <tbody>
                                        <tr scope="row">
                                            <th scope="row">
                                            </th>
                                            <td>
                                                1
                                            </td>
                                            <td><a>1 Month</a></td>
                                            <td>
                                                ₪ 200

                                            </td>
                                            <td>24 Hours</td>
                                            <td>
                                                <button class="btn main-btn7 shadow">Meeting room</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td>
                                                2
                                            </td>
                                            <td><a>1 Month</a></td>
                                            <td>
                                                ₪ 300

                                            </td>
                                            <td>24 Hours</td>
                                            <td>
                                                <button class="btn main-btn7 shadow">Meeting room</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td>
                                                3
                                            </td>
                                            <td><a>1 Month</a></td>
                                            <td>
                                                ₪ 400

                                            </td>
                                            <td>24 Hours</td>
                                            <td>
                                                <button class="btn main-btn7 shadow">Meeting room</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td>
                                                4
                                            </td>
                                            <td><a>1 Month</a></td>
                                            <td>
                                                ₪ 400

                                            </td>
                                            <td>24 Hours</td>
                                            <td>
                                                <button class="btn main-btn7 shadow">Meeting room</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end pricing table-->
                    <!--start Member Reviews-->
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <div class="content text-center" style="margin-left:220px ; margin-top: 60px;">
                            <div class="ratings">
                                <div class="rating-text">
                                    <h5>Member Reviews </h5>
                                </div>
                                <span
                                    class="product-rating">{{$workspace->workSpaceRating[0]->rate_avg ?? 0}}</span><span>/5</span>
                                <div class="stars">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                         height="16"
                                         fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                         height="16"
                                         fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                         height="16"
                                         fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                         height="16"
                                         fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                         height="16"
                                         fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                                <div class="ratings">
                                    <div class="rating-text">
                                        <a href="#reviews" style="color:#6B60E6 ;"> Read All Reviews </a>
                                    </div>
                                </div>
                            </div>
                            <!--end Member Reviews-->
                            <!-- start pricing box-->
                            <div class="content text-center" style="margin-top: 40px;">
                                <div class="ratings">
                                    <div class="rating-text">
                                        <h4>Starting at</h4>
                                        <h5 style="color: #6B60E6  ; ">₪{{$workspace->workSpaceAttributes[1]->value ?? ''}}/mo </h5>
                                    </div>
                                    <div class="ratings">
                                        <a class="btn main-btn6" data-target="#responsive"
                                           data-toggle="modal">ENQUIRE NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!--end pricing box-->
                            <!--start Member Access Hours -->
                            <div class="content text-center" style="margin-top: 40px;">
                                <div class="ratings">
                                    <div class="rating-text">
                                        <h5 style="color: #6B60E6  ; ">Member Access Hours </h5>
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
                                        <h6 style="color:#FFC107 ;">{{$workspace->workSpaceAttributes[2]->value ?? ''}}</h6>

                                    </div>
                                </div>
                                <!--end Member Access Hours -->
                            </div>

                        </div>

                    </div>
                </div>
                <!--end section overview + pricing -->
                <!-- start Meeting Room-->
                <h4 style="color:#6B60E6; margin-top: 35px; margin-bottom:50px; " id="meetingRoom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                         class="bi bi-bullseye" style="  margin-top:-4px;" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                    Meeting room
                </h4>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 " style="background-color:#fff ; ">
                            <div class="product-grid shadow">
                                <div class="product-image">
                                    <img class="pic-1" src="{{asset('../img/space1.png')}}">
                                </div>
                                <div class="product-content">
                                    <ul class="rating">
                                    </ul>
                                    <h5 class="title"> Call Room, 4 People</h5>
                                    <div class="product-button-group">
                                        <a class="btn main-btn6" data-target="#responsive"
                                           data-toggle="modal">ENQUIRE NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4" style="background-color:#fff ; ">
                            <div class="product-grid shadow">
                                <div class="product-image ">
                                    <img class="pic-1" src="{{asset('../img/space1.png')}}">
                                </div>
                                <div class="product-content">
                                    <ul class="rating">
                                    </ul>
                                    <h5 class="title"> Call Room, 4 People</h5>
                                    <div class="product-button-group">
                                        <a class="btn main-btn6" data-target="#responsive"
                                           data-toggle="modal">ENQUIRE NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4" style="background-color:#fff ; ">
                            <div class="product-grid shadow">
                                <div class="product-image">
                                    <img class="pic-1" src="{{asset('../img/space1.png')}}">
                                </div>
                                <div class="product-content">
                                    <ul class="rating">
                                    </ul>
                                    <h5 class="title"> Call Room,4 People</h5>
                                    <div class="product-button-group">
                                        <a class="btn main-btn6" data-target="#responsive"
                                           data-toggle="modal">ENQUIRE NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 style="color:#6B60E6; margin-top: 40px; " id="amenities">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 5px; margin-top:-3px;" width="16"
                         height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                    Amenities
                </h4>
                <section id="reviews" class="star">
                    <div class="container " data-aos="fade-up">
                        <div class="row">
                            <div class="  d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                                @foreach($workspace_services as $workspace_service)
                                    <h6 class=" col-sm-2 " id="ccc"
                                        style="margin-top: -70px;   margin-bottom: 70px; color: #AAB2B1;">
                                        <div class="col-lg-3 pt-4 pt-lg-0 content" data-aos="fade-left"
                                             data-aos-delay="100">
                                            {{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"--}}
                                            {{--                                             fill="currentColor"--}}
                                            {{--                                             class="bi bi-wifi" style="margin-top:-6px ; margin-right:5px;"--}}
                                            {{--                                             viewBox="0 0 16 16">--}}
                                            {{--                                            <path--}}
                                            {{--                                                d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.444 12.444 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049z"/>--}}
                                            {{--                                            <path--}}
                                            {{--                                                d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.455 9.455 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.473 6.473 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091l.016-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>--}}
                                            {{--                                        </svg>--}}
                                            {{$workspace_service->service->name}}
                                        </div>
                                    </h6>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <h4 style="color:#6B60E6; margin-top: 35px; margin-bottom:50px; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                         class="bi bi-star-fill" style="margin-right: 5px; margin-top:-4px;" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    Reviews
                </h4>
                <section id="star" class="star">
                    <div class="container " data-aos="fade-up">
                        <div class="row">
                            <div class="  d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                                <div class="container">
                                    <div class="row">
                                        <div class=" col-md-7 col-12 text-center mb-5 " style="  background-color:#fff;
              border-radius: 6px;
                  border: solid rgba(0, 0, 0, 0.01);
            box-shadow: 0px 10px 10px #E0E0E0; margin-left:30px;">
                                            <div class="card">
                                                <div class="row justify-content-left d-flex">
                                                    <div class="col-md-4 d-flex flex-column">
                                                        <div class="rating-box">
                                                            <h1 class="pt-4">{{$workspace->workSpaceRating[0]->rate_avg ?? 0}}</h1>
                                                            <p class="">out of 5</p>
                                                        </div>
                                                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="color: #FFC107;"
                                                                 width="16" height="16" fill="currentColor"
                                                                 class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="color: #FFC107;"
                                                                 width="16" height="16" fill="currentColor"
                                                                 class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="color: #FFC107;"
                                                                 width="16" height="16" fill="currentColor"
                                                                 class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="color: #FFC107;"
                                                                 width="16" height="16" fill="currentColor"
                                                                 class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="rating-bar0 justify-content-center">
                                                            <table class="text-left mx-auto">
                                                                <tr>
                                                                    <td class="rating-label">Excellent</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-5"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">123</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="rating-label">Good</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-4"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">23</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="rating-label">Average</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-3"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">10</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="rating-label">Poor</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-2"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">3</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="rating-label">Terrible</td>
                                                                    <td class="rating-bar">
                                                                        <div class="bar-container">
                                                                            <div class="bar-1"></div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">0</td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4  pt-lg-0 content" data-aos="fade-left"
                                             data-aos-delay="100">
                                            <div class="ratings"
                                                 style=" margin-left: -20px; margin-top: -45px; background-color: #FFC107;  ; width: 400px; height: 150px;">
                                                <div class="ratingtext">
                                                    <h5 style="color: #fff; text-align: center; margin-top: 20px;">Are
                                                        You A
                                                        Member Of
                                                        {{$workspace->name}}</h5>
                                                    <h6 style="color:  #6B60E6; text-align: center;">We are interested
                                                        in
                                                        your opinion of our space</h6>

                                                </div>
                                                <a class="btn main-btn9" href="/worker/review/{{$workspace->id}}"
                                                   style="align-items:center ;">Post A Review</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="row d-flex justify-content-center " style="background-color:#F5F3FF;  background-color:#fff;
        border-radius: 6px;
            border: solid rgba(0, 0, 0, 0.01);
      box-shadow: 0px 10px 10px #E0E0E0; padding-top: 20px; padding-bottom: 20px;">
                        <div class="row text-center">
                            <div class="col-md-4 mb-5 mb-md-0">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                         class="rounded-circle shadow-1-strong" width="150" height="150"/>
                                </div>
                                <h5 class="mb-3">Maria Smantha</h5>
                                <h6 class="text-primary mb-3">Web Developer</h6>
                                <p class="px-xl-3">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
                                    tenetur.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-center mb-0">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-5 mb-md-0">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                         class="rounded-circle shadow-1-strong" width="150" height="150"/>
                                </div>
                                <h5 class="mb-3">Maria Smantha</h5>
                                <h6 class="text-primary mb-3">Web Developer</h6>
                                <p class="px-xl-3">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
                                    tenetur.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-center mb-0">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" style="color: #FFC107;"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-0">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                         class="rounded-circle shadow-1-strong" width="150" height="150"/>
                                </div>
                                <h5 class="mb-3">Maria Smantha</h5>
                                <h6 class="text-primary mb-3">Web Developer</h6>
                                <p class="px-xl-3">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
                                    tenetur.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-center mb-0">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" style="color: #FFC107;" width="16"
                                             height="16" fill="currentColor" class="bi bi-star-fill"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class=" text-center" style="align-items: center;justify-content: space-between;
                                padding: 1rem 1rem;border-bottom: 1px solid #e5e5e5;margin-left: 33px;
                                margin-right: 52px; font-family: 'roboto', sans-serif !important; ">
                                Share Your Requirements</h4>
                        </div>
                        <h5 class="text-center" style="color:#6B60E6; font-family: 'roboto', sans-serif !important; ">We
                            will Get Back To You With The Guaranteed<br> Best Pricing And
                            Advailability </h5>
                        <div class="modal-body">
                            <div class="scroller" style="height:350px" data-always-visible="1" data-rail-visible1="1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <input type="text" placeholder="First Name" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px;     margin: 0 20px 10px 20px; font-family: 'roboto', sans-serif !important; ">
                                            <input type="text" placeholder="Last Name" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px; font-family: 'roboto', sans-serif !important; ">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="Company Email" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px;     margin: 0 20px 10px 20px; font-family: 'roboto', sans-serif !important; ">
                                            <input type="text" placeholder="Company Name" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px; font-family: 'roboto', sans-serif !important; ">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="Phone Number" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px;     margin: 0 20px 10px 20px; font-family: 'roboto', sans-serif !important; ">
                                            <input type="text" placeholder="Dedicated Desk" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px; font-family: 'roboto', sans-serif !important; ">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="1 Person" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px;     margin: 0 20px 10px 20px; font-family: 'roboto', sans-serif !important; ">
                                            <input type="text" placeholder="Estimated Start Date" class="col-md-5 "
                                                   style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px; font-family: 'roboto', sans-serif !important; ">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="1" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px;     margin: 0 20px 10px 20px; font-family: 'roboto', sans-serif !important; ">
                                            <input type="text" placeholder="Months" class="col-md-5 " style=" height: 40px;
                                                                padding: 6px 12px;background-color: #ededed;
                                                                border: 1px solid #efefef;
                                                                border-radius: 4px; font-family: 'roboto', sans-serif !important; ">
                                        </div>
                                        <div>
                                            <input type="text" placeholder="Add..." class="col-md-11 " style="height: 80px;
                                                                margin: 0 20px 10px 20px; width: 409px;
                                                                background-color: #fff;
                                                                border: 1px solid #c2cad8;
                                                                border-radius: 4px; font-family: 'roboto', sans-serif !important; ">

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div style="text-align: right;display: flex;flex-wrap: wrap;flex-shrink: 0;
                                 align-items: center;justify-content: flex-end;padding: 0.75rem;">
                                <button type="button" data-dismiss="modal" class="btn dark btn-outline main-btn2"
                                        style="background-color:#6B60E6;font-family: 'roboto', sans-serif !important;  margin-right: 20px">
                                    Close
                                </button>
                                <button type="button" class="btn green main-btn2"
                                        style="background-color: #ffc105;font-family: 'roboto', sans-serif !important;  margin-right: 33px">
                                    Save changes
                                </button>
                            </div>

                        </div>
                        <div
                            style="border-top: 1px solid #e5e5e5;  font-family: 'roboto', sans-serif !important;  margin-left: 33px;     margin-right: 52px;">
                            <p class="text-center">By completing You Accept The Catch Space<br> <span
                                    style="color:#6B60E6;">Terms Of Use</span> And <span style="color: #ffc105;">Privacy Policy</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- End Team section-->
    <!-- Footer -->


@endsection

{{--@section('js')--}}
{{--@stop--}}

