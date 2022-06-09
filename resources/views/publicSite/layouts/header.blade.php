<style>
    @media only screen and (max-width: 600px){
        .login{
            margin-left: 0px !important;
        }
        .my-dropdown{
            margin-left:0px !important;
        }
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            margin-left: 0px !important;
        }
    }
    .navbar .navbar-nav .nav-link {
        color: white;
        font-weight: 800;
        text-decoration: none;
    }
    .navbar-nav .open .dropdown-menu > li > a {
        background-color: white;
        font-weight: 600;
        margin-top: 10px;
    }
    .my-dropdown{
        margin-left:180px;
    }
    .navbar-expand-lg .navbar-nav .dropdown-menu {
        margin-left: 180px;
    }
</style>
<div class="hero-container" data-aos="fade-up">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a href="{{ route('workerHome') }}">


                <img src="{{asset('../img/catxhspaceLogo.png ')}}" alt=""/>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#main"
                aria-controls="main"
                aria-expanded="false"
                aria-label="Toggle navigation"

            >
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="main">
                <ul class="navbar-nav  align-items-center" style="margin-left: 200px;">
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3 @if(preg_match('//i',url()->current()))active @endif" aria-current="page"
                           href="{{ route('workerHome') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3 @if(preg_match('/providers/i',url()->current()))active @endif" href="{{ route('workerProviders') }}"><u>Workspace</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3  @if(preg_match('/contact-us/i',url()->current()))active @endif" href="{{ route('workerContactus') }}">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3 @if(preg_match('/about-us/i',url()->current()))active @endif" href="{{ route('workerAboutUs') }}">About us</a>
                    </li>
                    @if ($auth_worker = \Illuminate\Support\Facades\Session::get('worker'))
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link p-2 p-lg-3 btn dropdown-toggle my-dropdown" type="button" id="dropdownMenu"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                    <img alt="" class="img-circle" src="{{'/storage/'.$auth_worker->avatar}} " style="width: 40px;height: 40px;"/>

                                    {{$auth_worker->name}}

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li>

                                        <a class="dropdown-item " href="{{url('/worker/profile/'.$auth_worker->id )}}" type="button">
                                            <i class="fa fa-user" style="
                                    color: #9162B3 !important;

"></i>
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item 1" href="{{url('/worker/logout')}}" type="button">
                                            <i class="fa fa-key"  style="
                                    color: #9162B3 !important;

"></i>

                                            logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3 login" href="{{ route('workerLogin') }}" style="margin-left: 200px;">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary1 main-btn1 " id="R" href="{{ route('workerSignup') }}" style="padding-top: 7px;    font-weight: 800;">Sign up</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>
