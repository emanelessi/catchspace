@extends('admin.layouts.index')

@section('content')
    <style>

        .btn:hover {
            background-color: #8B62C9 !important;
        }

        .btn-circle:hover {
            background-color: #7952B32B !important;
            border-color: #7952B32B !important;
        }

        .span:hover {
            background-color: #8B62C9 !important;
            border-color: #8B62C9 !important;
        }

        .cansel:hover {
            background-color: #C4C4C436 !important;
        }

        .deletee:hover {
            background-color: #8B62C9 !important;
        }

    </style>
    <div class="page-head" style="margin-bottom: 25px;">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            font-family: AvenirLTStd-Book;
            font-size: 33px;
            letter-spacing: -0.022em;
            color: #333333;
            " class="margin-top--10">
                Cowork provider
            </h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar  ">
            <a href="{{route('providercreate')}}" class="demo-loading-btn btn btn-primary" style="
            border-color: #7952B3;
            font-family: AvenirLTStd-Book;
            color: #FFFFFF;
            background: #7952B3;
            border-radius: 5px !important;
            width: 160px;
            height: 30px;
            font-size: 13px;
">
                <i class="fa fa-plus-circle"></i>
                Add Cowork Provider
            </a>
            <!-- END PAGE TOOLBAR -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN BORDERED TABLE PORTLET-->
                <div class="portlet light portlet-fit bordered"
                     style="
                     background-color: #E5E5E5;
                     border-color: #E5E5E5 !important;
">
                    <div class="portlet-title" style="
                    border-color: #E5E5E5;
">
                        <div class="actions">
                            <div class="btn-group open">
                                <a class="btn btn-sm blue btn-outline btn-circle margin-top-20" href="javascript:;"
                                   style="
                                   background-color: #FFFFFF;
                                   border-color: #FFFFFF;
                                   border-radius: 5px !important;
                                   font-family: AvenirLTStd-Book;
                                   font-weight: normal;
                                   font-size: 13px;
                                   color: #292D32;
                                   width: 90px;
                                   height: 29px;
                                   margin-right: -20px;
"
                                   data-toggle="dropdown" data-hover="dropdown" data-close-others="true"
                                   aria-expanded="true">
                                    <i class="fa fa-filter" style="color: #7952B3 !important;"></i>
                                    Filter By
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right" style="
    background: #FFFFFF;
    border: 1px solid #F4F4F4;
    box-sizing: border-box;
    border-radius: 10px !important;
">
                                    <div class="span margin-bottom-2  padding-tb-5 "
                                         style="

                                        color: #fff;

                                        background: #7952B3;
                                        border-radius: 5px !important;
                                        font-family: AvenirLTStd-Book;
                                        font-weight: normal;
                                        font-size: 15px;
                                        line-height: 15px;
">
                                        <span class="margin-left-40">From A to Z</span>
                                    </div>
                                    <div class="span margin-bottom-2  padding-tb-5 "
                                         style="

                                        color: #fff;

                                        background: #7952B3;
                                        border-radius: 5px !important;
                                        font-family: AvenirLTStd-Book;
                                        font-weight: normal;
                                        font-size: 15px;
                                        line-height: 15px;">
                                        <span class="margin-left-40">From Z to A</span>
                                    </div>
                                    <div class="span margin-bottom-2  padding-tb-5 "
                                         style="
                                        color: #fff;
                                        background: #7952B3;
                                        border-radius: 5px !important;
                                        font-family: AvenirLTStd-Book;
                                        font-weight: normal;
                                        font-size: 15px;
                                        line-height: 15px;">
                                        <span class="margin-left-40">The latest</span>
                                    </div>
                                    <div class="span margin-bottom-2  padding-tb-5 "
                                         style="
                                        color: #fff;
                                        background: #7952B3;
                                        border-radius: 5px !important;
                                        font-family: AvenirLTStd-Book;
                                        font-weight: normal;
                                        font-size: 15px;
                                        line-height: 15px;">
                                        <span class="margin-left-40">The oldest</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portlet-body margin-top--20">
                        <div class="table-scrollable table-scrollable-borderless">
                            <table class="table  table-light" style="background-color: #E5E5E5;">
                                <thead>
                                <tr style="border-bottom: 2px solid #F2F5F8;">
                                    <th style="
  font-family: AvenirLTStd-Book;
    font-size: 20px;
    letter-spacing: -0.022em;
    color: #e7ae04;
    padding-bottom: 15px;
