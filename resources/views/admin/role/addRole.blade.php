@extends('admin.layouts.index')

@section('content')
    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
        }

        .demo-loading-btn:hover {
            background-color: #D2CDCD54 !important;
        }

    </style>
    <div class="page-head"  style="margin-bottom: 25px;">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            font-family: AvenirLTStd-Book;
            font-size: 30px;
            letter-spacing: -0.022em;
            color: #333333;
            " class="margin-top--10 ">Add new Role</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div>
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered margin-top-35"
                         style="
                         border-bottom: 1px solid #eef1f5;
                          height: 100%;
                          border-radius: 20px !important;">
                        <!-- SIDEBAR USERPIC -->

                            <!-- END SIDEBAR USER TITLE -->  <!-- BEGIN PROFILE CONTENT -->
                            <div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12">
                                        <div class="portlet light bordered " style="
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
                                                        <form role="form" action="{{route('rolestore')}}" method="Post">
                                                            <div class="form-group margin-left-9 margin-right-10"
                                                                 style="
                                                             /*margin-left: 16px;*/
                                                             /*margin-right: 16px;*/
">
                                                                <label class="control-label margin-left-9" style="color:#6B7280;">Role Name*</label>
                                                                <input type="text"
                                                                       placeholder="User"
                                                                       class="form-control" style="
                                                                       height: 40px;
                                                                       /*height: 56px;padding: 0 12px;*/
                                                                       border-radius: 8px !important;border: solid 1px #d1d5db;"/></div>                                                        </form>
                                                    </div>

                                                    <!-- END PERSONAL INFO TAB -->
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                                class="btn btn-primary margin-top--250  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 "
                                                style="
                                                               width: 125px;
                                                               height: 32.2px;
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
                                                               /* line-height: 24px; */
                                                               color: #FFFFFF;
                                                               font-size: 13px;
                                                               letter-spacing: 1px;
                                                               ">
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


