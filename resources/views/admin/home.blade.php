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
            margin-left: 8px;
            left: 162px;
            top: 109px;
font-family: Poppins-Semibold;            font-style: normal;
            font-weight: normal;
            font-size: 30px;
            line-height: 48px;
/* or 120% */
            letter-spacing: -0.022em;
            color: #333333;
            ">Admin Dashboard</h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar" style="
    width: 288.18px;
    height: 56.53px;
    left: 1127px;
    top: 108.18px;
    background: #FFFFFF;
    border-radius: 10px !important;
">
            <div id="dashboard-report-range" data-display-range="0"
                 class="pull-right tooltips btn btn-fit-height green"
                 data-placement="left" data-original-title="Change dashboard date range"
                 style="background-color: #FFFFFF;border-color: #FFFFFF;
                 border-radius: 10px !important;font-family: Poppins-Semibold;font-style: normal;
                 font-weight: normal;font-size: 18px;line-height: 27px;
                 color: #000000;margin-top: 7px;margin-right: 25px;">
                <i class="icon-calendar" style="margin-right: 15px;color: black !important;"></i>&nbsp;
                <span class="thin uppercase hidden-xs" style="margin-right: 20px;">20, Jan 2021</span>&nbsp;
                <i class="fa fa-angle-down" style="color: black !important;"></i>
            </div>

        </div>
        <!-- END PAGE TOOLBAR -->
    </div>
<div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 blue" href="#"
               style="border-radius: 20px !important;height: 112.32px;left: 277px;top: 208px;background: linear-gradient(90deg, #7952B3 26.4%, #A1737F 49.57%, #AE7E6E 57.11%, #B48367 77.05%, #FFC107 103.45%);">
                <div class="visual">
                    <i class="fa fa-user" style="color: white !important;opacity: 1 !important;padding-left: 44px;"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="36">0</span>
                    </div>
                    <div class="desc"> Co-working provider</div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 red" href="#"
               style="border-radius: 20px !important;height: 112.32px;left: 686px;top: 208px;background: linear-gradient(90deg, rgba(235, 194, 71, 0.9) -0.02%, #FFC107 22.34%, rgba(243, 194, 46, 0.795918) 64.56%, #7952B3 95.36%);">
                <div class="visual">
                    <i class="fa fa-map-marker" style="color: white !important;opacity: 1 !important;padding-left: 44px;"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="40">0</span>
                    </div>
                    <div class="desc"> Work space</div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <a class="dashboard-stat dashboard-stat-v2 green" href="#"
               style="border-radius: 20px !important;height: 112.32px;left: 1068px;top: 208px;background: linear-gradient(90deg, #7952B3 29.67%, rgba(132, 99, 181, 0.854962) 50.51%, #FFC107 100%);">
                <div class="visual">
                    <i class="fa fa-sticky-note" style="color: white !important;opacity: 1 !important;padding-left: 44px;"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="70">0</span>
                    </div>
                    <div class="desc"> Workers</div>
                </div>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- END DASHBOARD STATS 1-->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12">
            <div class="portlet light bordered" style="left: 277px;top: 697px;background: #FFFFFF;border-radius: 20px !important;">
                <div class=" tabbable-line">
                    <div class="caption">
                        <i class=" icon-social-twitter font-dark hide"></i>
                        <span class="caption-subject font-dark bold " style="
    width: 107px;
    height: 19px;
    left: 0px;
    top: 0px;
    font-family: Poppins;
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
                        <div class="tab-pane active" id="tab_actions_pending">
                            <!-- BEGIN: Actions -->
                            <div class="mt-actions">
                                <div class="mt-action" style="border-bottom: 0px;">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar10.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-details ">
                                                    <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
">
                                                                <span class="mt-action-author"
                                                                      style="margin-right: 25px;width: 109.1px;height: 28.27px;left: 396.39px;top: 761.46px;font-family: Poppins Medium;font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">Natasha Kim
                                                                </span>
                                                        Dummy text of the printing
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time"style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
    margin-left: 35px;
">9:30pm</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action" style="border-bottom: 0px;">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar3.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-details ">
                                                    <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
">
                                                                <span class="mt-action-author"
                                                                      style="margin-right: 25px;width: 109.1px;height: 28.27px;left: 396.39px;top: 761.46px;font-family: Poppins Medium;font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">Gavin Bond
                                                                </span>
                                                        pending for approval
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time" style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
    margin-left: 35px;