"> #
                                    </th>
                                    <th style="
   font-family: AvenirLTStd-Book;
    font-size: 20px;
    letter-spacing: -0.022em;
    color: #e7ae04;
    padding-bottom: 15px;
"> Logo
                                    </th>
                                    <th style="
  font-family: AvenirLTStd-Book;
    font-size: 20px;
    letter-spacing: -0.022em;
    color: #e7ae04;
    padding-bottom: 15px;
"> Name
                                    </th>
                                    <th style="
  font-family: AvenirLTStd-Book;
    font-size: 20px;
    letter-spacing: -0.022em;
    color: #e7ae04;
    padding-bottom: 15px;
"> Owner Name
                                    </th>

                                    <th style="
  font-family: AvenirLTStd-Book;
    font-size: 20px;
    letter-spacing: -0.022em;
    color: #e7ae04;
    padding-bottom: 15px;
"> Address
                                    </th>
                                    <th style="
  font-family: AvenirLTStd-Book;
    font-size: 20px;
    letter-spacing: -0.022em;
    color: #e7ae04;
    padding-bottom: 15px;
"> Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($providers as $myprovider)
                                    <tr>
                                        <td style="

 font-family: AvenirLTStd-Book;
    font-size:  20px;
    letter-spacing: 0.02em;
    color: #000000;
"> {{$myprovider->id}}
                                        </td>
                                        <td style="

 font-family: AvenirLTStd-Book;
    font-size:  20px;
    letter-spacing: 0.02em;
    color: #000000;
"><img alt="" class="img-circle"
       src="{{'/storage/'.$myprovider->logo}}"/></td>
                                        <td style="

 font-family: AvenirLTStd-Book;
    font-size:  20px;
    letter-spacing: 0.02em;
    color: #000000;
"> {{$myprovider->name}}
                                        </td>
                                        <td style="

 font-family: AvenirLTStd-Book;
    font-size:  20px;
    letter-spacing: 0.02em;
    color: #000000;
"> {{$myprovider->owner_name}}
                                        </td>
                                        <td style="

 font-family: AvenirLTStd-Book;
    font-size:  20px;
    letter-spacing: 0.02em;
    color: #000000;
"> {{$myprovider->address}}
                                        </td>

                                        <td style="

 font-family: AvenirLTStd-Book;
    font-size:  20px;
    letter-spacing: 0.02em;
    color: #000000;
">
                                            <a href="/admin/edit-provider/{{$myprovider->id}}">
                                                <i class="fa fa-pencil" style="color: #7952B3 !important;"></i>

                                            </a>
                                            <a href="/admin/delete-provider/{{$myprovider->id}}" data-target="#static2"
                                               data-toggle="modal" style="margin-left: 10px">
                                                <i class="fa fa-trash" style="color: #7952B3 !important;"></i>

                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div id="static2" class="modal fade"
                                 tabindex="-1" data-backdrop="static"
                                 data-keyboard="false" data-attention-animation="false"
                                 style="background: rgb(255, 255, 255);border-radius: 10px !important;display: block;margin-top: -82.5px;height: 185px;width: 480px;">
                                <div class="modal-body">
                                    <p style="
                                                font-family: AvenirLTStd-Book;
                                                font-weight: bold;
                                                font-size: 18px;
                                                line-height: 24px;
                                                text-align: center;
                                                letter-spacing: -0.011em;
                                                color: #333333;
                                                "> Are you sure about delete this Cowork provider ? </p>
                                </div>
                                <div class="modal-footer padding-right-120 " style="border-top:0px;">
                                    <button type="button"
                                            data-dismiss="modal"
                                            class="btn btn-outline dark cansel"
                                            style="
                                                               width: 125px;
                                                               height: 32.2px;

                                                               align-items: center;
                                                               padding: 0;
                                                               border-radius: 8px !important;
                                                               font-family: AvenirLTStd-Book;

                                                               font-size: 13px;
                                                               letter-spacing: 1px;
                                        border-radius: 10px !important;
                                        border-color: #7952B3;
                                                               ">
                                        Cancel
                                    </button>
                                    <button type="button" data-dismiss="modal" class="btn green deletee"
                                            style="
                                                               width: 125px;
                                                               height: 32.2px;

                                                               border-color: #7952b3;
                                                               align-items: center;
                                                               padding: 0;
                                                               border-radius: 8px !important;
                                                               background-color: #7952b3;
                                                               font-family: AvenirLTStd-Book;

                                                               color: #FFFFFF;
                                                               font-size: 13px;
                                                               letter-spacing: 1px;
                                                               ">
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


