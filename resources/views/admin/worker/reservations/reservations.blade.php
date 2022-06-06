@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn:hover {
            background-color: #ef6198 !important;
        }

        .btn-circle:hover {
            background-color: #ef6198 !important;
            border-color: #ef6198 !important;
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
            font-size: 25px !important;
            letter-spacing: -0.022em !important;
            color: #333333 !important;
        }

        .add-btn {
            border-color: #E93A76 !important;
            font-family: 'Montserrat', sans-serif !important;
            color: #FFFFFF !important;
            background: #E93A76 !important;
            border-radius: 5px !important;
            width: 170px !important;
            height: 30px !important;
            font-size: 12px !important;
        }

        .btn-filter {
            background-color: #FFFFFF !important;
            border-color: #FFFFFF !important;
            border-radius: 5px !important;
            font-family: 'Montserrat', sans-serif !important;
            font-weight: normal;
        !important font-size: 12 px !important;
            color: #292D32 !important;
            width: 97px !important;
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
            font-size: 17px !important;
            letter-spacing: -0.022em !important;
            color: #E93A76 !important;
            padding-bottom: 15px !important;
        }

        .table-td {
            font-family: 'Montserrat', sans-serif !important;
            font-size: 16px !important;
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
            font-size: 12px !important;
            letter-spacing: 1px !important;
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
            font-size: 12px !important;
            letter-spacing: 1px !important;
        }
    </style>
    <!-- END PAGE style -->

    @can('reservations_show')

        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title ">
                <h1 class="head-title">{{$reservations[0]->workers->name??''}} Reservations</h1>
            </div>
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
                                        <i class="fa fa-filter" style="color: #E93A76 !important;"></i>
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
                                        <th class="table-th"> Date</th>
                                        <th class="table-th"> Work Space</th>
                                        <th class="table-th"> Capacity</th>
                                        <th class="table-th"> Work Space Type</th>
                                        <th class="table-th"> Rent Type</th>
                                        <th class="table-th"> Addon</th>
                                        <th class="table-th"> Addon Price</th>
                                        <th class="table-th"> Price</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $myreservations)
                                        <tr>
                                            <td class="table-td"> {{$myreservations->id}}
                                            </td>
                                            <td class="table-td">{{$myreservations->date}}</td>
                                            <td class="table-td">{{$myreservations->workSpace->name}}</td>
                                            <td class="table-td">{{$myreservations->workSpace->capacity}}</td>
                                            <td class="table-td">{{$myreservations->workSpace->workSpaceType->type}}</td>
                                            <td class="table-td">{{$myreservations->pricing->rentType->type}}</td>
                                            <td class="table-td">{{$myreservations->workSpaceAddons->addon->name}}</td>
                                            <td class="table-td">{{$myreservations->workSpaceAddons->value}}</td>
                                            <td class="table-td">{{$myreservations->pricing->price}}</td>
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
            @can('reservations_access')
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title ">
                        <h1 class="head-title">{{$reservations[0]->workers->name??''}} Reservations</h1>
                    </div>
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
                                                <i class="fa fa-filter" style="color: #E93A76 !important;"></i>
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
                                                <th class="table-th"> Date</th>
                                                <th class="table-th"> Work Space</th>
                                                <th class="table-th"> Capacity</th>
                                                <th class="table-th"> Work Space Type</th>
                                                <th class="table-th"> Rent Type</th>
                                                <th class="table-th"> Addon</th>
                                                <th class="table-th"> Addon Price</th>
                                                <th class="table-th"> Price</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($reservations as $myreservations)
                                                <tr>
                                                    <td class="table-td"> {{$myreservations->id}}
                                                    </td>
                                                    <td class="table-td">{{$myreservations->date}}</td>
                                                    <td class="table-td">{{$myreservations->workSpace->name}}</td>
                                                    <td class="table-td">{{$myreservations->workSpace->capacity}}</td>
                                                    <td class="table-td">{{$myreservations->workSpace->workSpaceType->type}}</td>
                                                    <td class="table-td">{{$myreservations->pricing->rentType->type}}</td>
                                                    <td class="table-td">{{$myreservations->workSpaceAddons->addon->name}}</td>
                                                    <td class="table-td">{{$myreservations->workSpaceAddons->value}}</td>
                                                    <td class="table-td">{{$myreservations->pricing->price}}</td>


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

@endsection


