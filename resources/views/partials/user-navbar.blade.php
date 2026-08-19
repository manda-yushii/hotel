<header id="header" class="header fixed-top shadow-sm">

    <div class="topbar py-1">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope me-1 small"></i>
                <a href="mailto:info@surveihotel.com">info@surveihotel.com</a>

                <i class="bi bi-phone me-1 small"></i>
                <span>+62 812-3456-7890</span>
            </div>

            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

<div class="branding d-flex align-items-center py-2">

        <div class="container d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <h1 class="sitename fs-2 fw-bold m-0">
                    SurveiHotel
                </h1>
            </a>

            <nav id="navmenu" class="navmenu">

                <ul>

                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('user.hotel') }}">Hotel</a>
                    </li>

                    <li>
                        <a href="{{ route('user.survey') }}">Survei</a>
                    </li>

                    <li>
                        <a href="{{ route('user.about') }}">Tentang</a>
                    </li>

                    <li>
                        <a href="{{ route('user.contact') }}">Kontak</a>
                    </li>

                    <li>

                        <a class="btn btn-warning btn-sm px-3 rounded-pill" href="{{ route('login') }}">
                            Login
                        </a>

                    </li>

                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

            </nav>

        </div>

    </div>

</header>
