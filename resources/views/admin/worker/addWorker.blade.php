@extends('admin.layouts.index')

@section('content')
    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
        }

        .demo-loading-btn:hover {
            background-color: #D2CDCD54 !important;
        }

    </style>

    <div class="page-head" style="
    /*margin-bottom: 25px;*/
">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            /*width: 557px;*/
            /*height: 47px;*/
            /*left: 296px;*/
            /*top: 104px;*/
            /*font-style: normal;*/
            /*font-weight: 600;*/
            font-size: 30px;
            /*line-height: 48px;*/
/* or 120% */letter-spacing: -0.022em;
color: #333333;
             font-family: AvenirLTStd-Book;
/*margin-bottom: 20px;*/
">Add new worker</h1>
        </div>
        <!-- END PAGE TITLE -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div>
                    <!-- PORTLET MAIN -->
                    <div class="portlet light profile-sidebar-portlet bordered"
                         style="
                         border-bottom: 1px solid #eef1f5;
                          height: 720px;
                          border-radius: 20px !important;">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic  margin-right--12" style="
                        float: left;
                        width: 300px;
                        /*margin-right: -35px;*/
">
                            <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <b class="profile-usertitle margin-top-40" style="
                        text-align: justify;
                        /*margin-top: 47px;*/
">
                            <button type="button" data-loading-text="Loading..."
                                    class="demo-loading-btn btn btn-primary margin-top-60"
                                    style="
                                         /*width: 165px;*/
                                         /*height: 41.2px;*/
                                         /*flex-grow: 0;*/
                                         /*display: flex;*/
                                         /*flex-direction: column;*/
                                         /*justify-content: center;*/
                                         border-color:#eaeaea;
                                         /*margin-right:600px;*/
                                         /*margin-top: 60px;*/
                                         align-items: center;
                                         /*padding: 0;*/
                                         border-radius: 8px !important;
                                         background-color: #eaeaea;
             font-family: AvenirLTStd-Book;
                                         /*font-weight: 600;*/
                                         font-size: 14px;
                                         line-height: 24px;
                                         color: #6B7280;
                                         "
                            > Upload wokspace logo
                            </button>
                        </b>

                        <!-- END SIDEBAR USER TITLE -->  <!-- BEGIN PROFILE CONTENT -->
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet light bordered" style="margin: 90px 73px 200px;height: 300px;border-radius: 20px !important;background-color: #fff;    border-top-width: 3px !important;
                                            border-bottom-width: 3px !important;">
                                        <div class="portlet-body" style="padding-top: 31px;">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <form role="form" action="{{route('workerStore')}}"
                                                          method="POST">
                                                        @csrf
                                                        {{--                                                        <div class="form-group col-md-6">--}}
                                                        {{--                                                            <label class="control-label" style="color:#6B7280;">Email--}}
                                                        {{--                                                                *</label>--}}
                                                        {{--                                                            <input type="text" placeholder="Name@gmail.com"--}}
                                                        {{--                                                                   class="form-control"--}}
                                                        {{--                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                        <div class="form-group col-md-6">--}}
                                                        {{--                                                            <label class="control-label" style="color:#6B7280;">Phone--}}
                                                        {{--                                                                *</label>--}}
                                                        {{--                                                            <input type="text" placeholder="+970 590 000 000"--}}
                                                        {{--                                                                   class="form-control"--}}
                                                        {{--                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                        <div class="form-group col-md-6">--}}
                                                        {{--                                                            <label class="control-label" style="color:#6B7280;">Description--}}
                                                        {{--                                                                *</label>--}}
                                                        {{--                                                            <input type="text"--}}
                                                        {{--                                                                   placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing  "--}}
                                                        {{--                                                                   class="form-control"--}}
                                                        {{--                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                        <div class="form-group col-md-6">--}}
                                                        {{--                                                            <label class="control-label" style="color:#6B7280;">Status--}}
                                                        {{--                                                                *</label>--}}
                                                        {{--                                                            <input type="text" placeholder="Active"--}}
                                                        {{--                                                                   class="form-control"--}}
                                                        {{--                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>--}}
                                                        {{--                                                        </div> --}}

                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Name
                                                                *</label>
                                                            <input type="text" placeholder="Full Name"
                                                                   class="form-control" name="name"
                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Job
                                                                Title
                                                                *</label>
                                                            <input type="text" placeholder="Job Title"
                                                                   class="form-control" name="job_title"
                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">You Did
                                                                *</label>
                                                            <input type="text"
                                                                   placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing  "
                                                                   class="form-control" name="you_did"
                                                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" style="color:#6B7280;">Work
                                                                Space
                                                                *</label>
                                                            <select name="work_space_type_id" class="form-control"
                                                                    style="height: 56px;padding: 0 12px;border-radius:
                                                                    8px !important;border: solid 1px #d1d5db;">
                                                                <option> </option>
                                                                @foreach($type as $mytype)
                                                                    <option
                                                                        value="{{$mytype->id}}" >{{$mytype->type}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <button type="submit"
                                                                class="btn btn-primary margin-top--300  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 "
                                                                style="
                                                               width: 125px;
                                                               height: 32.2px;
                                                               /*flex-grow: 0;*/
                                                               /*display: flex;*/
                                                               /*flex-direction: column;*/
                                                               /*justify-content: center;*/
                                                               border-color: #7952b3;
                                                               align-items: center;
                                                               /*margin: -155px 0 0 755px;*/
                                                               padding: 0;
                                                               border-radius: 8px !important;
                                                               background-color: #7952b3;
                                                               font-family: AvenirLTStd-Book;
                                                               /*font-style: normal;*/
                                                               /*font-weight: 600;*/
                                                               /*font-size: 14px;*/
                                                               /* line-height: 24px; */
                                                               color: #FFFFFF;
                                                               font-size: 13px;
                                                               letter-spacing: 1px;
                                                               ">
                                                            Save Change
                                                        </button>
                                                    </form>
                                                </div>

                                                <!-- END PERSONAL INFO TAB -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->

                        <!-- END PORTLET MAIN -->

                        <!-- END BEGIN PROFILE SIDEBAR -->


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


