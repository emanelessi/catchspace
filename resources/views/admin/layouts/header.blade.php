<style>

    .menu-toggler:hover {
        color: #8D8282 !important;
    }

    .icon-bell:hover {
        color: #343A40 !important;
    }

</style>
<div class="page-header navbar navbar-fixed-top" style="background-color: #ffffff;">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/')}}" class="margin-top-6">
                <img src="{{asset('../assets/pages/img/login/catchblack-logo.png')}}" alt="logo"
                     class="logo-default margin-top-10"
                     style="
    height: 45px;
"/> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN PAGE TOP -->
        <div class="page-top" style="background-color: #ffffff">
            <!-- BEGIN HEADER SEARCH BOX -->
            <form class="search-form" action="page_general_search_2.html" method="GET"
                  style="background-color: #ffffff;">
                <div class="input-group" style="
                background-color: #ffffff;
                border: 0px;
">
                    <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                    <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit margin-top-9">
                                    <i class="icon-magnifier" style="color: #978D8D !important;  "></i>
                                </a>
                            </span>
                </div>
            </form>
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu margin-top-10">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"></li>

                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                    <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                {{--                    <li class="dropdown dropdown-extended dropdown-notification"--}}
                {{--                        id="header_notification_bar">--}}
                {{--                        <a href="javascript:;"  data-toggle="dropdown" data-hover="dropdown"--}}
                {{--                           data-close-others="true" style="--}}
                {{--    /*margin-top: 14px;*/--}}
                {{--    background-color: #ffffff;--}}
                {{--">--}}
                {{--                            <i class="icon-bell"></i>--}}
                {{--                            <span class="badge badge-success"> 7 </span>--}}
                {{--                        </a>--}}
                {{--                        <ul class="dropdown-menu">--}}
                {{--                            <li class="external">--}}
                {{--                                <h3>--}}
                {{--                                    <span class="bold">12 pending</span> notifications</h3>--}}
                {{--                                <a href="page_user_profile_1.html">view all</a>--}}
                {{--                            </li>--}}
                {{--                            <li>--}}
                {{--                                <ul class="dropdown-menu-list scroller" style="--}}
                {{--                                height: 250px;--}}
                {{--"--}}
                {{--                                    data-handle-color="#637283">--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">just now</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-success">--}}
                {{--                                                            <i class="fa fa-plus"></i>--}}
                {{--                                                        </span> New user registered. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">3 mins</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-danger">--}}
                {{--                                                            <i class="fa fa-bolt"></i>--}}
                {{--                                                        </span> Server #12 overloaded. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">10 mins</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-warning">--}}
                {{--                                                            <i class="fa fa-bell-o"></i>--}}
                {{--                                                        </span> Server #2 not responding. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">14 hrs</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-info">--}}
                {{--                                                            <i class="fa fa-bullhorn"></i>--}}
                {{--                                                        </span> Application error. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">2 days</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-danger">--}}
                {{--                                                            <i class="fa fa-bolt"></i>--}}
                {{--                                                        </span> Database overloaded 68%. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">3 days</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-danger">--}}
                {{--                                                            <i class="fa fa-bolt"></i>--}}
                {{--                                                        </span> A user IP blocked. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">4 days</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-warning">--}}
                {{--                                                            <i class="fa fa-bell-o"></i>--}}
                {{--                                                        </span> Storage Server #4 not responding dfdfdfd. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">5 days</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-info">--}}
                {{--                                                            <i class="fa fa-bullhorn"></i>--}}
                {{--                                                        </span> System Error. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                    <li>--}}
                {{--                                        <a href="javascript:;">--}}
                {{--                                            <span class="time">9 days</span>--}}
                {{--                                            <span class="details">--}}
                {{--                                                        <span class="label label-sm label-icon label-danger">--}}
                {{--                                                            <i class="fa fa-bolt"></i>--}}
                {{--                                                        </span> Storage server failed. </span>--}}
                {{--                                        </a>--}}
                {{--                                    </li>--}}
                {{--                                </ul>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
                {{--                    <!-- END NOTIFICATION DROPDOWN -->--}}
                {{--                    <li class="separator hide"></li>--}}
                {{--                    <!-- BEGIN INBOX DROPDOWN -->--}}

                {{--                    <li class="separator hide"></li>--}}

                <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user ">
                        <a href="javascript:;" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true" style="background-color: #ffffff;"
                           class="m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-12 no-space ">
                            <span class="username username-hide-on-mobile"> {{auth()->user()->full_name}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            @can('provider_access')
                                <img alt="" class="img-circle"
                                     src="{{'/storage'.auth()->user()->provider->logo}}"/>
                            @endcan
                            @can('permission_access')
                            <i class="fa fa-user img-circle" style="font-size: 20px;color: #7952B3 !important;"></i>
                            @endcan
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            @can('permission_access')
                            <li>
                                <a href="{{ route('adminprofile') }}">
                                    <i class="icon-user" style="color: #7952B3 !important;"></i>  Profile </a>
                            </li>
                            @endcan
                                @can('provider_access')
                            <li>
                                <a href="{{ route('providerprofile') }}">
                                    <i class="icon-user" style="color: #7952B3 !important;"></i>  Profile </a>
                            </li>
                            @endcan

                            <li class="divider"></li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-key"  style="color: #7952B3 !important;"></i> Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>

