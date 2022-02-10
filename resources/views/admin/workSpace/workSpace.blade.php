@extends('admin.layouts.index')

@section('content')
    <style>

        .btn:hover {
            background-color: #8B62C9 !important;
        }
        .btn-circle:hover {
            background-color:  #7952B32B !important;
            border-color:  #7952B32B !important;
        }
        .span:hover {
            background-color:  #8B62C9 !important;
            border-color:  #8B62C9 !important;
        }
        .cansel:hover {
            background-color:  #C4C4C436 !important;
        }
        .delete:hover {
            background-color:  #8B62C9 !important;
        }

    </style>
    <div class="page-head" style="margin-bottom: 25px;">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="font-family: Poppins-Semibold;font-style: normal;font-weight: 400;font-size: 40px;
                    letter-spacing: -0.022em;color: #333333;margin-left: 27px;">work Space</h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar">
            <button type="button" class="demo-loading-btn btn btn-primary" style="border-color: #7952B3;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 14px;line-height: 21px;
                    margin-top: 13px;color: #FFFFFF;width: 201px;height: 35px;left: 1192px;top: 117px;background: #7952B3;border-radius: 5px !important;">
                Add work Space
            </button>

            <!-- END PAGE TOOLBAR -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN BORDERED TABLE PORTLET-->
                <div class="portlet light portlet-fit bordered"
                     style="background-color: #E5E5E5;border-color: #E5E5E5 !important;">
                    <div class="portlet-title" style="border-color: #E5E5E5;">
                        <div class="actions">
                            <div class="btn-group open">
                                <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;"
                                   style="background-color: #FFFFFF;border-color: #FFFFFF;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 14px;line-height: 21px;color: #292D32;width: 118px;height: 35px;"
                                   data-toggle="dropdown" data-hover="dropdown" data-close-others="true"
                                   aria-expanded="true"> Filter By
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                    <div class="span"
                                        style="margin-bottom: 5px;padding: 10px;color: #fff;left: 1258px;top: 299px;background: #7952B3;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 15px;line-height: 15px;">
                                        <span style="margin-left: 35px;">From A to Z</span>
                                    </div>
                                    <div class="span"
                                        style="margin-bottom: 5px;padding: 10px;color: #fff;left: 1258px;top: 299px;background: #7952B3;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 15px;line-height: 15px;">
                                        <span style="margin-left: 35px;">From Z to A</span>
                                    </div>
                                    <div class="span"
                                        style="margin-bottom: 5px;padding: 10px;color: #fff;left: 1258px;top: 299px;background: #7952B3;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 15px;line-height: 15px;">
                                        <span style="margin-left: 35px;">The latest</span>
                                    </div>
                                    <div class="span"
                                        style="margin-bottom: 5px;padding: 10px;color: #fff;left: 1258px;top: 299px;background: #7952B3;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 15px;line-height: 15px;">
                                        <span style="margin-left: 35px;">The oldest</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portlet-body">
                        <div class="table-scrollable table-scrollable-borderless">
                            <table class="table  table-light" style="background-color: #E5E5E5;">
                                <thead>
                                <tr class="uppercase">
                                    <th style="
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 23px;
    letter-spacing: -0.022em;
    text-transform: capitalize;
    background: -webkit-linear-gradient(#7952B3, #FFBF00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
"> ID</th>
                                    <th style="
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 23px;
    letter-spacing: -0.022em;
    text-transform: capitalize;
    background: -webkit-linear-gradient(#7952B3, #FFBF00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
"> Logo</th>
                                    <th style="
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 23px;
    letter-spacing: -0.022em;
    text-transform: capitalize;
    background: -webkit-linear-gradient(#7952B3, #FFBF00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
"> Name</th>
                                    <th style="
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 23px;
    letter-spacing: -0.022em;
    text-transform: capitalize;
    background: -webkit-linear-gradient(#7952B3, #FFBF00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
"> owner name</th>
                                    <th style="
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 23px;
    letter-spacing: -0.022em;
    text-transform: capitalize;
    background: -webkit-linear-gradient(#7952B3, #FFBF00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
"> Address</th>
                                    <th style="
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 23px;
    letter-spacing: -0.022em;
    text-transform: capitalize;
    background: -webkit-linear-gradient(#7952B3, #FFBF00);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
"> Action</th>
                                </tr>
                                </thead>
                                <tbody style="
    width: 59px;
    height: 53px;
    left: 542px;
    top: 369px;
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 23px;
    line-height: 80px;
    letter-spacing: 0.02em;
    text-transform: capitalize;
    color: #000000;
">
                                <tr>
                                    <td> 1</td>
                                    <td></td>
                                    <td> Mark</td>
                                    <td> Otto</td>
                                    <td> makr124</td>
                                    <td><a class="btn btn-outline dark"
                                           data-target="#static2" data-toggle="modal">
                                            delet
                                        </a>
                                        <a class="btn btn-outline dark"
                                           data-target="#static2" data-toggle="modal">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2</td>
                                    <td></td>
                                    <td> Jacob</td>
                                    <td> Nilson</td>
                                    <td> jac123</td>
                                    <td><a class="btn btn-outline dark"
                                           data-target="#static2" data-toggle="modal">
                                            delet
                                        </a>
                                        <a class="btn btn-outline dark"
                                           data-target="#static2" data-toggle="modal">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 3</td>
                                    <td></td>
                                    <td> Larry</td>
                                    <td> Cooper</td>
                                    <td> lar</td>
                                    <td><a class="btn btn-outline dark"
                                           data-target="#static2" data-toggle="modal">
                                            delet
                                        </a>
                                        <a class="btn btn-outline dark"
                                           data-target="#static2" data-toggle="modal">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 4</td>
                                    <td></td>
                                    <td> Sandy</td>
                                    <td> Lim</td>
                                    <td> sanlim</td>
                                    <td><a class="btn btn-outline dark"
                                           data-target="#static2" data-toggle="modal">
                                            delet
                                        </a>
                                        <a class="btn btn-outline dark"
                                           data-target="#static2" data-toggle="modal">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div id="static2" class="modal fade"
                                 tabindex="-1" data-backdrop="static"
                                 data-keyboard="false" data-attention-animation="false"
                                 style="background: #FFFFFF;border-radius: 10px !important;">
                                <div class="modal-body">
                                    <p style="
                                                margin-bottom: 1px;
                                                font-family: Poppins;
                                                font-style: normal;
                                                font-weight: bold;
                                                font-size: 22px;
                                                line-height: 24px;
/* or 109% */
                                                text-align: center;
                                                letter-spacing: -0.011em;
                                                color: #333333;
                                                opacity: 0.5;
                                                ">Are you sure about delete this workspace ?</p>
                                </div>
                                <div class="modal-footer" style="border-top:0px;">
                                    <button type="button"
                                            data-dismiss="modal"
                                            class="btn btn-outline dark cansel"
                                            style="
                                        background: #FFFFFF;
                                        border-radius: 10px !important;
                                        margin-right: 244px;
                                        border-color: #7952B3;
                                        margin-top: 10px;
                                        width: 185px;
                                        height: 56px;
                                        left: 535px;
                                        top: 563px;
                                        font-family: Poppins;
                                        font-style: normal;
                                        font-weight: normal;
                                        font-size: 18px;
                                        line-height: 27px;
                                        color: #333333;
                                        ">
                                        Cancel
                                    </button>
                                    <button type="button" data-dismiss="modal" class="btn green delete"
                                            style="
                                        border-radius: 10px !important;
                                        margin-right: 45px;
                                        border-color: #7952B3;
                                        width: 185px;
                                        height: 56px;
                                        left: 732px;
                                        top: 563px;
                                         margin-top: -76px;
                                        background: #7952B3;
                                        font-family: Poppins;
                                        font-style: normal;
                                        font-weight: normal;
                                        font-size: 18px;
                                        line-height: 27px;
                                        color: #FFFFFF;
                                        ">
                                        Delete
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


