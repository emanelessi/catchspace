@extends('publicSite.layouts.index')

@section('content')
    <style>
        :root{
            --blue-color:  #6B60E6;
            --yellow-color: #ffc105;
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
            background-color: hsl(300, 3%, 94%, 0.1);


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


        #hero {
            width: 100%;
            height: 60vh;
            background: #6B60E6 ;
            background-size: cover;


            position: relative;
            padding: 0;
        }


        #hero h1 {


            font-family: 'roboto';
            color:var(--yellow-color);
            margin: 0 7px 7px 0;
            font-size:20px;
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
            font-size:28px;
            font-weight: 500;
            font-family: roboto;
            Line-height :40px;
        }



        #d5 {


            display: flex;
            text-align: center;
            background-size: cover;
        }

        /*our value*/


        .what-we-do .icon-box {

            padding: 30px 20px;
            width:379px;


            background: #fff;
        }
        .what-we-do .icon-box .icon {
            margin: 0 auto;
            width: 40px;
            height: 64px;
            background: hsl(245, 73%, 64%,.1);
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom:30px;
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
            font-family: roboto ;
            font-weight: 600;
            margin-bottom: 30px;
            padding: 50px ;
            color: B51F32;
            position: relative;
            color:#343A40;
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
        .bx
        {
            font-family: 'roboto' !important;
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
            display: inline-block;

            text-transform: none;
        }
        .container1{

            position: relative;
            padding: 50px 100px;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            background-size: cover;
        }



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
                <h2>We are team of talented designers and programmers making websites to make your work life easy</h2>
            </div>
        </div>
    </div>
</section>
<!-- end who we are-->

<!--our working value-->
<section id="what-we-do" class="what-we-do ">
    <div class="section-center">
        <div class="section-title ">
            <h2>Our Working value</h2>
            <p style="color:  #343A40 ;">We Help To Get Solutions</p>
        </div>
        <div class="container">
            <div id="d5" class="container">
                <div class=" col-md-4 d-flex ">
                    <div class="row no-margin">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-bookmark-star-fill"></i></div>
                            <h4><a>PROFESSIONALISM</a></h4>
                            <p> that we earn and maintain the trust of our customers through OUR QUALITY AND
                                TRANSPARENCY .</p>
                        </div>
                    </div>
                    <div class=" col-md-4 d-flex px-4 ">
                        <div class="row no-margin">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-bag-heart-fill"></i></div>
                                <h4><a>RESPECT & DIVERSITY</a></h4>
                                <p>CatchSpace employees are CONTRIBUTING AND SUPPORTING members of a team. in a climate
                                    of MUTUAL RESPECT AND TRUST CONDUCIVE</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4 d-flex px-4  ">
                        <div class="row no-margin">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-envelope-check-fill"></i></div>
                                <h4><a>TENING TO THE CUSTOMER</a></h4>
                                <p>In total we share the same ambition to listen and support our customers so that
                                    their success becomes ours</p>
                            </div>
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
                <h3 style="margin-top: 70px;   font-family: 'roboto';
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
                    CatchSpace has blossomed into a collective of several Coworking Office spaces located in Gaza. We
                    strive towards enhancing finding workspaces by providing them with everything they need to know
                    about these workspaces with a dashboard for the owner of the workspace provider. Our community of
                    workers motivates each other, as each one of them Grows, Inspires & Succeeds together.

                    Our intricately designed modern workspaces ooze comfort and luxury ,and fully serviced office spaces
                    provide comprehensive professional services that allow you to focus entirely on your core business.
                    Our team works round the clock to ensure that you get the most out of your workday with us. </p>

            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 ">
                <img src="{{asset('../img/about3.png')}}"
                     style="  margin-top: 40px; margin-bottom: 25px;  padding-left: 150px;  width: 450x; height: 350px; ; "
                     class="img-fluid " alt="">
            </div>
        </div>
    </div>

</section>


@endsection

{{--@section('js')--}}
{{--@stop--}}

