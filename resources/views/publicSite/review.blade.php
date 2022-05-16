@extends('publicSite.layouts.index')

@section('content')
    <style>
        :root {
            --blue-color: #6B60E6;
            --yellow-color: hsl(45, 100%, 51%);
            --gray-color: #EFEEEF;
        }

        body {
            font-family: "roboto",'sans-serif';


        }


        #hero {
            width: 100%;
            height: 100vh;
            background: url({{url('"../img/reviewHero.png"')}});

            background-size: cover;
            position: relative;
            padding: 0;
        }

        #hero1 .container, #hero .container-fluid {
            margin-top: 50px;
        }

        #hero1 h1 {
            margin-top: 100px;
            font-family: 'roboto';
            margin: 0;
            font-size: 52px;
            font-weight: 700;
            line-height: 64px;
            color: rgb(0, 0, 0);
        }

        #hero1 h2 {
            padding-top: 10px;
            padding-bottom: 10px;
            color: #8d8b8b;
            font-family: 'roboto';
            margin: 10px 0 0 0;
            font-size: 18px;
        }

        #hero1 .btn-get-started {
            font-family: 'roboto';
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

        #hero .animated {
            animation: up-down 2s ease-in-out infinite alternate-reverse both;
        }

        @media (min-width: 1200px) {
            #hero {
                background-attachment: fixed;
            }
        }

        @media (max-width: 991px) {
            #hero {
                text-align: center;
            }

            #hero .container, #hero .container-fluid {
                padding-top: 68px;
            }

            #hero .animated {
                -webkit-animation: none;
                animation: none;
            }

            #hero .hero-img {
                text-align: center;
            }

            #hero .hero-img img {
                width: 30%;
            }
        }

        @media (max-width: 768px) {
            #hero h1 {
                font-size: 26px;
                line-height: 36px;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
            }

            #hero .hero-img img {
                width: 30%;
            }
        }

        @media (max-width: 575px) {
            #hero .hero-img img {
                width: 80%;
            }
        }

        @media (max-width: 575px), (max-height: 600px) {
            #hero {
                height: auto;
            }
        }

        @-webkit-keyframes up-down {
            0% {
                transform: translateY(10px);
            }
            100% {
                transform: translateY(-10px);
            }
        }

        @keyframes up-down {
            0% {
                transform: translateY(10px);
            }
            100% {
                transform: translateY(-10px);
            }
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
        .rating {
            display: flex;
            margin-right: 380px;
            flex-direction: row-reverse;
            justify-content: center;
            margin-top: 3px;
        }

        .rating > input {
            display: none;
        }

        .rating > label {
            position: relative;

            width: 1em;
            font-size: 2.8vw;
            color: #FFD600;
            cursor: pointer;
        }

        .rating > label::before {
            content: "\2605";
            position: absolute;
            opacity: 0;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before {
            opacity: 1 !important;
        }

        .rating > input:checked ~ label:before {
            opacity: 1;
        }

        .rating:hover > input:checked ~ label:before {
            opacity: 0.4;
        }

        .star .content {

            margin-top: 200px;
        }

        .star .content h3 {
            font-weight: 600;
            font-size: 32px;
            color: #6B60E6;
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
            width: 375px;;
            height: 463px;
            margin-left: 150px;
            margin-top: 50px;

        }


        .star .content #D {
            font-size: 14px;
            font-family: 'roboto';
            font-weight: 100px;
            text-align: center;
            color: #ffffff;
            background-color: #D9368B;
            border-radius: 5px;
            margin-top: 8px;
            padding: .5px 18px;

        }

        .textrating {

            margin-top: 100px;
        }

        .textrating textarea {
            border-radius: 15px;
            width: 1120px;
            border: 0;
            margin-bottom: 30px;
            font-size: 12px;
            height: auto;
            padding: 15px 15px;

            background-color: #F3F2FF;
        }

        .textrating #Label {
            font-size: 18px;
            font-weight: 1000 !important;
            margin-bottom: 0;
            font-family: 'roboto';
            padding-bottom: 20px;
        }

        .textrating #Label1 {
            font-size: 18px;
            font-weight: 1000 !important;
            margin-bottom: 0;
            font-family: 'roboto';
            padding-bottom: 20px;
            margin-top: 22px;
        }


        .rateLike {
            width: 800px;
            height: 90px;
            text-align: center;
            margin-left: 180px;
            margin-top: 40px;
            border-radius: 5px;
            align-items: center;
        }

        #like {
            font-size: 24px;
            font-family: 'roboto';
            font-weight: 600;
            color: #fff;
            letter-spacing: 2px;
        }


        .textrating #c {
            font-size: 14px;
            font-family: 'roboto';
            font-weight: 400 !important;
            text-align: center;
            color: #D9368B;
            background-color: #ffffff;
            border-radius: 5px;
            margin-top: -15px;
            padding: .5px 38px;
            margin-right: 6px;

        }

        .textrating #cr {
            font-size: 14px;
            font-family: 'roboto';
            font-weight: 400 !important;
            text-align: center;
            color: #ffffff;
            border-color: #ffffff;
            border-radius: 5px;
            margin-top: -15px;
            padding: .5px 38px;
            margin-left: 6px;

        }

        .textrating .rateLike .btn #c:hover {
            color: #ffffff;
            background-color: #D9368B;
        }


        .textrating .btns {
            font-family: 'roboto';
            font-weight: 500;
            font-size: 16px;
            display: inline-block;
            padding: 7px 40px;
            border-radius: 5px;
            border: 0;
            transition: 0.5s;
            margin-top: 20px;
            align-items: center;
            margin-left: 450px;
            margin-bottom: 30px;

            color: #fff;
            background-color: var(--yellow-color);
        }

        .textrating .btns:hover {
            background: #8377f0;
            color: #ffff;
        }

    </style>
    <!--start hero-->
    <!-- navbar -->

    @include('publicSite.layouts.header-1')
    <div class="container">
        <div id="hero1" class="d-flex align-items-center row">
            <div class="  col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Hiring Smarter<br>With Real Reviews</h1>
                <h2>In A Place Full Of Beautiful Nature We Convene Online
                    <br> Freelancers,Designers, Developers, And Startup Founders
                    <br> Under One Roof To Share Ideas.</h2>
                <div><input type="submit" value="Write Review" class="btn-get-started scrollto"/></div>
            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{asset('../img/review.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

    <!--end hero-->

    <!--star review-->


    <section id="star" class="star">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{asset('../img/lego.png')}}" class=" rimg img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                    <h3>So What Do You Think ?</h3>
                    <p class="t">
                        Your Review Of Lego Really Helps All
                        <br> Of Us-Thank You!
                    </p>
                    <p class="r">
                        Your Overall Rating Of This Coworking Space
                    </p>
                    <a class="btn" id="D">Click on stars to rate</a>
                    <div class="rating">
                        <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="textrating" class="textrating">
        <div class="container">
            <div class="form">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <div class="form-group mt-3">
                            <label id="Label">Title Of Your Review</label>
                            <textarea class="form-control" name="message" rows="5"
                                      placeholder="Summarize Your Visit Or Highlight An Interesting Detail . . ."
                                      required></textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <div class="form-group mt-3">
                                <label id="Label"> Your Review</label>
                                <textarea class="form-control" name="message" rows="5"
                                          placeholder="Tell People About Your Experiance . . ." required></textarea>

                            </div>
                            <div class="container"></div>
                            <div id="rateLike" class="rateLike p-3 align-items-center"
                                 style=" background: #6B60E6; margin-top: 40px;">
                                <p id="like">When You're In Gaza Again, Would You Go Back To Lego Workspace ?</p>
                                <a class="btn" id="c">Yes
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                         class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                                    </svg>
                                </a>
                                <a class="btn" id="cr">No
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                         class="bi bi-emoji-frown-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-2.715 5.933a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 0 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 form-group">
                <div class="form-group mt-3 ">
                    <label id="Label1"> Add A Tip To Help Coworker Still In</label>
                    <textarea class="form-control" name="message" rows="5"
                              placeholder="There Is A Place To Host Visitors"
                              required></textarea>
                </div>
            </div>
            <div class="container">
                <input type="submit" value="Post Your Review" class="btns align-items-center "/>
            </div>
        </div>
    </section>


@endsection

{{--@section('js')--}}
{{--@stop--}}
