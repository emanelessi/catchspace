@extends('publicSite.layouts.index')

@section('content')
    <style>
        :root {
            --blue-color: #6B60E6;
            --yellow-color: #ffc105;
            --gray-color: #EFEEEF;
        }

        body {
            font-family: "roboto", 'sans-serif';
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

        .main-btn1:hover {
            background-color: #e47db2;
            color: #EFEEEF;
        }

        .navbar {
            background-color: #F0EFF019;

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


        #hero {
            width: 100%;
            height: 60vh;
            background: #6B60E6;
            background-size: cover;
            position: relative;
            padding: 0;
        }


        #hero h1 {
            font-family: 'roboto';
            color: var(--yellow-color);
            margin: 0 7px 7px 0;
            font-size: 20px;
            font-weight: 500;
            line-height: 30px;
            color: #FFC107;
            letter-spacing: 0em;
            padding-top: 50px;
            text-align: left;
        }

        #hero h2 {
            color: rgb(255, 255, 255);
            margin-bottom: 20px;
            text-align: left;
            font-size: 28px;
            font-weight: 500;
            font-family: roboto;
            Line-height: 40px;
        }


        #d5 {
            display: flex;
            text-align: center;
            background-size: cover;
        }

        /*our value*/


        .what-we-do .icon-box {

            padding: 30px 20px;
            width: 379px;


            background: #fff;
        }

        .what-we-do .icon-box .icon {
            margin: 0 auto;
            width: 40px;
            height: 64px;
            background: hsl(245, 73%, 64%, .1);
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            transition: ease-in-out 0.3s;
        }

        .what-we-do .icon-box .icon i {
            color: #6B60E6;
            font-size: 28px;
        }

        .what-we-do .icon-box h4 {
            font-weight: 700;
            font-family: roboto;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .what-we-do .icon-box h4 a {
            color: #FFC107;
            transition: ease-in-out 0.3s;
        }

        .what-we-do .icon-box p {
            line-height: 24px;
            font-size: 14px;
            font-family: roboto;
            margin-bottom: 0;
        }

        .what-we-do .icon-box:hover {
            border-color: #fff;
            box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
        }

        .what-we-do .icon-box:hover h4 a, .what-we-do .icon-box:hover .icon i {
            color: #FFC107;
        }


        .section-title {
            text-align: center;
            padding-bottom: 30px;
        }

        .section-title h2 {
            font-size: 32px;
            font-family: roboto;
            font-weight: 600;
            margin-bottom: 30px;
            padding: 50px;
            color: B51F32;
            position: relative;
            color: #343A40;
        }

        .section-title h2::before {
            content: "";
            position: absolute;

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
            background: #FFC107;
            bottom: 0;
            left: calc(50% - 20px);
        }

        .section-title p {
            margin-bottom: 0;
            counter-reset: #A84B8C;
        }

        .bx {
            font-family: 'roboto' !important;
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
            display: inline-block;

            text-transform: none;
        }

        /*.container1 {*/

        /*    position: relative;*/
        /*    padding: 50px 100px;*/

        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    flex-direction: column;*/

        /*    background-size: cover;*/
        /*}*/


        .team-list img {
            width: 50%;
        }

        .team-list .content {
            width: 50%;
        }

        .team-list .content .follow {
            position: absolute;
            bottom: 24px;
        }

        .team-list:hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
        }

        .team, .team-list {
            -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
        }

        .team .content .title, .team-list .content .title {
            font-size: 18px;
        }

        .team .overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0;
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .team .member-position, .team .team-social {
            position: absolute;
            bottom: -35px;
            right: 0;
            left: 0;
            margin: auto 10%;
            z-index: 99;
        }

        .team .team-social {
            bottom: 40px;
            opacity: 0;
            -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) 0s;
        }

        .team:hover {
            -webkit-transform: translateY(-7px);
            transform: translateY(-7px);
            -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        }

        .team:hover .overlay {
            opacity: 0.6;
        }

        .team:hover .team-social {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .team-list img,
            .team-list .content {
                width: 100%;
                float: none !important;
            }

            .team-list img .follow,
            .team-list .content .follow {
                position: relative;
                bottom: 0;
            }
        }


        .rounded {
            border-radius: 5px !important;
        }

        .para-desc {
            max-width: 600px;
        }

        .text-muted {
            color: #8492a6 !important;
        }

        .section-title .title {
            letter-spacing: 0.5px;
            font-size: 30px;
        }

        .section-subtitle {
            color: black !important;
            text-align: center !important;
            font-size: 30px !important;
            font-weight: 800 !important;
        }

        /*end our value*/

    </style>

    @include('publicSite.layouts.header')
    <!-- navbar -->
    <section id="hero" style="background-image: url({{asset('../img/background2.png')}});">
        <!--who we are-->
        <div class="container p-3">
            <div class="row">
                <div class="p-3 col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                    <h1>- - WHO WE ARE</h1>
                    <h2>We are team of talented designers and programmers making websites to make your work life
                        easy</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end who we are-->

    <!--our working value-->
    <section id="what-we-do" class="what-we-do ">
        <div class="section-center">
            <div class="section-title ">
                <h2 class="section-subtitle">Our Working value</h2>
                <p style="color:  #343A40 ;">We Help To Get Solutions</p>
            </div>
            <div class="container">
                <div id="d5" class="container">
                    <div class="row no-margin">
                        <div class=" col-md-4 d-flex ">

                            <div class="icon-box">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6B60E6"
                                         class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                                    </svg>
                                </div>
                                <h4><a>PROFESSIONALISM</a></h4>
                                <p> that we earn and maintain the trust of our customers through OUR QUALITY AND
                                    TRANSPARENCY .</p>
                            </div>
                        </div>
                        <div class=" col-md-4 d-flex px-4 ">
                            <div class="icon-box">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6B60E6"
                                         class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                                    </svg>
                                </div>
                                <h4><a>RESPECT & DIVERSITY</a></h4>
                                <p>CatchSpace employees are CONTRIBUTING AND SUPPORTING members of a team. in a
                                    climate
                                    of MUTUAL RESPECT AND TRUST CONDUCIVE</p>
                            </div>
                        </div>
                        <div class=" col-md-4 d-flex px-4  ">
                            <div class="icon-box">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6B60E6"
                                         class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
                                        <path
                                            d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                                    </svg>
                                </div>
                                <h4><a>TENING TO THE CUSTOMER</a></h4>
                                <p>In total we share the same ambition to listen and support our customers so that
                                    their success becomes ours</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End our working value-->


    <!-- Our story -->
    <section id="about" class="about p-3" style=" background: #ffc105; margin-top: 60px;">
        <div class="container ">
            <div class="row">
                <div class="p-3 col-lg-6 pt-4 pt-lg-0 content">
                    <h3 style="
                    margin-top: 70px;
                       font-family: 'roboto';
            color:var(--yellow-color);
            margin: 0 7px 7px 0;
            font-size:36px;
           font-weight: 800;
            line-height: 30px;
            color: #FFFF;
            letter-spacing: 0em;
            padding-top: 50px;
            text-align: left;">Our Story</h3>
                    <p class="fst" style="   color: rgb(255, 255, 255);
            margin-bottom: 20px;
            margin-top: 40px;
            text-align: left;
            font-size:14px;
            font-weight: 400;
            font-family: roboto;
            Line-height :30px;">
                        CatchSpace has blossomed into a collective of several Coworking Office spaces located in Gaza.
                        We
                        strive towards enhancing finding workspaces by providing them with everything they need to know
                        about these workspaces with a dashboard for the owner of the workspace provider. Our community
                        of
                        workers motivates each other, as each one of them Grows, Inspires & Succeeds together.

                        Our intricately designed modern workspaces ooze comfort and luxury ,and fully serviced office
                        spaces
                        provide comprehensive professional services that allow you to focus entirely on your core
                        business.
                        Our team works round the clock to ensure that you get the most out of your workday with us. </p>

                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 ">
                    <img src="{{asset('../img/about3.png')}}"
                         style="  margin-top: 40px; margin-bottom: 25px;  padding-left: 150px;  width: 450px; height: 350px; "
                         class="img-fluid " alt="">
                </div>
            </div>
        </div>

    </section>


    <div class="section-center">
        <div class="section-title mt-4">
            <h2 class="section-subtitle">Meet our team</h2>
            <p style="color:  #343A40 ;">Meet and Greet our Team Members </p>
        </div>
        <div class="container mt-10 ">
            <div class="row">
                <div class="col-lg-3 col-md-6  mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="{{asset('../img/jumana.png')}}"
                             class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Jumana Al-shawwa</h4>
                            <small class="text-muted">UX/UI designer <br> Front end developer</small>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6  mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="{{asset('../img/eman.png')}}"
                             class="img-fluid avatar avatar-medium shadow rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Eman el-essi</h4>
                            <small class="text-muted">Back end developer <br> php laravel</small>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="{{asset('../img/dina.png')}}"
                             class="img-fluid avatar avatar-medium  rounded-pill shadow " alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Dina Akila</h4>
                            <small class="text-muted">Back end developer <br> php laravel</small>

                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6  mt-4 pt-2">
                    <div class="team text-center rounded p-3 py-4">
                        <img src="{{asset('../img/dalia.png')}}"
                             class="img-fluid avatar avatar-medium shadow bg-whait rounded-pill" alt="">
                        <div class="content mt-3">
                            <h4 class="title mb-0">Dalia Marouf</h4>
                            <small class="text-muted">UX/UI designer </small>

                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div>
@endsection

{{--@section('js')--}}
{{--@stop--}}

