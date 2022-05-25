@extends('publicSite.layouts.index')

@section('content')
    <style>
        :root {
            --blue-color: #6B60E6;
            --yellow-color: hsl(45, 100%, 51%);
            --gray-color: #EFEEEF;
        }

        body {
            font-family: "roboto", sans-serif;
        }

        #hero {
            width: 100%;
            height: 580px;
            background: url({{asset('../img/homeBackgrong.jpg')}}) top center;
            background-size: cover;
            position: relative;
            padding: 0;

        }

        #hero1 p {
            padding-top: 40px;
            font-family: "roboto", sans-serif;
            margin: 0 0 5px 0;
            font-size: 55px;
            font-weight: 700;
            line-height: 56px;
            color: #fff;
        }

        #hero h2 {

            color: rgb(255, 255, 255);
            margin-bottom: 20px;
            font-size: 18px;
            font-family: 'roboto';
            Line-height: 45px;
        }

        #hero1 .hero1-img {
            text-align: right;
        }

        #hero1 .hero1-img img {
            width: 24.5pc;
        }

        /*end hero*/

        /* start Navbar */

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
            background-color: hsl(300, 3%, 94%, 0.3);
        }

        .navbar .navbar-nav .nav-link {
            color: white;
            font-weight: 800;
            text-decoration: none;
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

        /*search box*/


        #search {
            font-family: 'roboto', sans-serif;
        }


        .search-form {
            background: #fff;
            border-radius: 2px;
            /*height: 130px;*/

            box-shadow: 0.625 erm .937 erm rgba(105, 105, 105, 0.001);
            position: relative;
            padding: 0;


        }


        .search-form > form .row.no-margin {
            margin-right: -30px;

        }

        .search-form > form .row.no-margin > [class*="col-"] {
            padding-right: 0px;
            padding-left: 0px;
        }

        .search-form .form-group {
            position: relative;
            padding: 25px 25px 0 25px;
            /*padding: 25px;*/

            /*margin-bottom: 30px;*/
            /*margin-left: 30px;*/
        }

        .search-form .form-group:after {
            content: '';

            position: absolute;
            top: 25px;
            bottom: 0;
            right: 0px;
            width: 2px;
            height: 75px;
        }


        .search-form .form-control::-webkit-input-placeholder {
            color: #818390;

        }

        .search-form .form-control:-ms-input-placeholder {
            color: #818390;
        }

        .search-form .form-control::placeholder {
            color: #818390;
        }

        .search-form input[type="date"].form-control:invalid {
            color: #818390;
        }

        /*.search-form select.form-control {*/
        /*    -webkit-appearance: none;*/
        /*    -moz-appearance: none;*/
        /*    appearance: none;*/
        /*}*/

        .search-form select.form-control + .select-arrow {
            position: absolute;
            right: 0px;
            bottom: 30px;
            width: 36px;
            line-height: 32px;
            height: 32px;
            text-align: center;
            pointer-events: none;
            color: var(--yellow-color);


            font-size: 30px;

        }

        .booking-form .form-control {
            background-color: transparent;
            border-radius: 0px;
            height: 50px;

            -webkit-box-shadow: none;
            box-shadow: none;
            font-size: 12px;
            color: var(--yellow-color);
            font-weight: 400;

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

        .search-form .form-label {
            color: #6C6C6C;
            display: block;
            font-weight: 400;
            height: 30px;
            line-height: 25px;
            font-size: 14px;
            font-family: "roboto", sans-serif;
        }

        .search-form .form-btn {
            padding: 55px;
            margin-right: 10px;

        }

        .search-form .submit-btn {

            background: var(--yellow-color);
            text-transform: capitalize;
            display: block;
            line-height: 25px;
            width: 100%;
            height: 41px;
            font-size: 16px;
            font-weight: 400;
            background-position: 5px;
            margin-top: 3px;
            color: #fff;
            border: 1px solid;
            border-radius: 4px;
        }


        /*Why Book On Catch Space?*/
        .featured-services0 h2 {
            position: absolute;
            width: 393px;
            height: 48px;
            left: 111px;
            top: 940px;

            font-family: 'roboto';
            font-style: normal;
            font-weight: 900;
            font-size: 44px;
            line-height: 48px;
            /* identical to box height, or 109% */

            letter-spacing: -0.022em;

            color: #6B60E6;

            margin-top: -220px;
        }

        .featured-services .icon-box {

            padding: 30px;
            position: relative;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
            transition: all 0.3s ease-in-out;
            border-radius: 2px;
            z-index: 1;
        }

        .featured-services .icon-boxs {

            padding: 30px;
            position: relative;
            overflow: hidden;
            background: #6B60E6;
            box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
            transition: all 0.3s ease-in-out;
            border-radius: 2px;
            z-index: 1;
        }

        .featured-services {

            margin-top: 250px;
        }

        .featured-services .icon-box::before {
            content: "";
            position: absolute;
            background: #cbe0fb;
            right: 0;
            left: 0;
            bottom: 0;
            top: 100%;
            transition: all 0.3s;
            z-index: -1;
        }

        .featured-services .icon-box:hover::before {
            background: #6B60E6;
            top: 0;
            border-radius: 0px;
        }

        .featured-services {

            margin-top: 250px;
        }

        .featured-services .icon-boxs::before {
            content: "";
            position: absolute;
            background: #cbe0fb;
            right: 0;
            left: 0;
            bottom: 0;
            top: 100%;
            transition: all 0.3s;
            z-index: -1;
        }


        .featured-services .icon {
            margin-bottom: 15px;
        }

        .featured-services .title {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .featured-services .title a {
            color: #111;
        }

        .featured-services .description {
            font-size: 15px;
            line-height: 28px;
            margin-bottom: 0;
        }

        .featured-services .icon-box:hover .title a, .featured-services .icon-box:hover .description {
            color: #fff;
        }


        .services icon-box {
            text-align: left;
            padding: 70px 20px 80px 20px;
            transition: all ease-in-out 0.3s;

            background: #f5f5f5;

        }


        .services icon-box {
            text-align: left;
            padding: 70px 20px 80px 20px;
            transition: all ease-in-out 0.3s;

            background: #f5f5f5;
            box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
        }

        .services icon-box .icon--box {
            text-align: left;
            padding: 70px 20px 80px 20px;
            transition: all ease-in-out 0.3s;

            background: #6B60E6;
            box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
        }

        .services .icon-box .icon {
            margin: 0 auto;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: ease-in-out 0.3s;
            position: relative;
        }

        .services .icon-box h4 {
            font-weight: 600;
            line-height: 0.1em;
            margin: 15px 0 15px 0;
            font-size: 22px;

        }

        .services .icon-box h4 a {
            color: #FFC107;
            transition: ease-in-out 0.3s;
        }


        .about-border {
            display: block;
            width: 35px;
            margin-bottom: 5px;
            height: 2px;
            background: #FFC107;
            margin-right: 150px;
        }

        .services .icon-box p {
            line-height: 24px;
            font-size: 14px;
            margin-top: 30px;
            font-family: roboto;
            font-weight: 500;
        }

        .services .icon-box:hover {
            border-color: #fff;
            box-shadow: 0px 0 35px 0 #ffffff;
        }


        .services icon-boxs {
            text-align: left;
            padding: 70px 20px 80px 20px;
            transition: all ease-in-out 0.3s;

            background: #f5f5f5;

        }


        .services icon-boxs {
            text-align: left;
            padding: 70px 20px 80px 20px;
            transition: all ease-in-out 0.3s;

            background: #f5f5f5;
            box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
        }

        .services icon-boxs .icon--box {
            text-align: left;
            padding: 70px 20px 80px 20px;
            transition: all ease-in-out 0.3s;

            background: #6B60E6;
            box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
        }

        .services .icon-boxs .icon {
            margin: 0 auto;
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: ease-in-out 0.3s;
            position: relative;
        }

        .services .icon-boxs h4 {
            font-weight: 600;
            line-height: 0.1em;
            /*margin: 15px 0 15px 0;*/
            font-size: 22px;

        }
        .card-title{
            font-size: 15px;
            font-weight: 800;
        }
        .card-img-top {
            width: 100%;
            height: 350px;
        }

        .services .icon-boxs h4 a {
            color: #FFFF;
            transition: ease-in-out 0.3s;
        }

        .services .icon-boxs h4 a {
            color: #ffff;
            transition: ease-in-out 0.3s;
        }

        .about-border {
            display: block;
            width: 35px;
            margin-bottom: 5px;
            height: 2px;
            background: #FFC107;
            margin-right: 150px;
        }

        .services .icon-boxs p {
            line-height: 24px;
            font-size: 14px;
            /*margin-top: 30px;*/
            font-family: roboto;
            color: #f5f5f5;
            font-weight: 500;
        }

        .services .icon-boxs:hover {
            border-color: #fff;
            box-shadow: 0px 0 35px 0 #ffffff;
        }

        #hero3 {
            position: relative;

            display: flex;
            background-color: #6B60E6;
            justify-content: center;
            margin-top: 3px;
            flex-direction: column;

            background-size: cover;
        }

        #hero3 h1 {
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 600;
            font-size: 35px;
            line-height: 48px;
            /* identical to box height, or 109% */
            letter-spacing: -0.022em;
            margin-top: 3px;
            color: #fff;


        }


        .card-body {
            color: white;
            font-family: 'roboto';
            font-weight: 500;
        }

        .contact .contact-address, .contact .contact-phone, .contact .contact-email {
            margin-bottom: 20px;
        }


        .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #FFCA29;
            border-top-color: #eee;
            -webkit-animation: animate-loading 1s linear infinite;
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form input, .contact .php-email-form textarea {
            border-radius: 0;
            box-shadow: 00px 1px 0 1px rgba(0, 0, 0, 0.1);
            border: 0;
            font-size: 14px;
            height: auto;
            padding: 10px 15px;
            border-radius: 4px;
        }

        .contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
            border-color: #FFCA29;
        }

        .contact .php-email-form button[type=submit] {
            background: var(--yellow-color);
            border: 0;
            padding: 10px 30px 12px 30px;
            color: #fff;
            transition: 0.4s;
            border-radius: 4px;
        }

        .contact .php-email-form button[type=submit]:hover {
            background: #FFCA29;
        }
        @media only screen and (max-width: 600px){
            .login{
                margin-left: 0px !important;
            }
            #hero {
                height: 996px!important;
            }
        }
            @-webkit-keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        .search-form > form .row.no-margin {
             margin-right: 0px !important;
        }
        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @media (min-width: 768px) {
            .contact .contact-phone {
                border-left: 1px solid #ddd;
                border-right: 1px solid #ddd;
            }

            .contact .contact-address, .contact .contact-phone, .contact .contact-email {
                padding: 20px 0;
            }
        }

        .contact {
            margin-top: 60px;
        }

        .section-title h2 {
            padding: 10px;
            margin-bottom: 10px;
            color: #B51F32;
            position: relative;
            color: #343A40;
        }
        .workspace-name {
            text-decoration: none !important;
            color: #6B60E6 !important;
        }

        .workspace-name:hover {
            text-decoration: none !important;
            color: var(--yellow-color) !important;
        }

        .section-title h2::before {
            content: "";
            position: absolute;
            margin-bottom: -20px;
            display: block;
            width: 120px;
            height: 1px;
            background: #ddd;
            bottom: 1px;
            left: calc(50% - 60px);
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            display: block;
            width: 40px;
            height: 3px;
            margin-bottom: -20px;
            background: #FFC107;
            bottom: 0;
            left: calc(50% - 20px);
        }


        .offer img {
            width: 100%;
            height: 100%;
        }

        .offer .right {
            padding: 20px;
            margin: 20px;
            box-shadow: 0 0 20px 3px rgb(0 0 0/ 5%);
        }

        .offer .content h4 {
            font-size: 20px;
            color: #627795;
            font-family: serif;
        }

        .offer .rate i {
            font-size: 13px;
            color: #CC8C18;
            margin: 10px 10px 20px 0;
        }

        .offer .content h5 {
            color: #627795;
            margin-bottom: 10px;
        }

        .offer .box {
            transition: 0.5s;
        }

        .offer .box:hover {
            transform: translateY(-10px);
        }

        /*------------offer------------*/
        /*------------area------------*/
        .area img {
            margin: 0px 0 20px 80px;
        }

        .area ul li {
            display: inline-block;
            font-weight: 500;
            color: #5c646e;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .area .left {
            position: relative;
        }

        .area .left::after {
            position: absolute;
            top: 0;
            left: 0;
            content: '';
            width: 85%;
            height: 92%;
            margin: 30px;
            background: #CC8C18;
            z-index: -1;
        }


        .offer2 .heading {
            padding-top: 10%;
            text-align: center;
        }

        .offer2 .heading h3 {
            color: white;
        }

        .offer2.wrapper {
            background-image: url("../image/w3.jpg");
            height: 90vh;
            background-attachment: scroll;
        }

        .offer2.timer {
            padding-top: 0%;
        }

        .offer2.wrapper .container {
            max-width: 85%;
            margin: auto;
        }

        .offer2 .box {
            background: white;
            padding: 30px;
            text-align: left;
            transition: 0.5s;
        }

        .offer2 .box:hover {
            transform: translateY(-10px);
            cursor: pointer;
        }

        .offer2 .box h5 {
            color: #CC8C18;
            text-align: left;
            font-weight: 400;
            list-style: 5px;
            word-spacing: 10px;
        }

        .offer2 .box h3 {
            font-size: 20px;
            margin: 10px 0 10px 0;
        }

        .offer2 label {
            color: #CC8C18;
        }

        .offer2 .grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .offer2 .flex i {
            margin: 0 20px 20px 0;
            font-weight: 400;
            color: #5c646e;
        }

        /*------------offer2------------*/
        /*------------customer------------*/
        .customer .mtop {
            padding: 30px;
            max-width: 60%;
            margin: auto;
            text-align: center;
            box-shadow: 0 0 20px 3px rgb(0, 0, 0 / 5%);
        }

        .customer i {
            color: #CC8C18;
            font-size: 13px;
        }

        .customer .item h3 {
            font-size: 20px;
        }

        .customer img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }

        .customer .admin {
            justify-content: center;
        }

        .customer .admin h3 {
            margin: 0;
        }

        .customer .text {
            margin: 10px;
        }

        .customer span {
            opacity: 0.7;
        }


        .carousel {
            margin: 50px auto;
            padding: 0 70px;
        }

        .carousel .item {
            color: #747d89;
            min-height: 325px;
            text-align: center;
            overflow: hidden;
        }

        .carousel .thumb-wrapper {
            /*padding: 25px 15px;*/
            /*background: #fff;*/
            /*border-radius: 6px;*/
            /*text-align: center;*/
            /*position: relative;*/
            /*box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);*/
        }

        .carousel .item .img-box {
            height: 180px;
            margin-bottom: 20px;
            width: 100%;
            position: relative;
        }

        .carousel .item img {
            max-width: 100%;
            max-height: 100%;
            display: inline-block;
            position: absolute;
            bottom: 0;
            margin: 0 auto;
            left: 0;
            right: 0;
        }

        .carousel .item h4 {
            font-size: 18px;
        }

        .carousel .item h4, .carousel .item p, .carousel .item ul {
            margin-bottom: 5px;
        }

        .carousel .thumb-content .btn {
            color: #FFC107;
            font-size: 12px;
            letter-spacing: .5px;
            font-weight: bold;
            background: none;
            font-family: roboto;
            border: 1px solid #FFC107;
            padding: 6px 14px;
            margin-top: 5px;
            line-height: 16px;
            border-radius: 3px;
        }

        .carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
            color: #fff;
            background: #FFC107;
            box-shadow: none;
        }

        .carousel .thumb-content .btn i {
            font-size: 14px;
            font-weight: bold;
            margin-left: 5px;
        }

        .carousel .item-price {
            font-size: 13px;
            padding: 2px 0;
        }

        .carousel .item-price strike {
            opacity: 0.7;
            margin-right: 5px;
        }

        .carousel-control-prev, .carousel-control-next {
            height: 44px;
            width: 40px;
            background: #6B60E6;
            margin: auto 0;
            border-radius: 4px;
            opacity: 0.8;
        }

        .carousel-control-prev:hover, .carousel-control-next:hover {
            background: #FFC107;
            opacity: 1;
        }

        .carousel-control-prev i, .carousel-control-next i {
            font-size: 36px;
            position: absolute;
            top: 50%;
            display: inline-block;


            z-index: 5;
            left: 0;
            right: 0;
            color: #fff;
            text-shadow: none;
            font-weight: bold;
        }

        .carousel-control-prev i {
            margin-left: -2px;
        }

        .carousel-control-next i {
            margin-right: -4px;
        }

        .carousel-indicators {
            bottom: -50px;
        }

        .carousel-indicators li, .carousel-indicators li.active {
            width: 10px;
            height: 10px;
            margin: 4px;
            border-radius: 50%;
            border: none;
        }

        .carousel-indicators li {
            background: rgba(0, 0, 0, 0.2);
        }

        .carousel-indicators li.active {
            background: rgba(0, 0, 0, 0.6);
        }

        .carousel .wish-icon {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 99;
            cursor: pointer;
            font-size: 16px;
            color: #abb0b8;
        }

        .carousel .wish-icon .fa-heart {
            color: #ff6161;
        }

        .star-rating li {
            padding: 0;
        }

        .star-rating i {
            font-size: 14px;
            color: #ffc000;
        }
        .product-rating {
            font-size: 20px;
            color: #D9368B;
        }
    </style>
    @include('publicSite.layouts.header')

    <div class="container">
        <div id="hero1" class=" d-flex align-items-center row ">
            <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center pt-lg-0 order-2 order-lg-1"
                 data-aos="fade-up" data-aos-delay="200">
                <p class="col-md-12 col-sm-12">Catch best workspace you need!</p>
                <h2 class=" p-1 col-md-12 col-sm-12">we help you to find the best coworking space with Best <br> service
                    and best price for
                    available workspaces near
                    <br> we are here to help you!</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 order-1 order-lg-2 hero1-img" data-aos="zoom-in"
                 data-aos-delay="200">
                <img src="{{asset('../img/gaza.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

    <div id="search" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="search-form shadow col-lg-12 col-md-12 col-sm-12">
                        <form method="get" action="{{route('search')}}">
                            @csrf
                            <div class="row no-margin">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <span class="form-label">Address</span>
                                            <input class="form-control" type="text" name="address" placeholder="Remal" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Workspace Type</span>
                                            <select name="work_space_type_id"
                                                    class="form-control form-input">
                                                @foreach($workspace_types as $mytype)
                                                    <option
                                                        value="{{$mytype->id}}" required>{{$mytype->type}}</option>
                                                @endforeach
                                            </select>


                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label">Date</span>
                                            <input class="form-control" type="date" name="date" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <span class="form-label"> Capacity </span>
                                            <input class="form-control" type="number" name="capacity" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="form-btn">
                                            <button class="submit-btn">Check availability</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="featured-services" class="featured-services ">
        <div class="container">
            <div class="row">
                <p style="font-family: 'Roboto';
    font-style: normal;
    font-weight: 600;
    font-size: 44px;
    line-height: 48px;
    /* identical to box height, or 109% */
    letter-spacing: -0.022em;
    color: #6B60E6;
    margin-left: 25px;
    margin-top: -150px;
    margin-bottom: 50px;
    ">Why Book On <br>Catch Space?</p>
                <section id="services" class="services section-bg">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-stretch" data-aos="zoom-in"
                                 data-aos-delay="100" style="margin-bottom: 20px;">
                                <div class="icon-box iconbox ">
                                    <div class="icon">
                                        <img src="{{asset('../img/checked.png')}}"
                                             style="margin-right: 200px; width: 66px; height:66px; padding-top: -130px;">
                                    </div>
                                    <h4 class=""><a>Validated Spaces</a></h4>
                                    <div class="about-border"></div>
                                    <p>Distinguished workspaces in the Gaza Strip combine office rooms, meeting
                                        rooms with the best services</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-stretch" data-aos="zoom-in"
                                 data-aos-delay="200" style="margin-bottom: 20px;">
                                <div class="icon-boxs iconbox ">
                                    <div class="icon">
                                        <img src=" {{asset('../img/trusted.png')}}"
                                             style="margin-right: 200px; width: 66px; height:66px; padding-top: -130px;">
                                    </div>
                                    <h4 class=""><a>Trusted
                                        </a></h4>
                                    <div class="about-border"></div>
                                    <p>Customers' opinions, and their feedback on connecting them with spaces,
                                        are enough to make your decision to book</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-stretch" data-aos="zoom-in"
                                 data-aos-delay="300" style="margin-bottom: 20px;">
                                <div class="icon-boxs iconbox  ">
                                    <div class="icon">
                                        <img src="{{asset('../img/free.svg')}}"
                                             style="margin-right: 200px; width: 66px; height:66px; padding-top: -130px;">
                                    </div>
                                    <h4 class=""><a>Free</a></h4>
                                    <div class="about-border"></div>
                                    <p>Whether it's a single office or a team, you don't have to charge for our
                                        site, we're just here for your convenience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section id="featured-services" class="featured-services ">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12">
                    <p style="font-family: 'Roboto';
    font-style: normal;
    font-weight: 600;
    font-size: 44px;
    line-height: 48px;
    /* identical to box height, or 109% */
    letter-spacing: -0.022em;
    color: #6B60E6;
    margin-left: 25px;
    margin-top: -150px;
    margin-bottom: 50px;
    ">Recommendation
                        <br>our space for you</p>
                    <section id="services1" class="services1 section-bg">
                        <div class="container" data-aos="fade-up">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel"
                                 data-interval="0">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0"
                                        class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="item carousel-item active">
                                        <div class="row">
                                            @foreach($workspaces as $myworkspace)
                                            <div class="col-lg-4 col-md-4 col-sm-4" style="margin-bottom: 10px">
                                                <div class="thumb-wrapper">
                                                    <div class="img-box">
                                                        <img src=" {{'/storage/'.$myworkspace->workSpace->image}}"
                                                             class="img-fluid"
                                                             style=" width:100%" alt="">
                                                    </div>
                                                    <div class="thumb-content">
                                                        <h4 class="workspace-name">{{$myworkspace->workSpace->name}}</h4>
                                                        <div class="product-rating">
                                                            <span style="color:#BBBBBB; font-size:14px">{{$myworkspace->workSpace->provider->owner_name ?? 0}}</span>
                                                        </div>
                                                        <span class="product-rating">{{$myworkspace->rate_avg ?? 0 }}</span><span>/5</span>

                                                        <div class="star-rating"
                                                             style="color: #FFC107">

                                                            <ul class="list-inline">
                                                                @for($i=0;$myworkspace->rate_avg>$i;$i++)
                                                                <li class="list-inline-item"><i
                                                                        class="fa fa-star"></i></li>
                                                                @endfor
                                                            </ul>
                                                        </div>

                                                        <div class="rating-text">
                                                            <span style="color:#BBBBBB; font-size:12px">{{$myworkspace->rate_count ?? 0}} reviews</span>
                                                        </div>

