@extends('admin.layouts.index')

@section('content')
    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
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
            font-family: AvenirLTStd-Book;
            font-size: 14px;
            line-height: 24px;
            color: #6B7280;
            width: 157px;
            display: inline-block;
        }

        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: #7952b3;
            color: white;

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

        .add-btn {
            border-color: #7952B3 !important;
            font-family: AvenirLTStd-Book !important;
            color: #FFFFFF !important;
            background: #7952B3 !important;
            border-radius: 5px !important;
            width: 160px !important;
            height: 30px !important;
            font-size: 13px !important;
        }

        .btn-filter {
            background-color: #FFFFFF !important;
            border-color: #FFFFFF !important;
            border-radius: 5px !important;
            font-family: AvenirLTStd-Book !important;
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
            background: #7952B3 !important;
            border-radius: 5px !important;
            font-family: AvenirLTStd-Book !important;
            font-weight: normal !important;
            font-size: 15px !important;
            line-height: 15px !important;
        }

        .table-th {
            font-family: AvenirLTStd-Book !important;
            font-size: 20px !important;
            letter-spacing: -0.022em !important;
            color: #e7ae04 !important;
            padding-bottom: 15px !important;
        }

        .table-td {
            font-family: AvenirLTStd-Book !important;
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
            font-family: AvenirLTStd-Book !important;
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
            font-family: AvenirLTStd-Book !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
            border-radius: 10px !important;
            border-color: #7952B3 !important;
        }

        .btn-delete {
            width: 125px !important;
            height: 32.2px !important;
            border-color: #7952b3 !important;
            align-items: center !important;
            padding: 0 !important;
            border-radius: 8px !important;
            background-color: #7952b3 !important;
            font-family: AvenirLTStd-Book !important;
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
            font-family: AvenirLTStd-Book !important;
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
            border-color: #7952b3 !important;
            align-items: center !important;
            padding: 0 !important;
            border-radius: 8px !important;
            background-color: #7952b3 !important;
            font-family: AvenirLTStd-Book !important;
            color: #FFFFFF !important;
            font-size: 13px !important;
            letter-spacing: 1px !important;
        }
    </style>
    <div class="page-head" style="margin-bottom: 25px;">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            font-family: AvenirLTStd-Book;
            font-size: 30px;
            letter-spacing: -0.022em;
            color: #333333;
            " class="margin-top--10 ">Edit Cowork provider</h1>
        </div>
        <!-- END PAGE TITLE -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">

                    <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane active" id="tab_1_1">
                        <form role="form" action="{{route('providerupdate')}}" enctype="multipart/form-data"
                              method="Post">
                            @csrf

                            <div class="profile-userpic  margin-right--12 "
                                 style="
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
                        /*margin-top: 47px;*/
">
                                <input type="file" data-loading-text="Loading..."
                                       name="logo" id="file"
                                       class="inputfile demo-loading-btn btn btn-primary margin-top-85"
                                       value="{{$provider->logo}}"
                                       style="

                                         border-color:#eaeaea;

                                         align-items: center;
                                         padding: 5px;
                                         border-radius: 8px !important;
                                         background-color: #eaeaea;
                                         font-family: AvenirLTStd-Book;
                                         font-size: 14px;
                                         line-height: 24px;
                                         color: #6B7280;
                                         width: 157px;
                                         "
                                >


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
                                            <div class="form-group margin-left-9 margin-right-10"
                                                 style="
                                                             /*margin-left: 16px;*/
                                                             /*margin-right: 16px;*/">
                                                <label class="control-label margin-left-9"
                                                       style="color:#6B7280;">
                                                    Name*</label>
                                                <input type="text" name="name"
                                                       placeholder="Tools" value="{{$provider->name}}"
                                                       class="form-control" style="
                                                                       height: 40px;
                                                                       /*height: 56px;padding: 0 12px;*/
                                                                       border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                                <input type="hidden" name="id"
                                                        value="{{$provider->id}}"/>
                                            </div>
                                            <div class="form-group margin-left-9 margin-right-10"
                                                 style="
                                                             /*margin-left: 16px;*/
                                                             /*margin-right: 16px;*/
">
                                                <label class="control-label margin-left-9"
                                                       style="color:#6B7280;">
                                                    Owner Name*</label>
                                                <input type="text" name="owner_name"
                                                       placeholder="Rami" value="{{$provider->owner_name}}"
                                                       class="form-control" style="
                                                                       height: 40px;
                                                                       /*height: 56px;padding: 0 12px;*/
                                                                       border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                            </div>
                                            <div class="form-group margin-left-9 margin-right-10"
                                                 style="
                                                             /*margin-left: 16px;*/
                                                             /*margin-right: 16px;*/
">
                                                <label class="control-label margin-left-9"
                                                       style="color:#6B7280;">
                                                    Address*</label>
                                                <input type="text" name="address" value="{{$provider->address}}"
                                                       placeholder="Al-rehab mall, remal street, Gaza, palestine"
                                                       class="form-control" style="
                                                                       height: 40px;
                                                                       /*height: 56px;padding: 0 12px;*/
                                                                       border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                                            </div>
                                            <button type="submit"
                                                    class="btn btn-primary margin-top-25  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 "
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

@endsection


