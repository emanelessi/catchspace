@extends('publicSite.layouts.index-1')

@section('content')
    <!--start hero-->
    <!-- navbar -->
    <style>
        :root {
            --blue-color: #6B60E6;
            --yellow-color: hsl(45, 100%, 51%);
            --gray-color: #EFEEEF;
        }

        body {
            font-family: "roboto", " sans-serif";


        }


        #hero {
            width: 100%;
            height: 100vh;
            background: url("../img/works.png");

            background-size: cover;
            position: relative;
            padding: 0;
        }

        .search #search input {
            width: 250px;
            height: 50px;

        }

        #hero1 h1 {
            padding-top: 70px;
            font-family: roboto;
            margin: 0;
            font-size: 52px;
            font-weight: 700;
            line-height: 64px;
            color: rgb(0, 0, 0);
        }

        .container #hero1 #h1h {


            padding-top: 10px;
            font-family: roboto;
            line-break: initial;
            margin: 0;
            font-size: 56px;
            font-weight: 700;
            line-height: 64px;
            color: rgb(0, 0, 0);
        }

        #hero1 h2 {
            padding-top: 15px;
            padding-bottom: 10px;
            margin-left: 2px;
            color: #545454;
            font-family: roboto;
            font-weight: 600 !important;
            font-size: 16px;

        }

        .php-email-form {
            width: 67%;
            border-top: 3px solid #24b7a4;
            border-bottom: 3px solid #24b7a4;
            padding: 30px;
            background: rgba(255, 255, 255, 0.06);
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
        }

        .contact .php-email-form .form-group {
            padding-bottom: 20px;
        }

        .container .box {
            padding-right: 50px;
        }

        #hero .container .icon-box {

            text-align: center;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            padding: 2px 20px;

            width: 100%;
        }

        #hero .container .icon-box svg {
            font-size: 22px;
            color: #6B60E6;

        }

        #hero .container .icon-box h5 {
            font-size: 12px;
            font-weight: 700;
            margin-top: 7px;
            color: #4B4B4B;
        }


        #hero1 .btn-get-started {
            font-family: roboto;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 7px 40px;
            border-radius: 5px;
            border: 0;
            transition: 0.5s;
            margin-top: 30px;
            color: #fff;
            background-color: #6B60E6;
        }

        #hero .btn-get-started:hover {
            background: #8377f0;
            color: #ffff;
        }

        #hero1 .hero-img img {
            height: 500px;
            width: 850px;
            margin-top: 50px;
            margin-left: 190px;
        }


        /* start Navbar */
        .main-btn1 {
            background-color: #D9368B;
            color: #fff;
            font-size: small;
            width: 80px;
            height: 35px;
            padding-top: -50px;

        }

        .main-btn1:hover {
            background-color: #e47db2;
            color: #EFEEEF;
        }


        .navbar .navbar-nav .nav-link {
            color: #6B60E6;
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

        /* end Navbar */

        /*star rating*/


        #hero2 h2 {
            padding-top: 100px;

            font-family: roboto;
            margin: 0;
            font-size: 30px;
            font-weight: 700;
            line-height: 40px;
            color: rgb(0, 0, 0);
        }


        .container .cheak1 {
            margin-top: 30px;
            border-radius: 20px;
            align-items: center;

        }

        .container .cheak1 label {
            color: #ffff;
            font-weight: 300;
            margin-top: 13px;
            font-size: 18px;

            margin-left: 100px;
        }

        .container .cheak1 h6 {
            margin-top: 20px;
            font-size: 24px;
            margin-left: 40px;
            color: #FFC107;

        }


        .checkbox {
            padding-left: 20px;


        }

        .checkbox label {
            display: inline-block;
            vertical-align: middle;
            position: relative;
            padding-left: 5px;
        }

        .checkbox label::before {
            content: "";
            display: inline-block;
            position: absolute;
            width: 17px;
            height: 17px;
            left: 0;
            margin-left: -20px;
            border: 1px solid #cccccc;
            border-radius: 3px;
            margin-top: 5px;
            background-color: #fff;
            -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        }

        .checkbox label::after {
            display: inline-block;
            position: absolute;
            width: 20px;
            height: 20px;
            left: 0;
            top: 0;
            margin-top: 5px;
            margin-left: -20px;
            padding-left: 3px;

            font-size: 11px;

        }


        .checkbox input[type="checkbox"] {
            opacity: 0;
            z-index: 1;
        }

        .checkbox input[type="checkbox"]:focus + label::before {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        .checkbox input[type="checkbox"]:checked + label::after {
            font-family: "FontAwesome";
            content: "\f00c";
        }

        .checkbox input[type="checkbox"]:disabled + label::before {
            background-color: #6B60E6;
            cursor: not-allowed;
        }

        .checkbox input[type="checkbox"]:disabled + label::after {
            color: #6B60E6;
            margin-top: 5px;
        }

        .checkbox-primary input[type="checkbox"]:checked + label::befor {
            background-color: #fff

        }

        .checkbox-primary input[type="checkbox"]:checked + label::after {
            color: #6B60E6;
        }

        .checkbox-success input[type="checkbox"]:checked + label::befor {
            background-color: #fff

        }

        .checkbox-success input[type="checkbox"]:checked + label::after {
            color: #6B60E6;
        }


        .star {

            margin-top: 50px;
        }

        .star .content {
            margin-left: 50px;

        }

        .star .content h3 {
            margin-top: 0px;
            font-weight: 600;
            font-size: 32px;
            color: #000000;
            margin-right: 30px;
            font-family: "roboto", sans-serif;
        }

        .star .content .t {
            font-weight: 800;
            font-size: 14px;
            color: #4B4B4B;
            font-family: "roboto", sans-serif;

        }

        .star .content .r {
            font-weight: 800;
            font-size: 12px;
            color: #AAB2B1;
            font-family: "roboto", sans-serif;
            margin-top: 20px;

        }


        .star .rimg {
            width: 450px;;
            height: 250px;
            margin-left: 10px;
            margin-top: 0px;

        }


        .main-btn2 {
            font-size: 14px;
            font-family: roboto;
            font-weight: 100px;
            text-align: center;
            color: #ffffff;
            background-color: #D9368B;
            border-radius: 5px;
            margin-top: 20px;
            padding: 5px 20px;

        }


        .main-btn2:hover {
            background-color: #e47db2;
            color: #EFEEEF;
        }

        .main-btn3 {
            font-size: 14px;
            color: #ffffff;
            border-radius: 50px;
            padding: 10px;
            margin-left: 64px;
            background: var(--yellow-color);
            transition: all .2s ease-out, color .2s ease-out;
            font-weight: 500;
            width: 100px;
            border: 0;
        }


        .main-btn3:hover {
            color: #EFEEEF;
            background-color: #ffe084;
        }

        .product-rating {

            font-size: 20px;
            color: #D9368B;
        }

        .stars i {

            font-size: 18px;
            margin-top: 8px;
            color: #FFC107;
        }

        .rating-text {
            margin-top: 3px;
        }


        .container .sh {
            box-shadow: 0px 5px 6px 0px rgba(110, 123, 131, 0.1);
            margin-top: 5px;
            height: 300px;
            background-color: white;
            border-radius: 20px;
        }


    </style>

    <section id="hero">
        @include('publicSite.layouts.header-1')

        <div class="container">
            <div id="hero1" class="d-flex align-items-center row">
                <div class="  col-lg-6  d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1">
                    <h1>best<img src="{{asset('../img/bom.png')}}" style="width:60px ; height:60px; margin-left: 10px;"><br>collection
                        of
                    </h1>
                    <h1 id="h1h" style=" color: #D9368B; "><strike>workspaces</strike>
                    </h1>
                    <h2 class="font-weight-bold">Viewing 18 Coworking Spaces In Gaza</h2>
                    <form style="

            margin-top: 5px;
            background: #fff;
            padding:5px  10px;
            position: relative;
            border-radius: 50px;
            text-align: left;
            border:0;

            " method="post" role="form" class="php-email-form col-4">
                        <div class="search"><input id="search" style="border:0" type="search" name="search" required="">
                            <input type="button " class=" btn main-btn3" value="Search"></div>
                    </form>
                    <div id="box" class=" box row">
                        <div class="col-xl-3 d-flex mt-5 align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-check2" viewBox="0 0 16 16">
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                <h5>Annually</h5>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex mt-5  align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-check2" viewBox="0 0 16 16">
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                <h5>Monthly</h5>
                            </div>
                        </div>
                        <div class="col-xl-3 mt-5 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-check2" viewBox="0 0 16 16">
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                <h5>Daily</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  order-1 order-lg-2  " data-aos="zoom-in" data-aos-delay="150">
                <img src="{{asset('../img/work.png')}}"
                     style=" margin-left:780px; width: 450px; height:450px; margin-top:-450px ;"
                     class="img-fluid animated" alt="">
            </div>
        </div>
        <div class="input-field third-wrap">
        </div>

    </section>
    <section>
        <div class="container">
            <div class="row">
                <div id="hero2" class="d-flex align-items-center ">
                    <div class="  col-md-4 pt-6 pt-lg-0 order-2 order-lg-1 d-flex  justify-content-center">
                        <h2>Viewing 18 <br>Coworking Spaces In GAZA
                        </h2>
                    </div>
                    <br>
                </div>
                <div class="cheak1  d-flex align-items-center "
                     style="   background-color: #6B60E6; width:1180px; height: 50px; padding-bottom: 10px; ">
                    <h6>Looking For ?</h6>
                    <div class="checkbox  checkbox-success">
                        <input id="checkbox1" class="styled" type="checkbox">
                        <label for="checkbox1">
                            Desk
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" class="styled" type="checkbox" checked>
                        <label for="checkbox2">
                            Private room
                        </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox3" class="styled" type="checkbox">
                        <label for="checkbox3">
                            Meeting room
                        </label>
                    </div>
                    <div class="checkbox checkbox-success">
                        <input id="checkbox4" class="styled" type="checkbox">
                        <label for="checkbox4">
                            Skype room
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="star" class="star">
        <div class="container " data-aos="fade-up">
            <div class="row">
                <div class="  sh shadow   d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{asset('../img/space1.png')}}" class="  col-lg-6  rimg img-fluid" alt="">
                    <div class="col-lg-3 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Lego</h3>
                        <p class="t">
                            Gaza, Universities, Lego Building
                        </p>
                        <div class="ratings">
                            <span class="product-rating">4.6</span><span>/5</span>
                            <div class="stars" style="color:#FFC107 ;">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-text">
                                <span style="color:#BBBBBB; font-size:12px">46 ratings & 15 reviews</span>
                            </div>
                        </div>
                        <a class="btn main-btn2" id="D">ENQUIRE NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="star" class="star">
        <div class="container " data-aos="fade-up">
            <div class="row">
                <div class="  sh shadow   d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src=" {{asset('../img/Tools.png')}}" class="  col-lg-6  rimg img-fluid" alt="">
                    <div class="col-lg-3 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Tools</h3>
                        <p class="t">
                            Gaza, Universities, Lego Building
                        </p>
                        <div class="ratings">
                            <span class="product-rating">3.9</span><span>/5</span>
                            <div class="stars" style="color:#FFC107 ;">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-text">
                                <span style="color:#BBBBBB; font-size:12px">46 ratings & 15 reviews</span>
                            </div>
                        </div>
                        <a class="btn  main-btn2" id="D">ENQUIRE NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="star" class="star">
        <div class="container " data-aos="fade-up">
            <div class="row">
                <div class="  sh shadow   d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{asset('../img/space3.png')}}" class="  col-lg-6  rimg img-fluid" alt="">
                    <div class="col-lg-3 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Lego</h3>
                        <p class="t">
                            Gaza, Universities, Lego Building
                        </p>
                        <div class="ratings">
                            <span class="product-rating">3.6</span><span>/5</span>
                            <div class="stars" style="color:#FFC107 ;">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="rating-text">
                                <span style="color:#BBBBBB; font-size:12px">46 ratings & 15 reviews</span>
                            </div>
                        </div>
                        <a class="btn  main-btn2" id="D">ENQUIRE NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

{{--@section('js')--}}
{{--@stop--}}
