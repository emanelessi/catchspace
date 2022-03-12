@extends('admin.layouts.index')

@section('content')

    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
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
                        <div class=" profile-userpic margin-right--12 margin-top-25" style="
                        float: left;
                        width: 300px;
                        /*margin-right: -35px;*/
">
                            <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class=" profile-usertitle margin-top-70" style="
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
