@extends('admin.layouts.index')

@section('content')
    <style>
        :root {
            --blue-color: #6B60E6;
            --yellow-color: hsl(45, 100%, 51%);
            --gray-color: #EFEEEF;
        }

        body {
            font-family: "roboto", sans-serif !important;
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
            background-color: #6B60E6;;
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

        /* end Navbar */

        /* start contact us */

        .contact {

            position: relative;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            background-size: cover;
        }

        .contact .text-center {
            font-style: normal;
            font-weight: 600;
            font-size: 80px;
            color: #FFC107;

        }

        .contact .text-center p {
            margin: 26px 214px 24px 208px;
            font-size: 25px;
            font-weight: 500;
            line-height: 1.43;
            letter-spacing: -0.77px;;
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

        .form-control[readonly] {
            background-color: transparent;
            opacity: 1;
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
            font-family: 'roboto';
            border-radius: 3px !important;

        }


        :active, :focus {
            outline: none;
            box-shadow: none;
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

        .add-btn {
            border-color: #E93A76 !important;
            font-family: 'Montserrat', sans-serif !important;
            color: #FFFFFF !important;
            background: #E93A76 !important;
            border-radius: 5px !important;
            width: 170px !important;
            height: 30px !important;
            font-size: 12px !important;
        }
        label{
            font-size: 17px !important;
            letter-spacing: -0.022em !important;
            color: #E93A76 !important;
        }
    </style>
    <div class="content p-3">
        <div class="page-title ">
            <h1 class=" head-title">Profile</h1>
            @can('provider_access')
                <div class="page-toolbar">
                    <a href="/provider/edit-profile/{{$user->provider->id}}"
                       class="demo-loading-btn btn btn-primary add-btn" style="
    position: absolute;
    right: 59px;
    top: 130px;
">
                        <i class="fa fa-edit"></i>
                        Edit Provider
                    </a>
                    <!-- END PAGE TOOLBAR -->
                </div>
            @endcan
        </div>

        <div class="row align-items-stretch justify-content-center no-gutters">

            <div class="col-lg-2 ">
                @can('provider_access')
                    <img alt="" class="img-circle "
                         src="{{'/storage/'.auth()->user()->provider->logo}}" style="width: 200px;height: 200px;"/>
                @endcan
                @can('permission_access')
                    <i class="fa fa-user img-circle margin-top-40"
                       style="font-size: 100px;color:#E93A76 !important; "></i>
                @endcan

            </div>

            <div class="col-md-7" style="margin-left: 59px;">

                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name"
                               value="{{$user->full_name}}" readonly>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label>User Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                               placeholder="Your email" value=" {{$user->email}}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mb-3">
                        <label>User Phone Number</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name"
                               value="  {{$user->phone}}" readonly>
                    </div>
                    <div class="col-md-6 form-group mb-3">
                        <label>User Level</label>
                        <input type="email" class="form-control" name="email" id="email"
                               placeholder="Your email" value="  {{$user->userLevel->name }}" readonly>
                    </div>

                </div>
                @can('provider_access')
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label>Provider Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name"
                                       value="{{$user->provider->name}}" readonly>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label>Provider Owner Name</label>

                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your email" value=" {{$user->provider->owner_name}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label>Provider Address</label>

                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Your name"
                                           value="{{$user->provider->address}}" readonly>
                                </div>

                            </div>
                            @endcan
                        </div>
                    </div>
            </div>
@endsection

{{--@section('js')--}}
{{--@stop--}}



