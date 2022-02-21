@extends('provider.layouts.index')

@section('content')
    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
        }

    </style>
    <div class="page-head" style="
    /*margin-bottom: 25px;*/
">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            /*width: 557px;*/
            /*height: 47px;*/
            /*left: 296px;*/
            /*top: 104px;*/
            /*font-style: normal;*/
            /*font-weight: 600;*/
            font-size: 30px;
            /*line-height: 48px;*/
/* or 120% */letter-spacing: -0.022em;
color: #333333;
             font-family: AvenirLTStd-Book;
/*margin-bottom: 20px;*/
">Edit Profile</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-12 ">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered  "
                         style="border-bottom: 1px solid #eef1f5;border-radius: 20px !important;">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic margin-right--12 " style="
                        float: left;
                        width: 300px;
                        /*margin-right: -35px;*/
">
                            <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle margin-top-40 " style="
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
"> Tools
                            </div>
                            <div class="profile-usertitle-job" style="
/*font-style: normal;*/
/*font-weight: normal;*/
font-size: 14px;
line-height: 157%;
color: #6B7280;
             font-family: AvenirLTStd-Book;
"> Gaza, palestine
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->  <!-- BEGIN PROFILE CONTENT -->
                        <div>
                            <div class="row">
                                <div class="m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-12">
                                    <div class="portlet light bordered" style="
                                        margin:83px 54px;
                                        border-radius: 20px !important;
                                        background-color: #fff;
                                         border-top-width: 3px !important;
                                            border-bottom-width: 3px !important;
">
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <form role="form" action="#">
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Name
                                                                *</label>
                                                            <input type="text" placeholder="Jones Ferdinand"
                                                                   class="form-control"
                                                                   style="
                                                                       height: 40px;
                                                                       /*padding: 0 12px;*/
                                                                       border-radius: 8px !important;
                                                                       border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Co-work
                                                                Space Name *</label>
                                                            <input type="text" placeholder="Tools" class="form-control"
                                                                   style="
                                                                       height: 40px;
                                                                       /*padding: 0 12px;*/
                                                                       border-radius: 8px !important;
                                                                       border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Email
                                                                *</label>
                                                            <input type="email" placeholder="Jones@gmail.com"
                                                                   class="form-control"
                                                                   style="
                                                                       height: 40px;
                                                                       /*padding: 0 12px;*/
                                                                       border-radius: 8px !important;
                                                                       border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Phone
                                                                *</label>
                                                            <input type="number" placeholder="0599589632"
                                                                   class="form-control"
                                                                   style="
                                                                       height: 40px;
                                                                       /*padding: 0 12px;*/
                                                                       border-radius: 8px !important;
                                                                       border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6"
                                                        >
                                                            <label class="control-label" style="color:#6B7280;">Password
                                                                *</label>
                                                            <input type="password" placeholder="*******"
                                                                   class="form-control" style="
                                                                       height: 40px;
                                                                       /*padding: 0 12px;*/
                                                                       border-radius: 8px !important;
                                                                       border: solid 1px #d1d5db;"/></div>
                                                        <button type="button"
                                                                class="btn btn-primary margin-left-90 m-grid-col-xs-offset-3 "
                                                                style="
                                                               width: 165px;
                                                               height: 41.2px;
                                                               /*flex-grow: 0;*/
                                                               /*display: flex;*/
                                                               /*flex-direction: column;*/
                                                               /*justify-content: center;*/
                                                               border-color: #7952b3;
                                                               align-items: center;
                                                               /*margin: -155px 0 0 755px;*/
                                                               padding: 0;
                                                               border-radius: 8px !important;
                                                               background-color: #7952b3;
                                                                font-family: AvenirLTStd-Book;
                                                               /*font-style: normal;*/
                                                               /*font-weight: 600;*/
                                                               /*font-size: 14px;*/
                                                               line-height: 24px;
                                                               color: #FFFFFF;
                                                               ">
                                                            Save Change
                                                        </button>
                                                    </form>
                                                </div>

                                                <!-- END PERSONAL INFO TAB -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
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


