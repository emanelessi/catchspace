@extends('admin.layouts.index')

@section('content')

    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
        }
        .page-head {
            margin-bottom: 25px !important;
        }

        .head-title {
            font-family: AvenirLTStd-Book !important;
            font-size: 33px !important;
            letter-spacing: -0.022em !important;
            color: #333333 !important;
        }

        .add-btn {
            border-color: #7952B3 !important;
            font-family: AvenirLTStd-Book !important;
            color: #FFFFFF !important;
            background: #7952B3 !important;
            border-radius: 5px !important;
            width: 160px !important;
            height: 30px !important;
            font-size: 13px !important;
        }

        .btn-filter {
            background-color: #FFFFFF !important;
            border-color: #FFFFFF !important;
            border-radius: 5px !important;
            font-family: AvenirLTStd-Book !important;
            font-weight: normal;
        !important font-size: 13 px !important;
            color: #292D32 !important;
            width: 90px !important;
            height: 29px !important;
            margin-right: -20px !important;
        }

        .body-filter {
            background: #FFFFFF !important;
            border: 1px solid #F4F4F4 !important;
            box-sizing: border-box !important;
            border-radius: 10px !important;
        }

        .span-filter {
            color: #fff !important;
            background: #7952B3 !important;
            border-radius: 5px !important;
            font-family: AvenirLTStd-Book !important;
            font-weight: normal !important;
            font-size: 15px !important;
            line-height: 15px !important;
        }

        .table-th {
            font-family: AvenirLTStd-Book !important;
            font-size: 20px !important;
            letter-spacing: -0.022em !important;
            color: #e7ae04 !important;
            padding-bottom: 15px !important;
        }

        .table-td {
            font-family: AvenirLTStd-Book !important;
            font-size: 20px !important;
            letter-spacing: 0.02em !important;
            color: #000000 !important;
        }

        .modal-back {
            background: rgb(255, 255, 255) !important;
            border-radius: 10px !important;
            display: block !important;
            margin-top: -82.5px !important;
            height: 185px !important;
            width: 480px !important;
        }

        .modal-p {
            font-family: AvenirLTStd-Book !important;
            font-weight: bold !important;
            font-size: 18px !important;
            line-height: 24px !important;
            text-align: center !important;
            letter-spacing: -0.011em !important;
            color: #333333 !important;
        }

        .btn-cansel {
            width: 125px !important;
            height: 32.2px !important;
            align-items: center !important;
            padding: 0 !important;
            border-radius: 8px !important;
            font-family: AvenirLTStd-Book !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
            border-radius: 10px !important;
            border-color: #7952B3 !important;
        }

        .btn-delete {
            width: 125px !important;
            height: 32.2px !important;
            border-color: #7952b3 !important;
            align-items: center !important;
            padding: 0 !important;
            border-radius: 8px !important;
            background-color: #7952b3 !important;
            font-family: AvenirLTStd-Book !important;
            color: #FFFFFF !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
        }

        .img-logo {
            border-color: #eaeaea !important;
            align-items: center !important;
            padding: 5px !important;
            border-radius: 8px !important;
            background-color: #eaeaea !important;
            font-family: AvenirLTStd-Book !important;
            font-size: 14px !important;
            line-height: 24px !important;
            color: #6B7280 !important;
            width: 157px !important;
        }

        .form-input {
            height: 40px !important;
            border-radius: 8px !important;
            border: solid 1px #d1d5db !important;
        }

        .btn-submit {
            width: 125px !important;
            height: 32.2px !important;
            border-color: #7952b3 !important;
            align-items: center !important;
            padding: 0 !important;
            border-radius: 8px !important;
            background-color: #7952b3 !important;
            font-family: AvenirLTStd-Book !important;
            color: #FFFFFF !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
        }

    </style>
    <div class="page-head" style="margin-bottom: 25px;">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            font-family: AvenirLTStd-Book;
            font-size: 30px;
            letter-spacing: -0.022em;
            color: #333333;
            " class="margin-top--10 "> Profile</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div>
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered margin-top-35 "
                         style="border-bottom: 1px solid #eef1f5;height: 100%;border-radius: 20px !important;">
                        <!-- SIDEBAR USERPIC -->
                        <div class=" profile-userpic  margin-top-25" style="
                        float: left;
                        width: 300px;
                        /*margin-right: -35px;*/
">

                            @can('provider_access')
                                <img alt="" class="img-circle "
                                     src="{{'/storage'.auth()->user()->provider->logo}}"/>
                            @endcan
                            @can('permission_access')
                                <i class="fa fa-user img-circle" style="font-size: 20px;color: #7952B3 !important;"></i>
                            @endcan
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="center-block profile-usertitle margin-top-70" style="
                        text-align: justify;
                        /*margin-top: 47px;*/
">
                            <div class="profile-usertitle-name" style="
/*font-style: normal;*/
/*font-weight: 600;*/
font-size: 24px;
line-height: 137.5%;
color: #111827;
             font-family: AvenirLTStd-Book;
">
                                {{$user->full_name}}
                            </div>
                            <div style="
/*font-style: normal;*/
/*font-weight: normal;*/
font-size: 14px;
line-height: 157%;
color: #6B7280;
             font-family: AvenirLTStd-Book;
">
                                {{$user->email}}


                            </div>
                            <div style="
/*font-style: normal;*/
/*font-weight: normal;*/
font-size: 14px;
line-height: 157%;
color: #6B7280;
             font-family: AvenirLTStd-Book;
">
                                {{$user->phone}}</div>

                            <div style="
/*font-style: normal;*/
/*font-weight: normal;*/
font-size: 14px;
line-height: 157%;
color: #6B7280;
             font-family: AvenirLTStd-Book;
">
                                {{$user->userLevel->name }}</div>
                            <div style="
/*font-style: normal;*/
/*font-weight: normal;*/
font-size: 14px;
line-height: 157%;
color: #6B7280;
             font-family: AvenirLTStd-Book;
">
                                {{$user->provider->name ?? ''}}</div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->  <!-- BEGIN PROFILE CONTENT -->

                        <div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                    <!-- END PORTLET MAIN -->

                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->

            </div>
        </div>


    </div>

@endsection