">9:30pm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action" style="border-bottom: 0px;">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar2.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-details ">
                                                    <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
">
                                                                <span class="mt-action-author"
                                                                      style="margin-right: 25px;width: 109.1px;height: 28.27px;left: 396.39px;top: 761.46px;font-family: Poppins Medium;font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">Diana Berri
                                                                </span>
                                                        Lorem Ipsum is simply dummy text
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time" style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
    margin-left: 35px;
">9:30pm</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action" style="border-bottom: 0px;">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar7.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">
                                                <div class="mt-action-details ">
                                                    <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
">
                                                        <span class="mt-action-author"  style="margin-right: 25px;width: 109.1px;height: 28.27px;left: 396.39px;top: 761.46px;font-family: Poppins Medium;font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">John Clark</span>Text
                                                        of the printing and typesetting </p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time" style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
    margin-left: 35px;
">9:30pm</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action" style="border-bottom: 0px;">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">

                                                <div class="mt-action-details ">

                                                    <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
"><span class="mt-action-author" style="margin-right: 25px;width: 109.1px;height: 28.27px;left: 396.39px;top: 761.46px;font-family: Poppins Medium;font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">Donna Clarkson </span>Simply
                                                        dummy text of the printing</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time" style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
    margin-left: 35px;
">9:30pm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action" style="border-bottom: 0px;">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar9.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">

                                                <div class="mt-action-details ">

                                                    <p class="mt-action-desc" style="
    width: 511.39px;
    height: 54.41px;
    left: 524.14px;
    top: 761.13px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    color: #7C7C7C;
"><span class="mt-action-author" style="margin-right: 25px;width: 109.1px;height: 28.27px;left: 396.39px;top: 761.46px;font-family: Poppins Medium;font-style: normal;font-weight: 500;font-size: 18px;line-height: 27px;color: #000000;">Tom Larson</span>Lorem
                                                        Ipsum is simply dummy text</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time" style="
    width: 75.41px;
    height: 28.37px;
    left: 1258.46px;
    top: 761.73px;
    font-family: Poppins;
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
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
                        <div class="tab-pane" id="tab_actions_completed">
                            <!-- BEGIN:Completed-->
                            <div class="mt-actions">
                                <div class="mt-action" >
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar1.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">

                                                <div class="mt-action-details ">

                                                    <p class="mt-action-desc"><span class="mt-action-author" style="margin-right: 25px;">Frank Cameron</span>Lorem
                                                        Ipsum is simply dummy</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time">9:30pm</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar8.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">

                                                <div class="mt-action-details ">

                                                    <p class="mt-action-desc"><span class="mt-action-author" style="margin-right: 25px;">Ella Davidson </span>Text
                                                        of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time">9:30pm</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar5.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">

                                                <div class="mt-action-details ">

                                                    <p class="mt-action-desc"><span class="mt-action-author" style="margin-right: 25px;">Jason Dickens </span>Dummy
                                                        text of the printing and typesetting industry</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time">9:30pm</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-action">
                                    <div class="mt-action-img">
                                        <img src="../assets/pages/media/users/avatar2.jpg"/></div>
                                    <div class="mt-action-body">
                                        <div class="mt-action-row">
                                            <div class="mt-action-info ">

                                                <div class="mt-action-details ">

                                                    <p class="mt-action-desc"><span class="mt-action-author" style="margin-right: 25px;">Jan Kim</span>Lorem
                                                        Ipsum is simply dummy</p>
                                                </div>
                                            </div>
                                            <div class="mt-action-buttons ">
                                                <div >
                                                    <button type="button" class="btn Reject" style="display: flex;flex-direction: row;align-items: center;position: absolute;width: 80.15px;height: 42.03px;background: #333333;opacity: 0.5;border-radius: 14px !important;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 16px;line-height: 24px;letter-spacing: 0.4px;color: #FFFFFF;">
                                                        Reject
                                                    </button>
                                                    <button type="button" class="btn Accept" style="display: flex;flex-direction: row;align-items: center;padding: 8px 16px;position: absolute;width: 80px;height: 40px;background: #7952B3;border-radius: 14px !important;margin-left: 100px;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 16px;line-height: 24px;
/* identical to box height */letter-spacing: 0.4px;color: #FFFFFF;


/* Inside auto layout */">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mt-action-datetime ">
                                                <span class="mt=action-time">9:30pm</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- END: Completed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END PAGE BASE CONTENT -->
</div>

@endsection


