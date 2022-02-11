@extends('layouts.provider.loginApp')

@section('content')
    <style>
        #register-btn:hover {
            background-color: white !important;
            color:#7952B3 !important;
        }

    </style>
    <body class=" login" style="background-color: white !important;">
    <div class="logo" style="color: #343A40;font-family: 'Avenir LT Std', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 35px;
    line-height: 137.5%;">
        404: The page you are looking for isn’t here
    </div>
    <div class="content" style="width: 580px">
            <img src="../assets/pages/img/login/404-page.png" class=" img-responsive " alt="" >

            <div class="create-account" style="background-color: white !important;">

                    <button type="submit"  id="register-btn"  style=" border-color: #7952B3;
                            border-radius: 8px !important;
                            font-family: 'Inter',sans-serif;
                            font-weight: 600;background: #7952B3;color: white;width: 251.21px;
                           height: 48px;">Go back to Dashboard</button>

            </div>


    </div>

    </body>

@endsection

