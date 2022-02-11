@extends('layouts.provider.loginApp')

@section('content')
    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
        }

    </style>
    <body class=" page-404-3" >
    <div class="page-inner" style="  height: 768px;">
    <div class="container error-404" >
        <h1 style="
    width: 1100px;
    height: 68.78px;
    left: 170px;
    top: 89px;
   font-family: 'Avenir LT Std', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 56px;
    line-height: 137.5%;
    text-align: center;
    color: #343A40;
">404: The page you are looking for isn’t here</h1>
    </div>
        <img src="../assets/pages/img/login/404-page.png" class="img-responsive" alt="" style="
    margin-left: 260px;
    width: 900px;
    height: 295px;
    margin-top: 60px;
    "> </div>
    <button class="btn blue" type="submit" style="
                            border-color: #7952B3;
                            border-radius: 8px !important;
                            font-family: 'Inter',sans-serif;
                            font-weight: 600;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            padding: 0px;
                            position: absolute;
                            width: 251.21px;
                            height: 48px;
                            left: 570px;
                            top: 641px;
                            background: #7952B3;
                            margin-top: -111px;
                            ">Go back to Dashboard
    </button>
    </body>
@endsection

