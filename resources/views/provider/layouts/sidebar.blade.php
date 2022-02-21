<style>
    i:hover {
        color: #FECA2F !important;
    }

    /*a:hover {*/
    /*    color: #FECA2F !important;*/
    /*}*/
</style>
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse" style="
    min-height: 1024px;
    margin-left: -20px;
    margin-top: -20px;
    width: 250px;
    height: 946px !important;
    background: #7952B3;
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
            <li class="nav-item @if(preg_match('/home/i',url()->current())) start active open @endif">
                <a href="/provider/home" class="nav-link nav-toggle" style="
font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    text-transform: capitalize;
    margin-left: 7px;
    margin-bottom: 18px;

">
                    <i class="icon-home"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="nav-item @if(preg_match('/cowork-provider/i',url()->current())) start active open @endif">
                <a href="/provider/cowork-provider" class="nav-link nav-toggle" style="
font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    text-transform: capitalize;
    margin-left: 7px;
    margin-bottom: 18px;

">
                    <i class="icon-user"></i>
                    <span class="title">Cowork provider</span>
                </a>

            </li>
            <li class="nav-item @if(preg_match('/add-workspace/i',url()->current())) start active open @endif">
                <a href="/provider/add-workspace" class="nav-link nav-toggle" style="
font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    text-transform: capitalize;
    margin-left: 7px;
    margin-bottom: 18px;

">
                    <i class="icon-bulb"></i>
                    <span class="title">Work space</span>
                </a>
            </li>
            <li class="nav-item @if(preg_match('/worker/i',url()->current())) start active open @endif">
                <a href="/provider/worker" class="nav-link nav-toggle" style="
font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    text-transform: capitalize;
    margin-left: 7px;
    margin-bottom: 18px;

">
                    <i class="icon-docs"></i>
                    <span class="title">Workers</span>
                </a>
            </li>
            <li class="nav-item @if(preg_match('/policies/i',url()->current())) start active open @endif">
                <a href="/provider/policies" class="nav-link nav-toggle" style="
 font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    text-transform: capitalize;
    margin-left: 7px;
    margin-bottom: 18px;

">
                    <i class="icon-docs"></i>
                    <span class="title">Policies</span>
                </a>
            </li>
            <li class="nav-item @if(preg_match('/system/i',url()->current())) start active open @endif">
                <a href="/provider/system" class="nav-link nav-toggle" style="
font-family: AvenirLTStd-Book;
    font-weight: normal;
    font-size: 18px;
    line-height: 27px;
    text-transform: capitalize;
    margin-left: 7px;
    margin-bottom: 18px;

">
                    <i class="icon-settings"></i>
                    <span class="title">System</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
