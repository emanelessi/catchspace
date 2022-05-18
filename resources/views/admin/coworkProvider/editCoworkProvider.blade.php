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


    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 class="margin-top--10 head-title">Edit Cowork provider</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12">
                <!-- PERSONAL INFO TAB -->
                <div class="tab-pane active" id="tab_1_1">
                    <form role="form" action="{{route('providerupdate')}}" enctype="multipart/form-data"
                          method="Post">
                        @csrf
                        <div class="profile-userpic  margin-right--12 " style="
                        float: left;
                        width: 300px;
">
                            <img src="/storage/{{$provider->logo}}"
                                 class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <b class="profile-usertitle margin-top-40" style="
                        text-align: justify;
">
                            <input type="file" data-loading-text="Loading..."
                                   name="logo" id="file"
                                   class="inputfile img-logo demo-loading-btn btn btn-primary margin-top-85"
                                   value="{{$provider->logo}}" >
                            <label for="file"> Upload wokspace logo <i class="fa fa-file-photo-o"
                                                                       style="color: #6B7280 !important;"></i></label>

                            <div class="portlet light bordered" style="
                                        margin: 110px 73px 200px;
                                        border-radius: 20px !important;
                                        background-color: #fff;
                                         border-top-width: 2px !important;
                                            border-bottom-width: 2px !important;
">
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="form-group margin-left-9 margin-right-10">
                                            <label class="control-label margin-left-9" style="color:#6B7280;">
                                                Name*</label>
                                            <input type="text" name="name"
                                                   placeholder="Tools" value="{{$provider->name}}"
                                                   class="form-control form-input"/>
                                            <input type="hidden" name="id"
                                                   value="{{$provider->id}}"/>
                                        </div>
                                        <div class="form-group margin-left-9 margin-right-10">
                                            <label class="control-label margin-left-9"
                                                   style="color:#6B7280;">
                                                Owner Name*</label>
                                            <input type="text" name="owner_name"
                                                   placeholder="Rami" value="{{$provider->owner_name}}"
                                                   class="form-control form-input"/>
                                        </div>
                                        <div class="form-group margin-left-9 margin-right-10">
                                            <label class="control-label margin-left-9"
                                                   style="color:#6B7280;">
                                                Address*</label>
                                            <input type="text" name="address" value="{{$provider->address}}"
                                                   placeholder="Al-rehab mall, remal street, Gaza, palestine"
                                                   class="form-control form-input"/>
                                        </div>
                                        <div class="form-group margin-left-9 margin-right-10">
                                            <label class="control-label margin-left-9"
                                                   style="color:#6B7280;">
                                                Phone*</label>
                                            <input type="number" name="phone" value="{{$provider->phone}}"
                                                   placeholder="059"
                                                   class="form-control form-input"/>
                                        </div>
                                        <button type="submit"
                                                class="btn btn-submit btn-primary margin-top-25  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 ">
                                            Save Change
                                        </button>
                    </form>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif              </div>
        </div>
    </div>


    </div>

@endsection


