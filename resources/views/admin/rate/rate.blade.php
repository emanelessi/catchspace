@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn:hover {
            /*background-color: #7962B3 !important;*/
            background-color: #ef6198 !important;
        }

        .btn-circle:hover {
            background-color: #9162B32B !important;
            border-color: #9162B32B !important;
        }

        .span:hover {
            background-color: #6dce74 !important;
            border-color: #6dce74 !important;
        }

        .cansel:hover {
            background-color: #C4C4C436 !important;
        }

        .deletee:hover {
            background-color: #E93A76 !important;
        }

        .head-title {
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
            font-size: 33px !important;
            letter-spacing: -0.022em !important;
            color: #333333 !important;
        }

        .add-btn {
            border-color: #E93A76 !important;
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
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
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
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
            background: #5AB25E !important;
            border-radius: 5px !important;
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
            font-weight: normal !important;
            font-size: 15px !important;
            line-height: 15px !important;
        }

        .table-th {
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
            font-size: 20px !important;
            font-weight: 300px;
            letter-spacing: -0.022em !important;
            color: #E93A76 !important;
            padding-bottom: 15px !important;
        }

        .table-td {
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
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
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
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
            /*border-radius: 8px !important;*/
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
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
            /*background-color: #9162B3 !important;*/
            background-color: #E93A76 !important;
            /*font-family: AvenirLTStd-Book !important;*/
            font-family: 'Montserrat', sans-serif;
            color: #FFFFFF !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
        }

    </style>
    <!-- END PAGE style -->

    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title ">
            <h1 class="margin-top--10 head-title">Rate</h1>
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
                    @can('rate_access')
                        <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table  table-light" style="background-color: #E5E5E5;">
                                    <thead>
                                    <tr style="border-bottom: 1.2px solid #978D8D;">
                                        <th class="table-th"> #
                                        </th>
                                        <th class="table-th"> Work Space
                                        </th>
                                        <th class="table-th"> Average
                                        </th>
                                        <th class="table-th"> Count
                                        </th>
                                        <th class="table-th"> Raters
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rate as $myrate)
                                        <tr>
                                            <td class="table-td"> {{$myrate->id}}
                                            </td>
                                            <td class="table-td">{{$myrate->workSpace->name}}</td>
                                            <td class="table-td"> {{$myrate->rate_avg}}
                                            </td>
                                            <td class="table-td"> {{$myrate->rate_count}}
                                            </td>
                                            <td class="table-td">
                                                <a href="/admin/rate/rating/{{$myrate->id}}" style="margin-left: 10px">
                                                    <i class="fa fa-user" style="color: #000000 !important;"></i>

                                                </a>
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
                                @endcan
                                @can('rate_show')
                        <div class="portlet-body">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table  table-light" style="background-color: #E5E5E5;">
                                    <thead>
                                    <tr style="border-bottom: 1.2px solid #978D8D;">
                                        <th class="table-th"> #
                                        </th>
                                        <th class="table-th"> Work Space
                                        </th>
                                        <th class="table-th"> Average
                                        </th>
                                        <th class="table-th"> Count
                                        </th>
                                        <th class="table-th"> Raters
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rate as $myrate)
                                        <tr>
                                            <td class="table-td"> {{$myrate->id}}
                                            </td>
                                            <td class="table-td">{{$myrate->workSpace->name}}</td>
                                            <td class="table-td"> {{$myrate->rate_avg}}
                                            </td>
                                            <td class="table-td"> {{$myrate->rate_count}}
                                            </td>
                                            <td class="table-td">
                                                <a href="/provider/rate/rating/{{$myrate->id}}" style="margin-left: 10px">
                                                    <i class="fa fa-user" style="color: #000000 !important;"></i>

                                                </a>
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
                                @endcan
                            </div>
                        </div>
                </div>
                <!-- END BORDERED TABLE PORTLET-->
            </div>
        </div>
@endsection


