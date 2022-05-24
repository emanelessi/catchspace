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
                        <a class="nav-link p-2 p-lg-3" href="{{ route('workerWorkspace') }}"><u>Workspace</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3  " href="{{ route('workerContactus') }}">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="{{ route('workerAboutus') }}">About us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3 login" href="{{ route('workerLogin') }}" style="margin-left: 200px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary1 main-btn1 " id="R" href="{{ route('workerSignup') }}" style="padding-top: 7px;    font-weight: 800;">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
