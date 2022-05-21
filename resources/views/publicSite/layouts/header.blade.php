<div class="hero-container" data-aos="fade-up">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a href="{{ route('workerHome') }}">

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
                <img src="{{asset('../img/catxhspaceLogo.png ')}}" alt=""/>
            </a>
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
                        <a class="nav-link p-2 p-lg-3" href="{{ route('workerLogin') }}" style="margin-left: 200px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary1 main-btn1 " id="R" href="{{ route('workerSignup') }}">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
