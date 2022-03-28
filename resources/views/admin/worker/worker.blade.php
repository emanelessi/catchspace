@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn-circle:hover {
            background-color: #9162B32B !important;
            border-color: #9162B32B !important;
        }

        .span:hover {
            background-color: #ef6198 !important;
            border-color: #ef6198 !important;
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
                <h1 class="margin-top--10 head-title">worker</h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
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
                            <div class="actions">
                                <div class="btn-group ">
                                    <a class="btn btn-sm blue btn-outline btn-circle margin-top--70 btn-filter"
                                       href="javascript:;"
                                       data-toggle="dropdown" data-hover="dropdown" data-close-others="true"
                                       aria-expanded="true">
                                        <i class="fa fa-filter " style="color: #6dce74 !important;"></i>
                                        Filter By
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div
                                        class="dropdown-menu hold-on-click dropdown-checkboxes pull-right margin-top--30 body-filter">
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
                                <table class="table table-light " style="background-color: #E5E5E5;">
                                    <thead>
                                    <tr style="border-bottom: 2px solid #F2F5F8;">
                                        <th class="table-th"> #
                                        </th>
                                        <th class="table-th"> Avatar
                                        </th>
                                        <th class="table-th"> Name
                                        </th>
                                        <th class="table-th"> Job title
                                        </th>
                                        <th class="table-th"> Type
                                        </th>
                                        <th class="table-th"> Reservations
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($worker as $myworker)
                                        <tr>
                                            <td class="table-td">  {{$myworker->id}}
                                            </td>
                                            <td class="table-td"><img alt="" class="img-circle"
                                                                      src="{{'/storage/'.$myworker->avatar}}"/></td>
                                            <td class="table-td"> {{$myworker->name}}
                                            </td>
                                            <td class="table-td"> {{$myworker->job_title}}
                                            </td>
                                            <td class="table-td"> {{$myworker->type}}
                                            </td>
                                            @can('reservations_show')
                                                <td class="table-td">
                                                    <a href="/admin/worker/reservations/{{$myworker->id}}"
                                                       style="margin-left: 10px">
                                                        <i class="fa fa-bookmark"
                                                           style="color: #000000 !important;"></i>
                                                    </a>
                                                </td>
                                            @endcan
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>
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
                        <h1 class="margin-top--10 head-title">My Workers</h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    @can('worker_create')
                        <div class="page-toolbar">
                            <a href="{{route('workerCreate')}}" type="button"
                               class="demo-loading-btn btn btn-primary add-btn">
                                <i class="fa fa-plus-circle"></i>
                                Add worker
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
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm blue btn-outline btn-circle margin-top-20 btn-filter"
                                               href="javascript:;"
                                               data-toggle="dropdown" data-hover="dropdown" data-close-others="true"
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
                                                <th class="table-th"> Avatar
                                                </th>
                                                <th class="table-th"> Name
                                                </th>
                                                <th class="table-th"> Job title
                                                </th>
                                                <th class="table-th"> You Did
                                                </th>
                                                <th class="table-th"> Type
                                                </th>
                                                <th class="table-th"> status
                                                </th>
                                                <th class="table-th"> Reservations
                                                </th>
{{--                                                <th class="table-th"> action--}}
{{--                                                </th>--}}
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($workerworkspaces as $myworker)
{{--                                            @foreach($workspace->workerWorkSpace as $myworker)--}}
{{--                                                {{dd($workspaces)}}--}}
{{--                                                {{dd($workspace->workerWorkSpace[2]->workers)}}--}}
                                                <tr>
                                                    <td class="table-td">  {{$myworker->workers->id}}
                                                    </td>
                                                    <td class="table-td">
                                                        <img alt="" class="img-circle"
                                                             src="{{'/storage/'.$myworker->workers->avatar}}"/>
                                                    </td>
                                                    <td class="table-td"> {{$myworker->workers->name}}
                                                    </td>
                                                    <td class="table-td"> {{$myworker->workers->job_title}}
                                                    </td>
                                                    <td class="table-td"> {{$myworker->workers->you_did}}
                                                    </td>
                                                    <td class="table-td"> {{$myworker->workers->type}}
                                                    </td>
                                                    <td class="table-td"> /
                                                    </td>
                                                    @can('reservations_access')
                                                        <td class="table-td">
                                                            <a href="/provider/worker/reservations/{{$myworker->workers->id}}"
                                                               style="margin-left: 10px">
                                                                <i class="fa fa-bookmark"
                                                                   style="color: #000000 !important;"></i>
                                                            </a>
                                                        </td>
                                                    @endcan
                                                </tr>

{{--                                            @endforeach--}}
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
                                             data-keyboard="false" data-attention-animation="false">
                                            <div class="modal-body">
                                                <p class="modal-p">Are you sure about delete this worker ?</p>
                                            </div>
                                            <div class="modal-footer" style="border-top:0px;">
                                                <button type="button"
                                                        data-dismiss="modal"
                                                        class="btn btn-outline dark cansel btn-cansel">
                                                    Cancel
                                                </button>
                                                <button type="button" data-dismiss="modal"
                                                        class="btn green delete btn-delete">
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END BORDERED TABLE PORTLET-->
                            </div>
                        </div>
    @endcan
@endsection


