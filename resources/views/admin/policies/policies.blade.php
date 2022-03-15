@extends('admin.layouts.index')


@section('content')

    <style>
        .btn-i {
            color: #333 !important;
        }

        .btn-circle:hover {
            background-color: #7952B32B !important;
            border-color: #7952B32B !important;
        }

        .span:hover {
            background-color: #8B62C9 !important;
            border-color: #8B62C9 !important;
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
                    <div class="portlet box " style="background-color: #7952B3;font-family: AvenirLTStd-Book;
font-size: 17px">
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
                                <a class="btn btn-default btn-sm"
                                   data-target="#static2" data-toggle="modal" href="/provider/delete-policies/{{$myPolicies->id}}">
                                    <i class="icon-trash btn-i"> Delete</i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1"
                                 data-rail-color="blue" data-handle-color="#7952B3">
                                <h4 style="font-weight: 700; font-family: AvenirLTStd-Book;
font-size: 17px">{{$myPolicies->provider->name}}</h4>
                                <p>{{$myPolicies->body}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- END Portlet PORTLET-->
                </div>
            @endforeach
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div id="static2" class="modal fade"
                 tabindex="-1" data-backdrop="static"
                 data-keyboard="false" data-attention-animation="false"
                 style="background: rgb(255, 255, 255);border-radius: 10px !important;display: block;margin-top: -82.5px;height: 185px;width: 480px;">
                <div class="modal-body">
                    <p style="
                                                /*margin-bottom: 1px;*/
                                                font-family: AvenirLTStd-Book;
                                                font-weight: bold;
                                                font-size: 18px;
                                                line-height: 24px;
                                                text-align: center;
                                                letter-spacing: -0.011em;
                                                color: #333333;
                                                /* opacity: 0.5; */
                                                "> Are you sure about delete this Policie ? </p>
                </div>
                <div class="modal-footer padding-right-120 " style="border-top:0px;">
                    <button type="button"
                            data-dismiss="modal"
                            class="btn btn-outline dark cansel"
                            style="
                                                               width: 125px;
                                                               height: 32.2px;
                                                               /*flex-grow: 0;*/
                                                               /*display: flex;*/
                                                               /*flex-direction: column;*/
                                                               /*justify-content: center;*/
                                                               /*border-color: #7952b3;*/
                                                               align-items: center;
                                                               /*margin: -155px 0 0 755px;*/
                                                               padding: 0;
                                                               border-radius: 8px !important;
                                                               /*background-color: #7952b3;*/
                                                               font-family: AvenirLTStd-Book;
                                                               /*font-style: normal;*/
                                                               /*font-weight: 600;*/
                                                               /*font-size: 14px;*/
                                                               /* line-height: 24px; */
                                                               /*color: #FFFFFF;*/
                                                               font-size: 13px;
                                                               letter-spacing: 1px;
                                                                  /*background: #FFFFFF;*/
                                        border-radius: 10px !important;
                                        /*margin-right: 244px;*/
                                        border-color: #7952B3;
                                                               ">
                        Cancel
                    </button>
                    <button type="button" data-dismiss="modal" class="btn green deletee"
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
                        delete
                    </button>
                </div>
            </div>
        </div>

@endsection


