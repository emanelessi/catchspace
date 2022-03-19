@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn:hover {
            background-color: #7962B3 !important;
        }

        .page-head {
            margin-bottom: 25px !important;
        }

        .head-title {
            font-family: AvenirLTStd-Book !important;
            font-size: 33px !important;
            letter-spacing: -0.022em !important;
            color: #333333 !important;
        }

        .form-input {
            height: 40px !important;
            border-radius: 8px !important;
            border: solid 1px #d1d5db !important;
        }

        .btn-submit {
            width: 125px !important;
            height: 32.2px !important;
            border-color: #9162B3 !important;
            align-items: center !important;
            padding: 0 !important;
            border-radius: 8px !important;
            background-color: #9162B3 !important;
            font-family: AvenirLTStd-Book !important;
            color: #FFFFFF !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
        }
    </style>
    <!-- END PAGE style -->

    @can('provider_access')
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1 class="margin-top--10 head-title">Edit Addon</h1>
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
                                                    <form role="form" action="{{route('updateAddon')}}" method="POST">
                                                        @csrf
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">
                                                                Value *</label>
                                                            <input type="number" name="value"
                                                                   placeholder="value"
                                                                   class="form-control form-input"
                                                                   value="{{$workSpaceAddons->value}}"/>
                                                            <input type="hidden" name="id"
                                                                   value="{{$workSpaceAddons->id}}"/>
                                                            <input type="hidden" name="work_space_id"
                                                                   value="{{$work_space_id}}"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Service
                                                                name *</label>
                                                            <input type="text" name="name"
                                                                   value="{{$workSpaceAddons->addon->name}}"
                                                                   placeholder="name"
                                                                   class="form-control form-input"/>
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
                                                @endif                                            </div>
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
