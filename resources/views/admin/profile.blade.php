@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn:hover {
            background-color: #7962B3 !important;
        }

        .page-head {
            margin-bottom: 25px !important;
        }

        .head-title {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 25px !important;
            letter-spacing: -0.022em !important;
            color: #333333 !important;
        }

        .div-inf {
            font-size: 14px !important;
            line-height: 157% !important;
            color: #6B7280 !important;
            font-family: 'Montserrat', sans-serif !important;
        }
    </style>
    <!-- END PAGE style -->

    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 class="margin-top--10 head-title">Profile</h1>
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
">

                            @can('provider_access')
                                <img alt="" class="img-circle "
                                     src="{{'/storage'.auth()->user()->provider->logo}}"/>
                            @endcan
                            @can('permission_access')
                                <i class="fa fa-user img-circle" style="font-size: 20px;color: #9162B3 !important;"></i>
                            @endcan
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="center-block profile-usertitle margin-top-70" style="
                        text-align: justify;
">
                            <div class="profile-usertitle-name " style="

font-size: 24px;
line-height: 137.5%;
color: #111827;
             font-family: AvenirLTStd-Book;
">
                                {{$user->full_name}}
                            </div>
                            <div class="div-inf">
                                {{$user->email}}


                            </div>
                            <div class="div-inf">
                                {{$user->phone}}</div>

                            <div class="div-inf">
                                {{$user->userLevel->name }}</div>
                            <div class="div-inf">
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
