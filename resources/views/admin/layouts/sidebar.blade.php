<style>
    i:hover {
        /*color: #FECA2F !important;*/
        color: #ffffff !important;
    }

    .select_color i {
        /*color: #FECA2F !important;*/
        color: #ffffff !important;
    }

    i {
        color: whitesmoke !important;
    }

</style>
@can('permission_access')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse margin-left--20 margin-top--20 " style="
    /*min-height: 1024px;*/
    /*margin-left: -20px;*/
    /*margin-top: -20px;*/
    /*width: 250px;*/
    height: 946px !important;
    /*background: #9162B3;*/
    background: #2B292C;
    ">
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active open">
            @can('permission_access')
                <li class="nav-item @if(preg_match('/home/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('admin/home')}}" class="nav-link nav-toggle margin-left-10" style="
   /*font-family: 'Montserrat', sans-serif;;*/
   font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/
    color: #ffffff;

">
                        <i class="fa fa-home"></i>
                        <span class="title"> Home</span>
                    </a>
                </li>
            @endcan
            @can('user_show')
                <li class="nav-item @if(preg_match('/user/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/user')}}" class="nav-link nav-toggle margin-left-10" style="
   /*font-family: 'Montserrat', sans-serif;;*/
   font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-user"></i>
                        <span class="title">Users</span>
                    </a>
                </li>
            @endcan
            @can('role_access')
                <li class="nav-item @if(preg_match('/role/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/role')}}" class="nav-link nav-toggle margin-left-10" style="
   /*font-family: 'Montserrat', sans-serif;;*/
   font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-institution"></i>
                        <span class="title">Roles</span>
                    </a>
                </li>
            @endcan

            @can('provider_access')
                <li class="nav-item @if(preg_match('/provider/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/provider/home')}}" class="nav-link nav-toggle margin-left-10" style="
   /*font-family: 'Montserrat', sans-serif;;*/
   font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-home"></i>
                        <span class="title">Home</span>
                    </a>

                </li>
            @endcan
{{--            @can('provider_access')--}}
                <li class="nav-item @if(preg_match('/provider/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/provider')}}" class="nav-link nav-toggle margin-left-10" style="
   /*font-family: 'Montserrat', sans-serif;;*/
   font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-user"></i>
                        <span class="title">Cowork provider</span>
                    </a>

                </li>
{{--            @endcan--}}


            @can('workspace_access')
                <li class="nav-item @if(preg_match('/workspace/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/workspace')}}" class="nav-link nav-toggle margin-left-10" style="
    /*font-family: 'Montserrat', sans-serif;;*/
    font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-map-marker"></i>
                        <span class="title">Work space</span>
                    </a>
                </li>
            @endcan

            @can('worker_show')
                <li class="nav-item @if(preg_match('/worker/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/worker')}}" class="nav-link nav-toggle margin-left-10" style="
   /*font-family: 'Montserrat', sans-serif;;*/
   font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-file-text"></i>
                        <span class="title">Workers</span>
                    </a>
                </li>
            @endcan

            @can('rate_access')
                <li class="nav-item @if(preg_match('/rate/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/rate')}}" class="nav-link nav-toggle margin-left-10" style="
   /*font-family: 'Montserrat', sans-serif;;*/
   font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-star"></i>
                        <span class="title">Rating</span>
                    </a>
                </li>
            @endcan



            {{--            <li class="nav-item @if(preg_match('/system/i',url()->current())) start active open @endif">--}}
            {{--                <a href="javascript:;" class="nav-link nav-toggle margin-left-10" style="--}}
            {{--  font-family: 'Montserrat', sans-serif;;--}}
            {{--    font-weight: normal;--}}
            {{--    font-size: 14px;--}}
            {{--    line-height: 27px;--}}
            {{--    /*text-transform: capitalize;*/--}}
            {{--    /*margin-left: 7px;*/--}}
            {{--    /*margin-bottom: 18px;*/--}}

            {{--">--}}
            {{--                    <i class="fa fa-server"></i>--}}
            {{--                    <span class="title">System</span>--}}
            {{--                </a>--}}
            {{--            </li>--}}
        </ul>
    </div>
</div>
@endcan
@can('provider_access')
<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse" style="
    min-height: 1024px;
    margin-left: -20px;
    margin-top: -20px;
    width: 250px;
    height: 946px !important;
background: #2B292C;
">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active open">
            <li class="nav-item @if(preg_match('/home/i',url()->current())) start active open @endif" style="
    padding-bottom: 5px;
">
                <a href="/provider/home" class="nav-link nav-toggle margin-left-10" style="
   font-family: 'Montserrat', sans-serif;;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                    <i class="fa fa-home"></i>
                    <span class="title" style="font-size: 14px">Home</span>
                </a>
            </li>

            <li class="nav-item @if(preg_match('/workspace/i',url()->current())) start active open @endif" style="
    padding-bottom: 5px;
">
                <a href="/provider/workspace" class="nav-link nav-toggle margin-left-10" style="
   font-family: 'Montserrat', sans-serif;;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                    <i class="fa fa-map-marker"></i>
                    <span class="title" style="font-size: 14px">Work space</span>
                </a>
            </li>
            <li class="nav-item @if(preg_match('/worker/i',url()->current())) start active open @endif" style="
    padding-bottom: 5px;
">
                <a href="/provider/worker" class="nav-link nav-toggle margin-left-10" style="
   font-family: 'Montserrat', sans-serif;;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                    <i class="fa fa-file-text"></i>
                    <span class="title" style="font-size: 14px">Workers</span>
                </a>
            </li>
            <li class="nav-item @if(preg_match('/policies/i',url()->current())) start active open @endif" style="
    padding-bottom: 5px;
">
                <a href="/provider/policies" class="nav-link nav-toggle margin-left-10" style="
   font-family: 'Montserrat', sans-serif;;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                    <i class="fa fa-institution"></i>
                    <span class="title" style="font-size: 14px">Policies</span>
                </a>
            </li>
            @can('rate_show')
                <li class="nav-item @if(preg_match('/rate/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/provider/rate')}}" class="nav-link nav-toggle margin-left-10" style="
   /*font-family: 'Montserrat', sans-serif;;*/
   font-family: 'Montserrat', sans-serif;
    font-weight: normal;
    font-size: 14px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-star"></i>
                        <span class="title">Rating</span>
                    </a>
                </li>
            @endcan
{{--            <li class="nav-item @if(preg_match('/edit-profile/i',url()->current())) start active open @endif" style="--}}
{{--    padding-bottom: 5px;--}}
{{--">--}}
{{--                <a href="/provider/edit-profile" class="nav-link nav-toggle margin-left-10" style="--}}
{{--   font-family: 'Montserrat', sans-serif;;--}}
{{--    font-weight: normal;--}}
{{--    font-size: 14px;--}}
{{--    line-height: 27px;--}}
{{--    /*text-transform: capitalize;*/--}}
{{--    /*margin-left: 7px;*/--}}
{{--    /*margin-bottom: 18px;*/--}}

{{--">--}}
{{--                    <i class="fa fa-user"></i>--}}
{{--                    <span class="title" style="font-size: 14px">System</span>--}}
{{--                </a>--}}
{{--            </li>--}}
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>

</div>

@endcan
