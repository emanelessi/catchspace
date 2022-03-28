@extends('admin.layouts.index')


@section('content')

    <style>
        .btn-i {
            color: #333 !important;
        }

        .btn-circle:hover {
            background-color: #ef6198 !important;
            border-color: #ef6198 !important;
        }

        .span:hover {
            background-color: #ef6198 !important;
            border-color: #ef6198 !important;
        }

        .page-head {
            margin-bottom: 25px !important;
        }

        .head-title {
            font-family: 'Montserrat', sans-serif!important;
            font-size: 33px !important;
            letter-spacing: -0.022em !important;
            color: #333333 !important;
        }

        .add-btn {
            border-color: #E93A76 !important;
            font-family: 'Montserrat', sans-serif!important;
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
            font-family: 'Montserrat', sans-serif!important;
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
            font-family: 'Montserrat', sans-serif!important;
            font-weight: normal !important;
            font-size: 15px !important;
            line-height: 15px !important;
        }

        .table-th {
            font-family: 'Montserrat', sans-serif!important;
            font-size: 20px !important;
            font-weight: 300px;
            letter-spacing: -0.022em !important;
            color: #E93A76 !important;
            padding-bottom: 15px !important;
        }

        .table-td {
            font-family: 'Montserrat', sans-serif!important;
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
            font-family: 'Montserrat', sans-serif!important;
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
            font-family: 'Montserrat', sans-serif!important;
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
            font-family: 'Montserrat', sans-serif!important;
            color: #FFFFFF !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
        }
    </style>
    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->

        <div class="page-title">
            <h1 class="margin-top--10 head-title">Policies</h1>
        </div>
        <div class="page-toolbar">
            <a href="{{route('policiesCreate')}}" type="button"
               class="demo-loading-btn btn btn-primary add-btn">
                <i class="fa fa-plus-circle"></i>
                Add Policies
            </a>
            <!-- END PAGE TOOLBAR -->
        </div>
        <div class="row margin-top-60">
            @foreach($policies as $myPolicies)
                <div class="col-md-4 ">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class="portlet box " style="background-color: #E93A76;font-family: 'Montserrat', sans-serif;
font-size: 14px">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift" style="color: #ffffff"></i>{{$myPolicies->title}}
                            </div>
                            <div class="tools">
                                <a href="" class="fullscreen"> </a>
                                <a href="javascript:;" class="collapse"> </a>
                            </div>
                            <div class="actions">
                                <a  href="/provider/edit-policies/{{$myPolicies->id}}"  type="button" class="btn btn-default btn-sm ">
                                    <i class="fa fa-pencil btn-i"></i> Edit </a>
                                @if($myPolicies->deleted_at ==null)

                                <a class="btn btn-default btn-sm"
                                    href="/provider/delete-policies/{{$myPolicies->id}}">
                                    <i class="fa fa-trash btn-i"> Delete</i>
                                </a>
                                @else
                                    <a class="btn btn-default btn-sm"
                                    href="/provider/restore-policies/{{$myPolicies->id}}">
                                    <i class="fa fa-recycle btn-i"> Restore</i>
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1"
                                 data-rail-color="blue" data-handle-color="#E93A76">
                                <h4 style="font-weight: 700; font-family: 'Montserrat', sans-serif;
font-size: 14px">{{$myPolicies->provider->name}}</h4>
                                <p>{{$myPolicies->body}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- END Portlet PORTLET-->
                </div>
            @endforeach
                <div class="col-md-6 ">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                </div>

        </div>

@endsection


