@extends('admin.layouts.index')

@section('content')
    <!-- BEGIN PAGE style -->
    <style>
        .btn:hover {
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
            font-size: 13px !important;
            letter-spacing: 1px !important;
        }
    </style>
    <!-- END PAGE style -->

    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 class="margin-top--10 head-title ">Edit User</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row ">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-12 ">
                    <!-- PORTLET MAIN -->
                    <div class=" portlet light profile-sidebar-portlet bordered margin-top-35"
                         style="border-bottom: 1px solid #eef1f5;height: 100%;border-radius: 20px !important;">

                        <!-- END SIDEBAR USER TITLE -->  <!-- BEGIN PROFILE CONTENT -->
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet light bordered" style="
                                        margin: 72px 73px 200px;
                                        border-radius: 20px !important;
                                        background-color: #fff;
                                         border-top-width: 2px !important;
                                            border-bottom-width: 2px !important;
">
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <form role="form" action="{{route('userupdate')}}" method="Post">
                                                        @csrf
                                                        <div class="form-group margin-left-9 margin-right-10">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Name*</label>
                                                            <input type="text"
                                                                   placeholder="full name" value="{{$user->full_name}}"
                                                                   name="full_name"
                                                                   class="form-control form-input"/>
                                                            <input type="hidden"
                                                                   value="{{$user->id}}" name="id"
                                                            />
                                                        </div>
                                                        <div class="form-group margin-left-9 margin-right-10">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Email *</label>
                                                            <input type="email" value="{{$user->email}}"
                                                                   placeholder="email" name="email"
                                                                   class="form-control form-input"/>
                                                        </div>
                                                        <div class="form-group margin-left-9 margin-right-10">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Password *</label>
                                                            <input type="password"
                                                                   placeholder="password" name="password"
                                                                   class="form-control form-input"/>
                                                        </div>
                                                        <div class="form-group margin-left-9 margin-right-10">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Phone *</label>
                                                            <input type="tel"
                                                                   placeholder="phone" name="phone"
                                                                   value="{{$user->phone}}"
                                                                   class="form-control form-input"/>
                                                        </div>
                                                        <div class="form-group margin-left-9 margin-right-10">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Type*</label>
                                                            <div class="mt-radio-list margin-left-9 margin-right-10">
                                                                <label class="mt-radio">
                                                                    <input type="radio" name="type" id="noCheck"
                                                                           value="1"> Admin
                                                                    <span></span>
                                                                </label>
                                                                <label class="mt-radio">
                                                                    <input type="radio" name="type" id="yesCheck"
                                                                           value="2"
                                                                           {{ (isset($user->provider->id) || old('id'))? "selected":"" }}  onclick="javascript:yesnoCheck();">
                                                                    Provider
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group margin-left-9 margin-right-10  "
                                                             id="ifYes" style="visibility:hidden">

                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Provider</label>
                                                            <select name="provider" class="form-control form-input">
                                                                @foreach($provider as $myprovider )
                                                                    <option
                                                                        value="{{$myprovider->provider->id}}" {{ (isset($user->provider->id) || old('id'))? "selected":"" }}>{{$myprovider->provider->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group margin-left-9 margin-right-10  ">

                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Role*</label>
                                                            <select name="role" class="form-control form-input">
                                                                @foreach($role as $myrole )
                                                                    <option
                                                                        value="{{$myrole->id}}" {{ (isset($user->provider->roles[0]->id) || old('id'))? "selected":"" }}>{{$myrole->name}}</option>
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
                                                @endif                                              </div>
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
    <script type="text/javascript">
        function yesnoCheck() {
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('ifYes').style.visibility = 'visible';
            } else document.getElementById('ifYes').style.visibility = 'hidden';

        }
    </script>
@endsection


