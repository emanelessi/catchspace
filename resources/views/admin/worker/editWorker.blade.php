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
            <h1 class="margin-top--10 head-title">Edit worker</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12">

                <!-- PERSONAL INFO TAB -->
                <div class="tab-pane active" id="tab_1_1">
                    <form role="form" action="{{route('updateWorker')}}" enctype="multipart/form-data"
                          method="Post">
                        @csrf
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="profile-userpic  margin-right--12 " style="
                        float: left;
                        width: 300px;
">
                            <img src="{{'/storage/'.$worker->avatar}}"
                                 class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <b class="profile-usertitle margin-top-40" style="
                        text-align: justify;
                        /*margin-top: 47px;*/
">
                            <input type="file" data-loading-text="Loading..."
                                   name="avatar" id="file" value="{{'/storage/'.$worker->avatar}}"
                                   class="inputfile img-logo demo-loading-btn btn btn-primary margin-top-85"

                            >


                            <label for="file"> Upload Worker logo <i class="fa fa-file-photo-o"
                                                                     style="color: #6B7280 !important;"></i></label>
                        </b>
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
                                        <label class="control-label margin-left-9"
                                               style="color:#6B7280;">
                                            Name*</label>
                                        <input type="text" name="name"
                                               placeholder="Rami" value="{{$worker->name}}"
                                               class="form-control form-input"/>
                                        <input type="hidden" name="id"
                                               value="{{$worker->id}}"
                                        />
                                    </div>
                                    <div class="form-group margin-left-9 margin-right-10">
                                        <label class="control-label margin-left-9"
                                               style="color:#6B7280;">
                                            Email*</label>
                                        <input type="email" name="email"
                                                value="{{$worker->email}}"
                                               class="form-control form-input"/>
                                    </div>
                                    <div class="form-group margin-left-9 margin-right-10">
                                        <label class="control-label margin-left-9"
                                               style="color:#6B7280;">
                                            Password*</label>
                                        <input type="password" name="password"
                                                value="{{$worker->password}}"
                                               class="form-control form-input"/>
                                    </div>
                                    <div class="form-group margin-left-9 margin-right-10">
                                        <label class="control-label margin-left-9"
                                               style="color:#6B7280;">
                                            Job Title*</label>
                                        <input type="text" name="job_title"
                                               placeholder="Developer" value="{{$worker->job_title}}"
                                               class="form-control form-input"/>
                                    </div>
{{--                                    <div class="form-group margin-left-9 margin-right-10">--}}
{{--                                        <label class="control-label margin-left-9"--}}
{{--                                               style="color:#6B7280;">--}}
{{--                                            You Did*</label>--}}
{{--                                        <input type="text" name="you_did"--}}
{{--                                               placeholder="yes or no" value="{{$worker->you_did}}"--}}
{{--                                               class="form-control form-input"/>--}}
{{--                                    </div>--}}
                                    <div class="form-group margin-left-9 margin-right-10">
                                        <label class="control-label margin-left-9"
                                               style="color:#6B7280;">
                                            Type*</label>
                                        <select name="type" class="form-control"
                                                style="height: 56px;padding: 0 12px;border-radius:
                                                                    8px !important;border: solid 1px #d1d5db;">
                                            <option></option>
                                            <option value="team">team</option>
                                            <option value="individual">individual</option>
                                        </select>
                                    </div>
                                    <div class="form-group margin-left-9 margin-right-10">
                                        <label class="control-label margin-left-9"
                                               style="color:#6B7280;">
                                            Work Space*</label>
                                        <select name="work_space_id" class="form-control"
                                                style="height: 56px;padding: 0 12px;border-radius:
                                                                    8px !important;border: solid 1px #d1d5db;">
                                            <option></option>
                                            @foreach($work_space as $mywork_space)
                                                <option
                                                    value="{{$mywork_space->id}}">{{$mywork_space->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit"
                                            class="btn btn-submit btn-primary margin-top-25  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 ">
                                        Save Change
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                             </div>
        </div>

    </div>

@endsection


