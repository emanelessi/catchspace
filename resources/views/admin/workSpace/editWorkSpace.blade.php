@extends('admin.layouts.index')

@section('content')
    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
        }

    </style>
    @can('permission_access')
    <div class="page-head" style="margin-bottom: 25px;">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            font-family: AvenirLTStd-Book;
            font-size: 30px;
            letter-spacing: -0.022em;
            color: #333333;
            " class="margin-top--10 ">Edit Workspace</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-12 ">
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered margin-top-35"
                         style="border-bottom: 1px solid #eef1f5;height: 100%;border-radius: 20px !important;">

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
                                                    <form role="form" action="{{route('workspaceupdate')}}" method="POST">
                                                        @csrf
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Workspace
                                                                capacity *</label>
                                                            <input type="number" name="capacity" value="{{$workspace->capacity}}" placeholder="0" class="form-control"
                                                                   style="
                                                                       height: 40px;
                                                                       /*padding: 0 12px;*/
                                                                       border-radius: 8px !important;
                                                                       border: solid 1px #d1d5db;"/>
                                                            <input type="hidden" name="id" value="{{$workspace->id}}" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Workspace
                                                                type *</label>
                                                            <select name="work_space_type_id" class="form-control" style="
                                                                       height: 40px;
                                                                       /*height: 56px;padding: 0 12px;*/
                                                                       border-radius: 8px !important;border: solid 1px #d1d5db;">
                                                                @foreach($type as $mytype)
                                                                    <option
                                                                        value="{{$mytype->id}}">{{$mytype->type}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group margin-left-9 margin-right-10"
                                                             style="
                                                             /*margin-left: 16px;*/
                                                             /*margin-right: 16px;*/
">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Provider Name*</label>
                                                            <select name="provider_id" class="form-control" style="
                                                                       height: 40px;
                                                                       /*height: 56px;padding: 0 12px;*/
                                                                       border-radius: 8px !important;border: solid 1px #d1d5db;">
                                                                @foreach($provider as $myprovider )
                                                                    <option
                                                                        value="{{$myprovider->id}}">{{$myprovider->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <button type="submit"
                                                                class="btn btn-primary margin-top--300  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 "
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
                                                    </form>
                                                </div>

                                                <!-- END PERSONAL INFO TAB -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET MAIN -->

                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->

                </div>
            </div>


        </div>

    @endcan
    @can('provider_access')
            <div class="page-head" style="margin-bottom: 25px;">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1 style="width: 557px;height: 47px;left: 296px;top: 104px;font-style: normal;font-weight: 600;font-size: 30px;line-height: 48px;
/* or 120% */letter-spacing: -0.022em;color: #333333;font-family: Poppins-Semibold;margin-bottom: 20px;">Edit Closed
                        Room in Tools</h1>
                </div>
                <!-- END PAGE TITLE -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PROFILE SIDEBAR -->
                        <div>
                            <!-- PORTLET MAIN -->
                            <div class="portlet light profile-sidebar-portlet bordered"
                                 style="border-bottom: 1px solid #eef1f5;height: 674px;border-radius: 20px !important;">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered" style="margin: 90px 73px 200px;height: 373px;border-radius: 20px !important;background-color: #fff;    border-top-width: 3px !important;
                                            border-bottom-width: 3px !important;">
                                            <div class="portlet-body" style="padding-top: 31px;">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="#">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label" style="color:#6B7280;">Services
                                                                    *</label>
                                                                <input type="text"
                                                                       placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing  "
                                                                       class="form-control"
                                                                       style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label" style="color:#6B7280;">Capacity
                                                                    *</label>
                                                                <input type="text" placeholder="Omar D." class="form-control"
                                                                       style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label" style="color:#6B7280;">Rent Type
                                                                    *</label>
                                                                <input type="text" placeholder="Monthly" class="form-control"
                                                                       style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label" style="color:#6B7280;">Price
                                                                    *</label>
                                                                <input type="text" placeholder="100$" class="form-control"
                                                                       style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                            </div>
                                                            <div class="form-group "
                                                                 style="margin-left: 16px;margin-right: 16px;">
                                                                <label class="control-label" style="color:#6B7280;">Statues
                                                                    *</label>
                                                                <input type="text" placeholder="active"
                                                                       class="form-control"
                                                                       style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <!-- END PERSONAL INFO TAB -->
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class=" btn btn-primary" style="
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
    @endcan
@endsection


