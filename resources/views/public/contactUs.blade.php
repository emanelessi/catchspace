@extends('public.layouts.index')

@section('content')
    <style>
        :root{
            --blue-color:  #6B60E6;
            --yellow-color: hsl(45, 100%, 51%);
            --gray-color:#EFEEEF;
        }
        body{
            font-family: "roboto" sans-serif;
        }

        /* start Navbar */

        .main-btn1 {
            background-color: white;
            color: #D9368B;
            font-size: small;
            width: 80px;
            height: 35px;
            padding-top: -50px;

        }
        .main-btn1:hover{
            background-color:#e47db2;
            color: #EFEEEF;
        }

        .navbar{
            background-color:  #6B60E6;;
        }

        .navbar .navbar-nav .nav-link{
            color:white;
        }

        .navbar .navbar-nav .nav-link.active,
        .navbar .navbar-nav .nav-link:focus,
        .navbar .navbar-nav .nav-link:hover{
            color: var(--yellow-color);
        }


        .navbar .navbar-toggler{
            color:white;
            font-size: 25px;
            border-color: white;

        }
        .navbar .navbar-toggler:focus{
            box-shadow: none;
        }
        /* end Navbar */

        /* start contact us */

        .contact{

            position: relative;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            background-size: cover;
        }

        .contact .text-center{
            font-style: normal;
            font-weight: 600;
            font-size: 80px;
            color: #FFC107;

        }

        .contact .text-center p{

            margin: 26px 214px 24px 208px;
            font-size: 25px;
            font-weight: 500;
            font-style: light;
            line-height: 1.43;
            letter-spacing: -0.77px;
        ;
            color: #6c6c6c;
        }





        .text-black {
            color: #000;
        }
        .content {
            padding: 7rem 0;
        }

        .heading {
            font-size: 2.5rem;
            font-weight: 900;
        }
        .form-control {
            border: none;
            border-bottom: 1px solid #ccc;
            padding-left: 0;
            padding-right: 0;
            border-radius: 0;
            background: none;

        }
        .col-form-label {
            color: #000;
            font-size: 13px;

        }
        .btn2, .form-control, .custom-select {
            height: 45px;
            border-radius: 0;
        }
        .custom-select {
            border: none;
            border-bottom: 1px solid #ccc;
            padding-left: 0;
            padding-right: 0;
            border-radius: 0;

        }


        .btn2 {
            border: none;
            background-color: #FFC107;
            border-radius: 0;
            font-size: 11px;
            letter-spacing: .1rem;
            font-family: roboto;
            border-radius: 3px!important;

        }
        .contact-wrap {
            box-shadow: 0 0px 20px 0 rgba(black, .2);
            background: white;}
        .col-form-label {
            font-size: 14px;
            color: darken(#ccc, 10%);
            margin: 0 0 10px 0;
            display: inline-block;
            padding: 0;
        }
        :active, :focus {
            outline: none;
            box-shadow: none;
        }

        .contact-wrap {
            box-shadow: 0 0px 20px 0 rgba(black, .2);
            background: white;}
        .col-form-label {
            font-size: 14px;
            color: darken(#ccc, 10%);
            margin: 0 0 10px 0;
            display: inline-block;
            padding: 0;
        }
        .form, .contact-info {
            padding: 40px;
        }


        label.error {
            font-size: 12px;
            color: red;
        }

        #message {
            resize: vertical;
        }
        #form-message-warning, #form-message-success {
            display: none;
        }
        #form-message-warning {
            color: #B90B0B;
        }
        #form-message-success {
            color: #55A44E;
            font-size: 18px;
            font-weight: bold;
        }
        .submitting {
            float: left;
            width: 100%;
            padding: 10px 0;
            display: none;
            font-weight: bold;
            font-size: 12px;
            color: #000;
        }

    </style>
<nav class="navbar navbar-expand-lg ">
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
            <img src="img/catxhspaceLogo.png" alt=""/>
        </a>
        <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav  align-items-center" style="margin-left: 200px;">
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-3 " aria-current="page" href="Home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-3 " href="workspace.html"><u>Workspace</u></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-3 active " href="contact us.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-3" href="aboutUs.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2 p-lg-3" href="login.html" style="margin-left: 200px;">Login</a>
                </li>
            </ul>
            <a class="btn btn-primary1 main-btn1 " id="R" href="#">Sign up</a>
        </div>
    </div>
</nav>
<!-- end navbar -->
<section class="ftco-section">
    <div class="contact" style=" background-image: url(img/background.png);">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-12">
                    <div class="text-center ">
                        <h1>Let's keep this conversation
                            going.</h1>
                        <p class=" fw-normal"> Do you have any questions or comments? Don’t hesitate to contact us we
                            are happy to help you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="content p-3">
    <div class="container">
        <div class="row align-items-stretch justify-content-center no-gutters">
            <div class="col-md-7">
                <form class="mb-5" method="post" id="contactForm" name="contactForm">
                    <div class="row">
                        <div class="col-md-6 form-group mb-3">

                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                        </div>
                        <div class="col-md-6 form-group mb-3">

                            <input type="email" class="form-control" name="email" id="email" placeholder="Your email">
                        </div>
                    </div>
                    <div class="row mb-6 p-3">
                        <div class="col-md-12 form-group ">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="4"
                                      placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5 form-group text-center ">
                            <input type="submit" value="Send Message"
                                   class="btn2 btn-block btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection

{{--@section('js')--}}
{{--@stop--}}
