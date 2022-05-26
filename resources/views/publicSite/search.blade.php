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
            background: url("{{asset('../img/worker.png')}}");

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
            margin-left: -88px;
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

        .workspace-name {
            text-decoration: none !important;
            color: #6B60E6 !important;
        }

        .workspace-name:hover {
            text-decoration: none !important;
            color: var(--yellow-color) !important;
        }

        .work-img {
            width: 309px;
            height: 316px;
            position: absolute;
            top: 96px;
            left: 994px;
        }
        .filter-bar{
            background-color: #6B60E6;  height: 80px; padding-bottom: 10px;
        }

        @media only screen and (max-width: 600px) {
            .work-img {
                width: 200px;
                height: 221px;
                top: 49px;
                left: 160px;
                z-index: -1;
            }
            .filter-bar{
                height: 232px;
            }
        }


    </style>

    <section id="hero" style="height: auto;">
        @include('publicSite.layouts.header-1')

        <div class="container">
            <div class="row">
                <div id="hero1" class="d-flex align-items-center col-lg-6">
                    <div class="  col-lg-6  d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1">
                        <h1>best<img src="{{asset('../img/bom.png')}}"
                                     style="width:60px ; height:60px; margin-left: 10px;"><br>collection
                            of
                        </h1>
                        <h1 id="h1h" style=" color: #D9368B; "><strike>workspaces</strike>
                        </h1>
                        <h2 class="font-weight-bold">Viewing Results </h2>


                    </div>
                </div>

            </div>
        </div>
        <div class="input-field third-wrap">
        </div>

    </section>
        <section id="star" class="star">
            <div class="container " data-aos="fade-up">
                <div class="row">
                    @foreach($provider as $myprovider)

                    <div class="   col-lg-12  sh shadow d-flex align-items-center" data-aos="fade-right"
                         data-aos-delay="100">
                        <div class="col-lg-4">
                            <img src="{{'/storage/'.$myprovider->logo}}" class="    rimg img-fluid" alt="">
                        </div>
                        <div class="col-lg-3 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h3><a href="/worker/provider-details/{{$myprovider->id}}"
                                   class="workspace-name">{{$myprovider->name}}</a></h3>
                            <p class="t">
                                {{$myprovider->address}}
                            </p>
                            <p class="t">
                                {{$myprovider->owner_name}}
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>


@endsection

{{--@section('js')--}}
{{--@stop--}}
