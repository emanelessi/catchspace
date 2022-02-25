@extends('admin.layouts.index')

@section('content')
    <style>
        .Reject:hover {
            background-color: rgba(51, 51, 51, 0.58) !important;
        }

        .Accept:hover {
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
            " class="margin-top--10">Admin Dashboard</h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar" style="
        /*margin-left: 20px;*/
    /*width: 288.18px;*/
    /*height: 56.53px;*/
    /*left: 1127px;*/
    /*top: 108.18px;*/
    /*background: #FFFFFF;*/
    /*border-radius: 10px !important;*/
">
            <div id="dashboard-report-range" data-display-range="0"
                 class="pull-right tooltips btn btn-fit-height green"
                 data-placement="left" data-original-title="Change dashboard date range"
                 style="
                 background-color: #FFFFFF;
                 border-color: #FFFFFF;
                 border-radius: 10px !important;
                 font-family: AvenirLTStd-Book;
                 font-style: normal;
                 font-weight: normal;
                 font-size: 13px;
                 line-height: 27px;
                 color: #000000;
                 height: 30px;
                 padding-top: 1px;
">
                <i class="icon-calendar" style="margin-right: 5px;color: black !important;"></i>&nbsp;
                <span class="thin uppercase hidden-xs" style="margin-right: 15px;">20, Jan 2021</span>&nbsp;
                <i class="fa fa-angle-down" style="color: black !important; font-size: 15px"></i>
            </div>

        </div>
        <!-- END PAGE TOOLBAR -->
    </div>
    <div>
        <div class="row margin-top-35">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat dashboard-stat-v2 blue" href="#"
                     style="border-radius: 15px !important;height: 90px;left: 277px;
                   top: 208px;
                   /*background:linear-gradient(90deg, #7952B3 26.4%, #A1737F 49.57%, #AE7E6E 57.11%, #B48367 77.05%,*/
                    /*#FFC107 103.45%);*/
                    background: #7952B3;
">
                    <div class="visual padding-top-12">
                        <i class="fa fa-user"
                           style="color: white !important;opacity: 1 !important;padding-left: 44px;"></i>
                    </div>
                    <div class="details">
                        <div class="number padding-top-12">
                            <span data-counter="counterup" style="font-family: AvenirLTStd-Book;font-size: 34px;"
                                  data-value="{{$providers->Count() ?? 0}}">{{$providers->Count() ?? 0}}</span>
                        </div>
                        <div class="desc" style="
    font-family: AvenirLTStd-Book;
    font-weight: 500;
    font-size: 16px;
"> Co-working provider
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat dashboard-stat-v2 red" href="#"
                     style="border-radius: 15px !important;height: 90px;left: 277px;
                   top: 208px;
                   /*background:linear-gradient(90deg, #7952B3 26.4%, #A1737F 49.57%, #AE7E6E 57.11%, #B48367 77.05%,*/
                    /*#FFC107 103.45%);*/
                    background: #7952B3;
">
                    <div class="visual">
                        <i class="fa fa-map-marker"
                           style="color: white !important;opacity: 1 !important;padding-left: 44px;"></i>
                    </div>
                    <div class="details">
                        <div class="number padding-top-12">
                            <span data-counter="counterup" style="font-family: AvenirLTStd-Book;font-size: 34px;"
                                  data-value="{{$work_spaces->Count() ?? 0}}">{{$work_spaces->Count() ?? 0}}</span>
                        </div>
                        <div class="desc" style="
    font-family: AvenirLTStd-Book;
    font-weight: 500;
    font-size: 16px;
"> Work space
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat dashboard-stat-v2 green" href="#"
                     style="border-radius: 15px !important;height: 90px;left: 277px;
                   top: 208px;
                   /*background:linear-gradient(90deg, #7952B3 26.4%, #A1737F 49.57%, #AE7E6E 57.11%, #B48367 77.05%,*/
                    /*#FFC107 103.45%);*/
                    background: #7952B3;
">
                    <div class="visual">
                        <i class="fa fa-file-text"
                           style="color: white !important;opacity: 1 !important;padding-left: 44px;font-size: 56px"></i>
                    </div>
                    <div class="details">
                        <div class="number padding-top-12">
                            <span data-counter="counterup" style="font-family: AvenirLTStd-Book;font-size: 34px;"
                                  data-value="{{$workers->Count() ?? 0}}">{{$workers->Count() ?? 0}}</span>
                        </div>
                        <div class="desc" style="
    font-family: AvenirLTStd-Book;
    font-weight: 500;
    font-size: 16px;
"> Workers
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- END DASHBOARD STATS 1-->
        <div class="row">
            <div class="col-lg-12 col-xs-12 col-sm-12">
                <div class="portlet light bordered"
                     style="left: 277px;top: 697px;background: #FFFFFF;border-radius: 20px !important;">
                    <div class=" tabbable-line">
                        <div class="caption" style="height: 321px;">
                            <i class=" icon-social-twitter font-dark hide"></i>
                            <span class="caption-subject font-dark bold " style="
    width: 107px;
    height: 19px;
    left: 0px;
    top: 0px;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: 600 !important;
    font-size: 16px;
    line-height: 120%;
    letter-spacing: -0.4px;
    color: #343A40 !important;
">Quick actions</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12 col-sm-12">
                <div class="portlet light bordered"
                     style="left: 277px;top: 697px;background: #FFFFFF;border-radius: 20px !important;">
                    <div class=" tabbable-line">
                        <div class="caption margin-top-10">
                            <i class=" icon-social-twitter font-dark hide"></i>
                            <span class="caption-subject font-dark bold margin-left-9 " style="
    font-family: AvenirLTStd-Book;
    font-style: normal;
    font-size: 20px;
    letter-spacing: 0.5px;
    color: #343A40 !important;

">Waiting list</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_actions_pending">
                                <!-- BEGIN: Actions -->
                                <div class="mt-actions ">
                                    <div class="mt-action margin-left-9" style="border-bottom: 0px;">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar10.jpg"/></div>
                                        <div class="mt-action-body padding-top-8">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-details ">
                                                        <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
">
                                                                <span class="mt-action-author"
                                                                      style="
                                                                      margin-right: 25px;
                                                                      width: 109.1px;
                                                                      height: 28.27px;
                                                                      left: 396.39px;top: 761.46px;
                                                                      font-family: AvenirLTStd-Book;
font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">Natasha Kim
                                                                </span>
                                                            Dummy text of the printing
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-buttons padding-top-0">
                                                    <div>
                                                        <button type="button" class="btn Reject margin-right-5" style="
                                                    display: inline;
                                                    align-items: center;
                                                    background: #333333;
                                                    opacity: 0.5;
                                                    border-radius: 9px !important;
                                                    font-family: AvenirLTStd-Book;
                                                    font-size: 14px;
                                                    letter-spacing: 0.4px;
                                                    color: #FFFFFF;
                                                    height: 33px;
                                                    width: 80px;
                                                    ">
                                                            Reject
                                                        </button>
                                                        <button type="button" class="btn Accept" style="
                                                    display: inline;
                                                    align-items: center;
    background: #7952B3;
                                                    border-radius: 9px !important;
                                                    font-family: AvenirLTStd-Book;
                                                    font-size: 14px;
                                                    letter-spacing: 0.4px;
                                                    color: #FFFFFF;
                                                    height: 33px;
                                                    width: 80px;
                                                    ">
                                                            Accept
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime padding-top-0">
                                                <span class="mt=action-time" style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 27px;
    color: #7C7C7C;
    margin-left: 35px;
">9:30pm</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action margin-left-9" style="border-bottom: 0px;">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar10.jpg"/></div>
                                        <div class="mt-action-body ">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-details ">
                                                        <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
">
                                                                <span class="mt-action-author"
                                                                      style="
                                                                      margin-right: 25px;
                                                                      width: 109.1px;
                                                                      height: 28.27px;
                                                                      left: 396.39px;top: 761.46px;
                                                                      font-family: AvenirLTStd-Book;
font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">Natasha Kim
                                                                </span>
                                                            Dummy text of the printing
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-buttons padding-top-0">
                                                    <div>
                                                        <button type="button" class="btn Reject margin-right-5" style="
                                                    display: inline;
                                                    align-items: center;
                                                    background: #333333;
                                                    opacity: 0.5;
                                                    border-radius: 9px !important;
                                                    font-family: AvenirLTStd-Book;
                                                    font-size: 14px;
                                                    letter-spacing: 0.4px;
                                                    color: #FFFFFF;
                                                    height: 33px;
                                                    width: 80px;
                                                    ">
                                                            Reject
                                                        </button>
                                                        <button type="button" class="btn Accept" style="
                                                    display: inline;
                                                    align-items: center;
    background: #7952B3;
                                                    border-radius: 9px !important;
                                                    font-family: AvenirLTStd-Book;
                                                    font-size: 14px;
                                                    letter-spacing: 0.4px;
                                                    color: #FFFFFF;
                                                    height: 33px;
                                                    width: 80px;
                                                    ">
                                                            Accept
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime padding-top-0">
                                                <span class="mt=action-time" style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 27px;
    color: #7C7C7C;
    margin-left: 35px;
">9:30pm</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-action margin-left-9" style="border-bottom: 0px;">
                                        <div class="mt-action-img">
                                            <img src="../assets/pages/media/users/avatar10.jpg"/></div>
                                        <div class="mt-action-body ">
                                            <div class="mt-action-row">
                                                <div class="mt-action-info ">
                                                    <div class="mt-action-details ">
                                                        <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
">
                                                                <span class="mt-action-author"
                                                                      style="
                                                                      margin-right: 25px;
                                                                      width: 109.1px;
                                                                      height: 28.27px;
                                                                      left: 396.39px;top: 761.46px;
                                                                      font-family: AvenirLTStd-Book;
font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">Natasha Kim
                                                                </span>
                                                            Dummy text of the printing
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mt-action-buttons padding-top-0">
                                                    <div>
                                                        <button type="button" class="btn Reject margin-right-5" style="
                                                    display: inline;
                                                    align-items: center;
                                                    background: #333333;
                                                    opacity: 0.5;
                                                    border-radius: 9px !important;
                                                    font-family: AvenirLTStd-Book;
                                                    font-size: 14px;
                                                    letter-spacing: 0.4px;
                                                    color: #FFFFFF;
                                                    height: 33px;
                                                    width: 80px;
                                                    ">
                                                            Reject
                                                        </button>
                                                        <button type="button" class="btn Accept" style="
                                                    display: inline;
                                                    align-items: center;
    background: #7952B3;
                                                    border-radius: 9px !important;
                                                    font-family: AvenirLTStd-Book;
                                                    font-size: 14px;
                                                    letter-spacing: 0.4px;
                                                    color: #FFFFFF;
                                                    height: 33px;
                                                    width: 80px;
                                                    ">
                                                            Accept
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="mt-action-datetime padding-top-0">
                                                <span class="mt=action-time" style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
font-family: AvenirLTStd-Book;
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 27px;
    color: #7C7C7C;
    margin-left: 35px;
">9:30pm</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- END: Actions -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- END PAGE BASE CONTENT -->
    </div>

@endsection

