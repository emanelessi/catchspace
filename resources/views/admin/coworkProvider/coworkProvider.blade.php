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
            width: 170px !important;
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

    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 class="margin-top--10 head-title">
                Cowork provider
            </h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar  ">
            <a href="{{route('providercreate')}}" class="demo-loading-btn btn btn-primary add-btn">
                <i class="fa fa-plus-circle"></i>
                Add Cowork Provider
            </a>
            <!-- END PAGE TOOLBAR -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN BORDERED TABLE PORTLET-->
                <div class="portlet light portlet-fit bordered "
                     style="
                     background-color: #E5E5E5;
                     border-color: #E5E5E5 !important;
">
                    <!-- BEGIN PAGE Filter-->
                    <div class="portlet-title" style="
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
                                    <div class="span margin-bottom-2 padding-tb-5 span-filter">
                                        <span class="margin-left-40">From A to Z</span>
                                    </div>
                                    <div class="span margin-bottom-2 padding-tb-5 span-filter">
                                        <span class="margin-left-40">From Z to A</span>
                                    </div>
                                    <div class="span margin-bottom-2 padding-tb-5 span-filter">
                                        <span class="margin-left-40">The latest</span>
                                    </div>
                                    <div class="span margin-bottom-2 padding-tb-5 span-filter">
                                        <span class="margin-left-40">The oldest</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE Filter -->

                    <div class="portlet-body margin-top--20">
                        <div class="table-scrollable table-scrollable-borderless">
                            <table class="table  table-light" style="background-color: #E5E5E5;">
                                <thead>
                                <tr style="border-bottom: 2px solid #F2F5F8;">
                                    <th class="table-th"> #
                                    </th>
                                    <th class="table-th"> Logo
                                    </th>
                                    <th class="table-th"> Name
                                    </th>
                                    <th class="table-th"> Owner Name
                                    </th>

                                    <th class="table-th"> Address
                                    </th>
                                    <th class="table-th"> Phone
                                    </th>
                                    <th class="table-th"> Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($providers as $myprovider)
                                    <tr>
                                        <td class="table-td"> {{$myprovider->id}}
                                        </td>
                                        <td class="table-td"><img alt="" class="img-circle"
                                                                  src="{{'/storage/'.$myprovider->logo}}" style="width: 40px;"/></td>
                                        <td class="table-td"> {{$myprovider->name}}
                                        </td>
                                        <td class="table-td"> {{$myprovider->owner_name}}
                                        </td>
                                        <td class="table-td"> {{$myprovider->address}}
                                        </td>
                                        <td class="table-td"> {{$myprovider->phone}}
                                        </td>

                                        <td class="table-td">
                                            <a href="/admin/edit-provider/{{$myprovider->id}}">
                                                <i class="fa fa-pencil" style="color: #000000 !important;"></i>

                                            </a>
                                            @if($myprovider->deleted_at ==null)

                                            <a href="/admin/delete-provider/{{$myprovider->id}}" data-target="#static2"
                                               data-toggle="modal" style="margin-left: 10px">
                                                <i class="fa fa-trash" style="color: #000000 !important;"></i>

                                            </a>
                                            @else

                                                <a href="/admin/restore-provider/{{$myprovider->id}}" data-target="#static2"
                                               data-toggle="modal" style="margin-left: 10px">
                                                <i class="fa fa-recycle" style="color: #000000 !important;"></i>

                                            </a>
                                            @endif

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
                                 data-keyboard="false" data-attention-animation="false">
                                <div class="modal-body">
                                    <p class=" modal-p">
                                        <i class="fa fa-warning" style="color: #5DB461 !important;font-size: 50px"></i>
                                        <br><br>
                                        Are you sure about delete this Cowork provider ? </p>
                                </div>
                                <div class="modal-footer padding-right-120 " style="border-top:0px;">
                                    <button type="button"
                                            data-dismiss="modal"
                                            class="btn btn-outline dark cansel btn-cansel"
                                    >
                                        Cancel
                                    </button>
                                    <button type="button" data-dismiss="modal" class="btn green deletee btn-delete"
                                    >
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
@endsection


