@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn:hover {
            background-color: #ef6198 !important;
        }

        .demo-loading-btn:hover {
            background-color: #D2CDCD54 !important;
        }

        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .inputfile + label {
            border-color: #eaeaea;
            margin-top: 60px;
            align-items: center;
            padding: 5px;
            border-radius: 8px !important;
            background-color: #eaeaea;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 12px;
            line-height: 24px;
            color: #6B7280;
            width: 200px;
            display: inline-block;
        }

        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: #E93A76;
            color: white;

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

        .img-logo {
            border-color: #eaeaea !important;
            align-items: center !important;
            padding: 5px !important;
            border-radius: 8px !important;
            background-color: #eaeaea !important;
            font-family: 'Montserrat', sans-serif !important;
            font-size: 12px !important;
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
            font-size: 11px !important;
            letter-spacing: 1px !important;
        }

    </style>
    <!-- END PAGE style -->


    @can('permission_access')
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1 class="margin-top--10 head-title">Add new Work space</h1>
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
                            <div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12">

                                        <!-- PERSONAL INFO TAB -->
                                        <div class="tab-pane active" id="tab_1_1">
                                            <form role="form" enctype="multipart/form-data" action="{{route('workspaceStore')}}"
                                                  method="POST">
                                                @csrf
                                                <div class="profile-userpic  margin-right--12 " style="
                        float: left;
                        width: 300px;
">
                                                    <img src="../assets/pages/media/profile/profile_user.jpg"
                                                         class="img-responsive" alt="">
                                                </div>
                                                <!-- END SIDEBAR USERPIC -->
                                                <!-- SIDEBAR USER TITLE -->
                                                <b class="profile-usertitle margin-top-40" style="
                        text-align: justify;
">
                                                    <input type="file" data-loading-text="Loading..."
                                                           name="image" id="file"
                                                           class="inputfile img-logo demo-loading-btn btn btn-primary margin-top-85">
                                                    <label for="file"> Upload Worker logo <i class="fa fa-file-photo-o"
                                                                                             style="color: #6B7280 !important;"></i></label>
                                                </b>
                                                <div class="portlet light bordered" style="
                                        margin: 72px 73px 200px;
                                        border-radius: 20px !important;
                                        background-color: #fff;
                                         border-top-width: 2px !important;
                                            border-bottom-width: 2px !important;
">
                                                    <div class="portlet-body">
                                                        <div class="tab-content">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label margin-left-9" style="
                                                                color:#6B7280;">Workspace
                                                                    name *</label>
                                                                <input type="text" name="name"
                                                                       placeholder="name"
                                                                       class="form-control form-input"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label margin-left-9" style="
                                                                color:#6B7280;">Workspace
                                                                    capacity *</label>
                                                                <input type="number" name="capacity"
                                                                       placeholder="capacity"
                                                                       class="form-control form-input"/>
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
                <!-- END PROFILE CONTENT -->
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
                <h1 class="margin-top--10 head-title">Add WorkSpace</h1>
            </div>
            <!-- END PAGE TITLE -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div>
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet bordered"
                             style="border-bottom: 1px solid #eef1f5;  height: 720px;border-radius: 20px !important;">
                            <!-- BEGIN PROFILE CONTENT -->
                            <div>
                                <div class="row">
                                    <div class="col-md-12">

                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form method="POST" enctype="multipart/form-data" action="{{route('workSpaceStore')}}">
                                                            @csrf
                                                            <div class="profile-userpic  margin-right--12 " style="
                        float: left;
                        width: 300px;
">
                                                                <img src="../assets/pages/media/profile/profile_user.jpg"
                                                                     class="img-responsive" alt="">
                                                            </div>
                                                            <!-- END SIDEBAR USERPIC -->
                                                            <!-- SIDEBAR USER TITLE -->
                                                            <b class="profile-usertitle margin-top-40" style="
                        text-align: justify;
">
                                                                <input type="file" data-loading-text="Loading..."
                                                                       name="image" id="file"
                                                                       class="inputfile img-logo demo-loading-btn btn btn-primary margin-top-85">
                                                                <label for="file"> Upload Worker logo <i class="fa fa-file-photo-o"
                                                                                                         style="color: #6B7280 !important;"></i></label>
                                                            </b>
                                                            <div class="portlet light bordered" style="
                                        margin: 72px 73px 200px;
                                        border-radius: 20px !important;
                                        background-color: #fff;
                                         border-top-width: 2px !important;
                                            border-bottom-width: 2px !important;
">
                                                                <div class="portlet-body">
                                                                    <div class="tab-content">
                                                            <div class="form-group col-md-12">
                                                                <label class="control-label margin-left-9" style="
                                                                color:#6B7280;">Workspace
                                                                    name *</label>
                                                                <input type="text" name="name"
                                                                       placeholder="name"
                                                                       class="form-control form-input"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label margin-left-9" style="
                                                                color:#6B7280;">Workspace
                                                                    capacity *</label>
                                                                <input type="number" name="capacity"
                                                                       placeholder="capacity"
                                                                       class="form-control form-input"/>
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
                                                @endif                                                    <!-- END PERSONAL INFO TAB -->
                                                </div>
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


