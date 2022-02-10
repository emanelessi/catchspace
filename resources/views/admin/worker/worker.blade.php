@extends('admin.layouts.index')

@section('content')
    <style>

        .btn-circle:hover {
            background-color:  #7952B32B !important;
            border-color:  #7952B32B !important;
        }
        .span:hover {
            background-color:  #8B62C9 !important;
            border-color:  #8B62C9 !important;
        }

    </style>
    <div class="page-head" style="margin-bottom: 25px;">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="font-family: Poppins-Semibold;font-style: normal;font-weight: 400;font-size: 40px;
/* or 120% */letter-spacing: -0.022em;color: #333333;margin-left: 27px;">worker</h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN BORDERED TABLE PORTLET-->
                <div class="portlet light portlet-fit bordered" style="background-color: #E5E5E5;border-color: #E5E5E5 !important;">
                    <div class="portlet-title" style="border-color: #E5E5E5;">
                        <div class="actions" style="
    margin-top: -65px;
">
                            <div class="btn-group open">
                                <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;"
                                   style="background-color: #FFFFFF;border-color: #FFFFFF;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 14px;line-height: 21px;color: #292D32;width: 118px;height: 35px;"
                                   data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> Filter By
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                    <div class="span" style="margin-bottom: 5px;padding: 10px;color: #fff;left: 1258px;top: 299px;background: #7952B3;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 15px;line-height: 15px;">
                                        <span style="margin-left: 35px;">From A to Z</span>
                                    </div>
                                    <div class="span" style="margin-bottom: 5px;padding: 10px;color: #fff;left: 1258px;top: 299px;background: #7952B3;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 15px;line-height: 15px;">
                                        <span style="margin-left: 35px;">From Z to A</span>
                                    </div>
                                    <div class="span" style="margin-bottom: 5px;padding: 10px;color: #fff;left: 1258px;top: 299px;background: #7952B3;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 15px;line-height: 15px;">
                                        <span style="margin-left: 35px;">The latest</span>
                                    </div>
                                    <div class="span" style="margin-bottom: 5px;padding: 10px;color: #fff;left: 1258px;top: 299px;background: #7952B3;border-radius: 5px !important;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 15px;line-height: 15px;">
                                        <span style="margin-left: 35px;">The oldest</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portlet-body">
                        <div class="table-scrollable table-scrollable-borderless">
                            <table class="table table-light" style="background-color: #E5E5E5;">
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
"> ID </th>
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
"> Work space Name </th>
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
"> Name </th>
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
"> Job title </th>
                                </tr>
                                </thead >
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
                                    <td> 1 </td>
                                    <td> Mark </td>
                                    <td> Otto </td>
                                    <td> makr124 </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Jacob </td>
                                    <td> Nilson </td>
                                    <td> jac123 </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> Larry </td>
                                    <td> Cooper </td>
                                    <td> lar </td>
                                </tr>
                                <tr>
                                    <td> 4 </td>
                                    <td> Sandy </td>
                                    <td> Lim </td>
                                    <td> sanlim </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END BORDERED TABLE PORTLET-->
            </div>
        </div>
@endsection


