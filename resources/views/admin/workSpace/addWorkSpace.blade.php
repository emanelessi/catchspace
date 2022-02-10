@extends('admin.layouts.index')

@section('content')
    <style>
        .btn:hover {
            background-color:#8B62C9 !important;
        }
        .demo-loading-btn:hover {
            background-color:#D2CDCD54 !important;
        }

    </style>
    <div class="page-head" style="margin-bottom: 25px;">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="width: 557px;height: 47px;left: 296px;top: 104px;font-style: normal;font-weight: 600;font-size: 30px;line-height: 48px;
/* or 120% */letter-spacing: -0.022em;color: #333333;font-family: Poppins-Semibold;margin-bottom: 20px;">Add new Work space</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div>
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered"
                         style="border-bottom: 1px solid #eef1f5;  height: 720px;border-radius: 20px !important;">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic" style="float: left;width: 300px;margin-right: -35px;">
                            <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <b class="profile-usertitle" style="text-align: justify;margin-top: 47px;">
                            <button type="button" data-loading-text="Loading..." class="demo-loading-btn btn btn-primary"
                                    style="
                                         width: 165px;
                                         height: 41.2px;
                                         flex-grow: 0;
                                         display: flex;
                                         flex-direction: column;
                                         justify-content: center;
                                         border-color:#eaeaea;
                                         margin-right:600px;
                                         margin-top: 60px;
                                         align-items: center;
                                         padding: 0;
                                         border-radius: 8px !important;
                                         background-color: #eaeaea;
                                         font-family: Inter;
                                         font-style: normal;
                                         font-weight: 600;
                                         font-size: 14px;
                                         line-height: 24px;
/* identical to box height, or 171% */
                                         color: #6B7280;
                                         "
                            >   Upload  wokspace logo </button>

                        <!-- END SIDEBAR USER TITLE -->  <!-- BEGIN PROFILE CONTENT -->
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet light bordered" style="margin: 59px 73px 200px;border-radius: 20px !important;background-color: #fff;    border-top-width: 3px !important;
                                            border-bottom-width: 3px !important;">
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <form role="form" action="#">
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Workspace Name *</label>
                                                            <input type="text" placeholder="Workspace" class="form-control"
                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Workspace Owner Name *</label>
                                                            <input type="text" placeholder="Name" class="form-control"
                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Email *</label>
                                                            <input type="text" placeholder="Name@gmail.com" class="form-control"
                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Phone *</label>
                                                            <input type="text" placeholder="+970 590 000 000" class="form-control"
                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group "
                                                             style="margin-left: 16px;margin-right: 16px;">
                                                            <label class="control-label" style="color:#6B7280;">Workspace Address*</label>
                                                            <input type="text" placeholder="Al-rehab mall, remal street, Gaza, palestine"
                                                                   class="form-control" style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/></div>
                                                    </form>
                                                </div>

                                                <!-- END PERSONAL INFO TAB -->
                                            </div>
                                        </div>
                                    </div> <button type="button" class=" btn btn-primary" style="
                                                               width: 165px;
                                                               height: 41.2px;
                                                               flex-grow: 0;
                                                               display: flex;
                                                               flex-direction: column;
                                                               justify-content: center;
                                                               border-color: #7952b3;
                                                               align-items: center;
                                                               margin: -155px 0 0 755px;
                                                               padding: 0;
                                                               border-radius: 8px !important;
                                                               background-color: #7952b3;


/* Components/Button Medium */
                                                               font-family: Inter;
                                                               font-style: normal;
                                                               font-weight: 600;
                                                               font-size: 14px;
                                                               line-height: 24px;
/* identical to box height, or 171% */


/* Primary/Contrast */
                                                               color: #FFFFFF;
                                                               ">
                                        Save Change </button>
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


