<style>
    i:hover {
        color: #FECA2F !important;
    }

    .select_color i {
        color: #FECA2F !important;
    }

    i {
        color: whitesmoke !important;
    }

</style>
<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse margin-left--20 margin-top--20 " style="
    /*min-height: 1024px;*/
    /*margin-left: -20px;*/
    /*margin-top: -20px;*/
    /*width: 250px;*/
    height: 946px !important;
    background: #7952B3;
    ">
        <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active open">
            @can('permission_access')
                <li class="nav-item @if(preg_match('/home/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('admin/home')}}" class="nav-link nav-toggle margin-left-10" style="
   font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-home"></i>
                        <span class="title"> Home</span>
                    </a>
                </li>
            @endcan
            @can('provider_show')
                <li class="nav-item @if(preg_match('/provider/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/provider')}}" class="nav-link nav-toggle margin-left-10" style="
   font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    /*text-transform: capitalize;*/
    /*margin-left: 7px;*/
    /*margin-bottom: 18px;*/

">
                        <i class="fa fa-user"></i>
                        <span class="title">Cowork provider</span>
                    </a>

                </li>
            @endcan

            @can('workspace_show')
                <li class="nav-item @if(preg_match('/workspace/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/workspace')}}" class="nav-link nav-toggle margin-left-10" style="
    font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
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
   font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
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

            @can('role_show')
                <li class="nav-item @if(preg_match('/role/i',url()->current())) start active open select_color @endif">
                    <a href="{{url('/admin/role')}}" class="nav-link nav-toggle margin-left-10" style="
   font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
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
            {{--            <li class="nav-item @if(preg_match('/system/i',url()->current())) start active open @endif">--}}
            {{--                <a href="javascript:;" class="nav-link nav-toggle margin-left-10" style="--}}
            {{--  font-family: AvenirLTStd-Book;--}}
            {{--    font-weight: normal;--}}
            {{--    font-size: 18px;--}}
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
