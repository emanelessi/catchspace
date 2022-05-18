@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn:hover {
            background-color: #ef6198 !important;
        }

        .btn-circle:hover {
            background-color: #9162B32B !important;
            border-color: #9162B32B !important;
        }

        .span:hover {
            background-color: #ef6198 !important;
            border-color: #ef6198 !important;
        }

        .cansel:hover {
            background-color: #C4C4C436 !important;
        }

        .deletee:hover {
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
            font-size: 13px !important;
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
            font-weight: 300px;
            letter-spacing: -0.022em !important;
            color: #E93A76 !important;
            padding-bottom: 15px !important;
        }

        .table-td {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 18px !important;
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
    </style>
    <!-- END PAGE style -->

    @can('permission_access')

        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title ">
                <h1 class="head-title">work Space</h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            @can('workspace_create')
                <div class="page-toolbar">
                    <a href="{{route('workspacecreate')}}" type="button"
                       class="demo-loading-btn btn btn-primary add-btn">
                        <i class="fa fa-plus-circle"></i>
                        Add work Space
                    </a>

                    <!-- END PAGE TOOLBAR -->
                </div>
            @endcan
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN BORDERED TABLE PORTLET-->
                    <div class="portlet light portlet-fit bordered"
                         style="
                     background-color: #E5E5E5;
                     border-color: #E5E5E5 !important;
">
                        <div class="portlet-title " style="
                    border-color: #E5E5E5;
">
                            <div class="actions">
                                <div class="btn-group ">
                                    <a class="btn btn-sm blue btn-outline btn-circle margin-top-20 btn-filter"
                                       href="javascript:;"
                                       data-toggle="dropdown" data-hover="dropdown" data-close-others="true"
                                       aria-expanded="true">
                                        <i class="fa fa-filter" style="color: #6dce74 !important;"></i>
                                        Filter By
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right body-filter">
                                        <div class="span margin-bottom-2  padding-tb-5 span-filter">
                                            <span class="margin-left-40">From A to Z</span>
                                        </div>
                                        <div class="span margin-bottom-2  padding-tb-5 span-filter">
                                            <span class="margin-left-40">From Z to A</span>
                                        </div>
                                        <div class="span margin-bottom-2  padding-tb-5 span-filter">
                                            <span class="margin-left-40">The latest</span>
                                        </div>
                                        <div class="span margin-bottom-2  padding-tb-5 span-filter">
                                            <span class="margin-left-40">The oldest</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table  table-light" style="background-color: #E5E5E5;">
                                    <thead>
                                    <tr style="border-bottom: 2px solid #F2F5F8;">
                                        <th class="table-th"> #
                                        </th>
                                        <th class="table-th"> Image
                                        </th>
                                        <th class="table-th"> Name
                                        </th>
                                        <th class="table-th"> Location
                                        </th>
                                        <th class="table-th"> Capacity
                                        </th>
                                        <th class="table-th"> Type
                                        </th>
                                        <th class="table-th"> Services
                                        </th>
                                        <th class="table-th"> Pricing
                                        </th>
                                        <th class="table-th"> Addons
                                        </th>
                                        <th class="table-th"> Provider<br> Name
                                        </th>
                                        <th class="table-th"> Provider<br> Address
                                        </th>
                                        <th class="table-th"> Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($workspace as $myworkspace)

                                        <tr>
                                            <td class="table-td"> {{$myworkspace->id}}
                                            </td>
                                            <td class="table-td">
                                                <img alt="" class="img-circle"
                                                     src="{{'/storage/'.$myworkspace->image}}" style="width: 100px;"/>
                                            </td>
                                            <td class="table-td"> {{$myworkspace->name}}
                                            </td>
                                            <td class="table-td"> {{$myworkspace->location}}
                                            </td>
                                            <td class="table-td">{{$myworkspace->capacity}}</td>
                                            <td class="table-td"> {{$myworkspace->workSpaceType->type}}
                                            </td>
                                            @can('services_show')
                                                <td class="table-td">
                                                    <a href="/admin/workspace/services/{{$myworkspace->id}}"
                                                       style="margin-left: 10px">
                                                        <i class="fa fa-server" style="color: #000000 !important;"></i>
                                                    </a>
                                                </td>
                                            @endcan
                                            @can('pricing_show')
                                                <td class="table-td">
                                                    <a href="/admin/workspace/pricing/{{$myworkspace->id}}"
                                                       style="margin-left: 10px">
                                                        <i class="fa fa-money " style="color: #000000 !important;"></i>
                                                    </a>
                                                </td>
                                            @endcan
                                            @can('addons_show')
                                                <td class="table-td">
                                                    <a href="/admin/workspace/addons/{{$myworkspace->id}}"
                                                       style="margin-left: 10px">
                                                        <i class="fa fa-plus-square"
                                                           style="color: #000000 !important;"></i>
                                                    </a>
                                                </td>
                                            @endcan

                                            <td class="table-td"> {{$myworkspace->provider->name}}
                                            </td>
                                            <td class="table-td"> {{$myworkspace->provider->address}}
                                            </td>
                                            <td class="table-td">
                                                @can('workspace_delete')
                                                    @if($myworkspace->deleted_at ==null)

                                                        <a href="/admin/delete-workspace/{{$myworkspace->id}}"
                                                           data-target="#static2" data-toggle="modal"
                                                           style="margin-left: 10px">
                                                            <i class="fa fa-trash"
                                                               style="color: #000000 !important;"></i>
                                                        </a>
                                                    @else
                                                        <a href="/admin/restore-workspace/{{$myworkspace->id}}"
                                                           data-target="#static2" data-toggle="modal"
                                                           style="margin-left: 10px">
                                                            <i class="fa fa-recycle"
                                                               style="color: #000000 !important;"></i>
                                                        </a>
                                                    @endif
                                                @endcan

                                                @can('workspace_edit')
                                                    <a href="/admin/edit-workspace/{{$myworkspace->id}}">
                                                        <i class="fa fa-pencil" style="color: #000000 !important;"></i>
                                                    </a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div id="static2" class="modal fade modal-back"
                                     tabindex="-1" data-backdrop="static"
                                     data-keyboard="false" data-attention-animation="false">
                                    <div class="modal-body">
                                        <p class="modal-p">
                                            <i class="fa fa-warning" style="color: #5DB461 !important;font-size: 50px"></i>
                                            <br><br>
                                            Are you sure about delete this Work Space ? </p>
                                    </div>
                                    <div class="modal-footer padding-right-120 " style="border-top:0px;">
                                        <button type="button"
                                                data-dismiss="modal"
                                                class="btn btn-outline dark cansel btn-cansel">
                                            Cancel
                                        </button>
                                        <button type="button" data-dismiss="modal" class="btn green deletee btn-delete">
                                            delete
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE PORTLET-->
                </div>
            </div>
            @endcan
            @can('provider_access')
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1 class="margin-top--10 head-title">Workspaces</h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    @can('workspace_create')
                        <div class="page-toolbar">
                            <a href="{{route('workSpaceCreate')}}" type="button"
                               class="demo-loading-btn btn btn-primary add-btn">
                                <i class="fa fa-plus-circle"></i>
                                Add work Space
                            </a>

                            <!-- END PAGE TOOLBAR -->
                        </div>
                    @endcan
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN BORDERED TABLE PORTLET-->
                            <div class="portlet light portlet-fit bordered"
                                 style="
                     background-color: #E5E5E5;
                     border-color: #E5E5E5 !important;
">
                                <div class="portlet-title" style="
                    border-color: #E5E5E5;
">
                                    <div class="caption">
                                        {{--                            <span class="caption-subject font-red sbold " style="--}}
                                        {{--                            color: #333333!important;  font-size: 20px;  font-family: 'Montserrat', sans-serif;--}}
                                        {{--">--}}
                                        {{--                                Workspaces</span>--}}
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group ">
                                            <a class="btn btn-sm blue btn-outline btn-circle margin-top-20 btn-filter"
                                               href="javascript:;" data-toggle="dropdown" data-hover="dropdown"
                                               data-close-others="true"
                                               aria-expanded="true">
                                                <i class="fa fa-filter " style="color: #6dce74 !important;"></i>
                                                Filter By
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div
                                                class="dropdown-menu hold-on-click dropdown-checkboxes pull-right body-filter">
                                                <div class="span margin-bottom-2  padding-tb-5 span-filter">
                                                    <span class="margin-left-40">From A to Z</span>
                                                </div>
                                                <div class="span margin-bottom-2  padding-tb-5 span-filter">
                                                    <span class="margin-left-40">From Z to A</span>
                                                </div>
                                                <div class="span margin-bottom-2  padding-tb-5 span-filter">
                                                    <span class="margin-left-40">The latest</span>
                                                </div>
                                                <div class="span margin-bottom-2  padding-tb-5 span-filter">
                                                    <span class="margin-left-40">The oldest</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table  table-light" style="background-color: #E5E5E5;">
                                            <thead>
                                            <tr style="border-bottom: 2px solid #F2F5F8;">
                                                <th class="table-th"> #
                                                </th>
                                                <th class="table-th"> Image
                                                </th>
                                                <th class="table-th"> Name
                                                </th>
                                                <th class="table-th"> Location
                                                </th>
                                                <th class="table-th"> Capacity
                                                </th>
                                                <th class="table-th"> Type
                                                </th>
                                                <th class="table-th"> Services
                                                </th>
                                                <th class="table-th"> Pricing
                                                </th>
                                                <th class="table-th"> Addons
                                                </th>

                                                <th class="table-th"> Status
                                                </th>
                                                <th class="table-th"> Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($work_space as $myworkspace)

                                                <tr>
                                                    <td class="table-td"> {{$myworkspace->id}}
                                                    </td>
                                                    <td class="table-td">
                                                        <img alt="" class="img-circle"
                                                             src="{{'/storage/'.$myworkspace->image}}" style="width: 100px;"/>
                                                    </td>
                                                    <td class="table-td"> {{$myworkspace->name}}
                                                    </td>
                                                    <td class="table-td"> {{$myworkspace->location}}
                                                    </td>
                                                    <td class="table-td"> {{$myworkspace->capacity}}
                                                    </td>


                                                    <td class="table-td">{{$myworkspace->workSpaceType->type}}</td>
                                                    @can('services_access')
                                                        <td class="table-td">
                                                            <a href="/provider/workspace/services/{{$myworkspace->id}}"
                                                               style="margin-left: 10px">
                                                                <i class="fa fa-server"
                                                                   style="color: #000000 !important;"></i>
                                                            </a>
                                                        </td>
                                                    @endcan
                                                    @can('pricing_access')
                                                        <td class="table-td">
                                                            <a href="/provider/workspace/pricing/{{$myworkspace->id}}"
                                                               style="margin-left: 10px">
                                                                <i class="fa fa-money"
                                                                   style="color: #000000 !important;"></i>
                                                            </a>
                                                        </td>
                                                    @endcan
                                                    @can('addons_access')
                                                        <td class="table-td">
                                                            <a href="/provider/workspace/addons/{{$myworkspace->id}}"
                                                               style="margin-left: 10px">
                                                                <i class="fa fa-plus-square"
                                                                   style="color: #000000 !important;"></i>
                                                            </a>
                                                        </td>
                                                    @endcan
                                                    <td class="table-td">/</td>

                                                    <td class="table-td">
                                                        @can('workspace_delete')
                                                            @if($myworkspace->deleted_at ==null)

                                                                <a href="/admin/delete-workspace/{{$myworkspace->id}}"
                                                                   data-target="#static2" data-toggle="modal"
                                                                   style="margin-left: 10px">
                                                                    <i class="fa fa-trash"
                                                                       style="color: #000000 !important;"></i>
                                                                </a>
                                                            @else
                                                                <a href="/admin/restore-workspace/{{$myworkspace->id}}"
                                                                   data-target="#static2" data-toggle="modal"
                                                                   style="margin-left: 10px">
                                                                    <i class="fa fa-recycle"
                                                                       style="color: #000000 !important;"></i>
                                                                </a>
                                                            @endif
                                                        @endcan
                                                        @can('workspace_edit')
                                                            <a href="/provider/edit-workspace/{{$myworkspace->id}}">
                                                                <i class="fa fa-pencil"
                                                                   style="color: #000000 !important;"></i>

                                                            </a>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif
                                        <div id="static2" class="modal fade modal-back"
                                             tabindex="-1" data-backdrop="static"
                                             data-keyboard="false" data-attention-animation="false"
                                        >
                                            <div class="modal-body">
                                                <p class="modal-p">
                                                    <i class="fa fa-warning" style="color: #5DB461 !important;font-size: 50px"></i>
                                                    <br><br>
                                                    Are you sure about delete this WorkSpace
                                                    ? </p>
                                            </div>
                                            <div class="modal-footer padding-right-120 " style="border-top:0px;">
                                                <button type="button"
                                                        data-dismiss="modal"
                                                        class="btn btn-outline dark cansel btn-cansel">
                                                    Cancel
                                                </button>
                                                <button type="button" data-dismiss="modal"
                                                        class="btn green deletee btn-delete">
                                                    delete
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END BORDERED TABLE PORTLET-->
                        </div>
                    </div>
    @endcan

@endsection