{{--                                                        <a href="#" class="btn btn-primary ">View avilability</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control-prev" href="#myCarousel"
                                   data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel"
                                   data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>


    <!--WorkSpace-->
    <section class="book" id="hero3"
             style="background-image: url({{asset('../img/background2.png')}}); margin-top: 80px;">
        <div class="container p-3">
            <div class="row">
                <div class="p-3 col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">

                    <h1>BOOK YOUR <br> NEXT...</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($workspace_types as $type)
                    <div class="col-lg-3 col-sm-2 col-md-3">
                        <div class="card  rounded-1  shadow ">
                            <img src="{{'/storage/'.$type->image}}" class="card-img-top" alt="...">
                            <div class="card-body bg-warning  text-center ">
                                <h5 class="card-title mb-0">{{$type->type}}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="col-lg-3 col-sm-3 col-md-3">--}}
{{--                        <div class="card rounded-1 border-1-whaite">--}}
{{--                            <img src=" {{asset('../img/private room.png')}}" class="card-img-top roun" alt="...">--}}
{{--                            <div class="card-body bg-warning text-center ">--}}
{{--                                <h5 class="card-title mb-0">Private room</h5>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-sm-3 col-md-3">--}}
{{--                        <div class="card  rounded-1 ">--}}
{{--                            <img src="{{asset('../img/Skype room.png')}}" class="card-img-top" alt="...">--}}
{{--                            <div class="card-body bg-warning text-center    ">--}}
{{--                                <h5 class="card-title mb-0">Skype room</h5>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-sm-3 col-md-3">--}}
{{--                        <div class="card  rounded-1 ">--}}
{{--                            <img src="{{asset('../img/shard room.png')}}" class="card-img-top" alt="...">--}}
{{--                            <div class="card-body  bg-warning text-center ">--}}
{{--                                <h5 class="card-title   mb-0">Sheard room</h5>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <!--contact us-->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2 style="font-family: 'Roboto';
        font-style: normal;
        font-weight: 600;
        text-align: center;
        font-size: 44px;
        line-height: 48px;
        /* identical to box height, or 109% */
        letter-spacing: -0.022em;
        color: #6B60E6;

       "
                >Contact Us</h2>
                <p style="font-family: 'Roboto';
        font-style: normal;
        font-weight:800;
        text-align: center;
        font-size: 14px;
        line-height: 48px;
        /* identical to box height, or 109% */
        letter-spacing: -0.022em;
        margin-top: 20px;
        color: #FFC107;">We are waiting for your inquiries.</p>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <div class="form">
                <form action="{{ route('workerContactStore') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                   data-rule="email" data-msg="Please enter a valid email">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                  required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>

                    </div>
                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

{{--@section('js')--}}
{{--@stop--}}
