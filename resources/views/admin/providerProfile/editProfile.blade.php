@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
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
    <!-- END PAGE style -->

    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 class="margin-top--10 head-title">Cowork provider</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div>
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered margin-top-35"
                         style="border-bottom: 1px solid #eef1f5;height: 100%;border-radius: 20px !important;">
                        <!-- SIDEBAR USERPIC -->
                        <div class=" profile-userpic margin-right--12 margin-top-25" style="
                        float: left;
                        width: 300px;
">
                            <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class=" profile-usertitle margin-top-70" style="
                        text-align: justify;
">
                            <div class="profile-usertitle-name" style="
font-size: 24px;
line-height: 137.5%;
color: #111827;
             font-family: AvenirLTStd-Book;
">
                                Ali Mahdi
                            </div>
                            <div style="
font-size: 14px;
line-height: 157%;
color: #6B7280;
             font-family: AvenirLTStd-Book;
">
                                Programmer
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->  <!-- BEGIN PROFILE CONTENT -->
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet light bordered" style="
                                        margin: 72px 73px 200px;
                                        border-radius: 20px !important;
                                        background-color: #fff;
                                         border-top-width: 2px !important;
                                            border-bottom-width: 2px !important;
">
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <form role="form" action="{{route('update')}}" method="POST">
                                                        @csrf
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Name
                                                                *</label>
                                                            <input type="text" placeholder="Ali Mahdi"
                                                                   class="form-control form-input"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Job
                                                                Title *</label>
                                                            <input type="text" placeholder="Programmer "
                                                                   class="form-control form-input"/>
                                                        </div>
                                                        <div class="form-group "
                                                             style="margin-left: 16px;margin-right: 16px;">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Descriotion
                                                                *</label>
                                                            <input type="text"
                                                                   placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing  "
                                                                   class="form-control form-input"/>
                                                        </div>
                                                        <div class="form-group "
                                                             style="margin-left: 16px;margin-right: 16px;">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Statues
                                                                *</label>
                                                            <input type="text"
                                                                   placeholder="Active"
                                                                   class="form-control form-input"/>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- END PERSONAL INFO TAB -->
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button"
                                            class="btn btn-submit btn-primary margin-top--250  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 ">
                                        Save Change
                                    </button>
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


