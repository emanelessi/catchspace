@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #7952b3 !important;
        }

    </style>
    <body class=" login" style="background-color: white !important;">
    <div class="logo margin-top-10 margin-bottom-40 m-grid-col-lg-7 m-grid-col-md-12 m-grid-col-xs-8" style="
    color: #343A40;
    font-family: 'Avenir LT Std', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 35px;
    line-height: 137.5%;
">
        404: The page you are looking for isn’t here
    </div>
    <div >
            <img src="../assets/pages/img/login/404-page.png" class=" img-responsive
             m-grid-col-lg-7 m-grid-col-md-7 m-grid-col-xs-7 margin-left-40 " alt="" >

                <button class="btn blue m-grid-col-lg-offset-5-5 m-grid-col-md-offset-5 m-grid-col-xs-offset-4 margin-top-15 " type="submit" style="
                      /*margin-left: -13px;*/
                            border-color: #7952B3;
                          border-radius: 3px !important;
                            align-items: center;
                            /*padding: 0px;*/
                            /*position: absolute;*/
                            /*width: 175px;*/
                            /*height: 46px;*/
                            /*top: 52px;*/
                       font-family: 'Avenir LT Std', sans-serif;
                            font-style: normal;
                            /*font-weight: 750;*/
                            font-size: 16px;
                            color: #FFFFFF;
                            /*margin-top: 56px;*/
                            background: #7952B3;
                            ">
                    Go back to Dashboard
                </button>


    </div>



    </body>

@endsection

