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

    @can('provider_access')
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1 class="margin-top--10 head-title">Add Pricing</h1>
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
                                        <div class="portlet light bordered" style="margin: 90px 73px 200px;height: 373px;border-radius: 20px !important;background-color: #fff;    border-top-width: 3px !important;
                                            border-bottom-width: 3px !important;">
                                            <div class="portlet-body" style="padding-top: 31px;">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form method="POST" action="{{route('pricingStore')}}">
                                                            @csrf
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label margin-left-9" style="
                                                                color:#6B7280;">
                                                                    Price *</label>
                                                                <input type="number" name="price"
                                                                       placeholder="price"
                                                                       class="form-control form-input"/>
                                                                <input type="hidden" name="work_space_id"
                                                                       class="form-control"
                                                                       value="{{$id}}"/>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label margin-left-9"
                                                                       style="color:#6B7280;">Rent Type
                                                                    *</label>
                                                                <select name="type" class="form-control form-input">
                                                                    @foreach($type as $mytype)
                                                                        <option
                                                                            value="{{$mytype->id}}">{{$mytype->type}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <button type="submit"
                                                                    class="btn btn-submit btn-primary margin-top--300  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 ">
                                                                Save Change
                                                            </button>

                                                        </form>
                                                    </div>

                                                    @if(session()->has('message'))
                                                        <div class="alert alert-success">
                                                            {{ session()->get('message') }}
                                                        </div>
                                                    @endif                                                </div>
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
