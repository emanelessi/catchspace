@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn:hover {
            background-color: #ef6198 !important;
        }

        .page-head {
            margin-bottom: 25px !important;
        }

        .head-title {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 33px !important;
            letter-spacing: -0.022em !important;
            color: #333333 !important;
        }

        .add-btn {
            border-color: #E93A76 !important;
            font-family: 'Montserrat', sans-serif !important;
            color: #FFFFFF !important;
            background: #E93A76 !important;
            border-radius: 5px !important;
            width: 160px !important;
            height: 30px !important;
            font-size: 12px !important;
        }

        .btn-filter {
            background-color: #FFFFFF !important;
            border-color: #FFFFFF !important;
            border-radius: 5px !important;
            font-family: 'Montserrat', sans-serif !important;
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
            background: #E93A76 !important;
            border-radius: 5px !important;
            font-family: 'Montserrat', sans-serif !important;
            font-weight: normal !important;
            font-size: 15px !important;
            line-height: 15px !important;
        }

        .table-th {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 20px !important;
            letter-spacing: -0.022em !important;
            color: #E93A76 !important;
            padding-bottom: 15px !important;
        }

        .table-td {
            font-family: 'Montserrat', sans-serif !important;
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
            font-family: 'Montserrat', sans-serif !important;
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
            font-family: 'Montserrat', sans-serif !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
            border-radius: 10px !important;
            border-color: #E93A76 !important;
        }

        .btn-delete {
            width: 125px !important;
            height: 32.2px !important;
            border-color: #E93A76 !important;
            align-items: center !important;
            padding: 0 !important;
            border-radius: 8px !important;
            background-color: #E93A76 !important;
            font-family: 'Montserrat', sans-serif !important;
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
            font-family: 'Montserrat', sans-serif !important;
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
            border-color: #E93A76 !important;
            align-items: center !important;
            padding: 0 !important;
            border-radius: 8px !important;
            background-color: #E93A76 !important;
            font-family: 'Montserrat', sans-serif !important;
            color: #FFFFFF !important;
            font-size: 12px !important;
            letter-spacing: 1px !important;
        }
    </style>
    <!-- END PAGE style -->

    @can('permission_access')
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1 class="margin-top--10 head-title">Edit Workspace</h1>
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
                                                        <form role="form" action="{{route('workspaceupdate')}}"
                                                              method="POST">
                                                            @csrf
                                                            <div class="form-group col-md-12">
                                                                <label class="control-label margin-left-9" style="
                                                                color:#6B7280;">Workspace
                                                                    name *</label>
                                                                <input type="text" name="name"
                                                                       placeholder="name" value="{{$workspace->name}}"
                                                                       class="form-control form-input"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label margin-left-9"
                                                                       style="color:#6B7280;">Workspace
                                                                    capacity *</label>
                                                                <input type="number" name="capacity"
                                                                       value="{{$workspace->capacity}}" placeholder="0"
                                                                       class="form-control form-input"/>
                                                                <input type="hidden" name="id"
                                                                       value="{{$workspace->id}}"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label margin-left-9"
                                                                       style="color:#6B7280;">Workspace
                                                                    type *</label>
                                                                <select name="work_space_type_id"
                                                                        class="form-control form-input">
                                                                    @foreach($type as $mytype)
                                                                        <option
                                                                            value="{{$mytype->id}}">{{$mytype->type}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="form-group margin-left-9 margin-right-10">
                                                                <label class="control-label margin-left-9"
                                                                       style="color:#6B7280;">Provider Name*</label>
                                                                <select name="provider_id"
                                                                        class="form-control form-input">
                                                                    @foreach($provider as $myprovider )
                                                                        <option
                                                                            value="{{$myprovider->id}}">{{$myprovider->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <button type="submit"
                                                                    class="btn btn-submit btn-primary margin-top--300  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 ">
                                                                Save Change
                                                            </button>
                                                        </form>
                                                    </div>

                                                    @if(session()->has('success'))
                                                        <div class="alert alert-success">
                                                            {{ session()->get('success') }}
                                                        </div>
                                                    @endif                                                  </div>
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
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1 class="margin-top--10 head-title">Edit Closed
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
                                                            <form role="form" action="{{route('workspaceupdate')}}"
                                                                  method="POST">
                                                                @csrf
                                                                <div class="form-group col-md-12">
                                                                    <label class="control-label margin-left-9" style="
                                                                color:#6B7280;">Workspace
                                                                        name *</label>
                                                                    <input type="text" name="name"
                                                                           placeholder="name" value="{{$workspace->name}}"
                                                                           class="form-control form-input"/>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label class="control-label margin-left-9"
                                                                           style="color:#6B7280;">Workspace
                                                                        capacity *</label>
                                                                    <input type="number" name="capacity"
                                                                           value="{{$workspace->capacity}}"
                                                                           placeholder="0"
                                                                           class="form-control form-input"/>
                                                                    <input type="hidden" name="id"
                                                                           value="{{$workspace->id}}"/>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label class="control-label margin-left-9"
                                                                           style="color:#6B7280;">Workspace
                                                                        type *</label>
                                                                    <select name="work_space_type_id"
                                                                            class="form-control form-input">
                                                                        @foreach($type as $mytype)
                                                                            <option
                                                                                value="{{$mytype->id}}">{{$mytype->type}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>


                                                                <div class="form-group margin-left-9 margin-right-10">
                                                                    <input type="hidden" name="provider_id"
                                                                           value="{{auth()->user()->provider->id}}">
                                                                </div>
                                                                <button type="submit"
                                                                        class="btn btn-submit btn-primary margin-top--300  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 ">
                                                                    Save Change
                                                                </button>
                                                            </form>
                                                        </div>

                                                        @if(session()->has('success'))
                                                            <div class="alert alert-success">
                                                                {{ session()->get('success') }}
                                                            </div>
                                                        @endif                                                      </div>
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
    @endcan
@endsection


