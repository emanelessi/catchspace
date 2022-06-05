<style>

    .menu-toggler:hover {
        /*color: #8D8282 !important;*/
        color: #ffffff !important;
    }

    .icon-bell:hover {
        color: #343A40 !important;
    }

</style>
<div class="page-header navbar navbar-fixed-top" style="
/*background-color: #ffffff;*/
background-color: #2B292C;border-bottom-color: #2B292C;
">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{url('/')}}" class="margin-top-6">
                <img src="{{asset('../assets/pages/img/login/catchspace-logo.png')}}" alt="logo"
                     class="logo-default margin-top-10"
                     style="
    height: 40px;
"/> </a>
            <div class="menu-toggler sidebar-toggler" style="
    color: #ffffff !important;
">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN PAGE TOP -->
        <div class="page-top" style="
        /*background-color: #ffffff*/
        height: 74px !important;
        background-color: #2B292C;
">
            <!-- BEGIN HEADER SEARCH BOX -->
            <form class="search-form" action="page_general_search_2.html" method="GET"
                  style="
                  /*background-color: #ffffff;*/
                  background-color: #2B292C;
">
                <div class="input-group" style="
                /*background-color: #ffffff;*/
                background-color: #2B292C;
                border: 0px;
">
                    <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                    <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit margin-top-9">
                                    <i class="icon-magnifier" style="color: #ffffff !important "></i>
                                </a>
                            </span>
                </div>
            </form>
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu margin-top-2">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"></li>
                    <li class="dropdown dropdown-user" style="
    margin-top: 9px;
">
                        <a href="javascript:;" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true" style="
                           /*background-color: #ffffff;*/
                           color:#ffffff;
                           background-color: #2B292C;
                              font-family: 'Montserrat', sans-serif;

"
                           class="m-grid-col-lg-12 m-grid-col-md-12 m-grid-col-xs-12 no-space ">
                            <span class="username username-hide-on-mobile"> {{auth()->user()->full_name}} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            @can('provider_access')
                                <img alt="" class="img-circle" src="{{'/storage/'.auth()->user()->provider->logo}} " style="width: 40px;height: 40px;"/>
                            @endcan
                            @can('permission_access')
                            <i class="fa fa-user img-circle" style="font-size: 20px;color:#ffffff!important;"></i>
                            @endcan
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default" style="margin-top: -45px;">
                            @can('permission_access')
                            <li>
                                <a href="{{ route('adminProfile') }}" style="                                       font-family: 'Montserrat', sans-serif;
">
                                    <i class="icon-user" style="
                                    /*color: #9162B3 !important;*/
                                    color: #E93A76 !important;

"></i>  Profile </a>
                            </li>
                            @endcan
                                @can('provider_access')
                            <li>
                                <a href="{{ route('providerProfile') }}" style="                                       font-family: 'Montserrat', sans-serif;
">
                                    <i class="icon-user" style="
                                    color: #E93A76 !important;

"></i>  Profile </a>
                            </li>
                            @endcan

                            <li class="divider"></li>
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('logout') }}" style="                                       font-family: 'Montserrat', sans-serif;
"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-key"  style="
                                    /*color: #9162B3 !important;*/
                                    color: #E93A76 !important;

"></i> Log Out
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

