<style>
    @media only screen and (max-width: 600px){
        .login{
            margin-left: 0px !important;
        }}
    .navbar .navbar-nav .nav-link {
        color: white;
        font-weight: 800;
        text-decoration: none;
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
                        <a class="nav-link p-2 p-lg-3 active " aria-current="page"
                           href="{{ route('workerHome') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="{{ route('workerProviders') }}"><u>Workspace</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3  " href="{{ route('workerContactus') }}">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="{{ route('workerAboutus') }}">About us</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3 login" href="{{ route('workerLogin') }}" style="margin-left: 200px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary1 main-btn1 " id="R" href="{{ route('workerSignup') }}" style="padding-top: 7px;    font-weight: 800;">Sign up</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link p-2 p-lg-3 btn dropdown-toggle" type="button" id="dropdownMenu2"
                               data-mdb-toggle="dropdown" aria-expanded="false" style="margin-left:180px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                     style="margin-right:10px" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd"
                                          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                Dalia marouf
                                <ul class="dropdown-menu">
                                    <li>
                                        <button class="dropdown-item" type="button">Profile seeting</button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item" type="button">log out</button>
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
