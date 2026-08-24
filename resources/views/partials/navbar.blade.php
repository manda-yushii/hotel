<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>

        <div>
            <a class="navbar-brand brand-logo text-decoration-none d-flex align-items-center"
                href="{{ url('/dashboard') }}">
                <i class="mdi mdi-office-building text-primary me-2" style="font-size:32px"></i>

                <div>
                    <h5 class="mb-0 fw-bold text-dark">
                        SurveiHotel
                    </h5>
                    <small class="text-muted">
                        Admin Panel
                    </small>
                </div>
            </a>
            <a class="navbar-brand brand-logo-mini justify-content-center" href="{{ url('/dashboard') }}">
                <i class="mdi mdi-office-building text-primary" style="font-size:28px"></i>
            </a>
        </div>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-lg-block">
                <h4 class="mb-0 fw-bold">
                    Survei Pemesanan Hotel
                </h4>
                <small class="text-muted">
                    Sistem Manajemen Hotel dan Survei Kepuasan Pelanggan
                </small>
            </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
                <form class="search-form">
                    <i class="icon-search"></i>
                    <input type="search" class="form-control" placeholder="Cari menu...">
                </form>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link count-indicator" href="#" data-bs-toggle="dropdown">
                    <i class="icon-bell"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown">
                    <h6 class="dropdown-header">
                        Notifikasi
                    </h6>
                    <span class="dropdown-item">
                        Belum ada notifikasi.
                    </span>
                </div>
            </li>

            <li class="nav-item dropdown user-dropdown">
                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                    <img class="img-xs rounded-circle" src="{{ asset('assets/images/profil.jpg') }}" alt="Profile">
                </a>

                <div class="dropdown-menu dropdown-menu-end navbar-dropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-lg rounded-circle mb-2" src="{{ asset('assets/images/profil.jpg') }}"
                            alt="Profile">
                        <h6 class="mb-1">
                            {{ auth()->user()->name }}
                        </h6>
                        <p class="text-muted mb-0">
                            {{ auth()->user()->email }}
                        </p>
                    </div>

                    <a class="dropdown-item" href="{{ url('/profile') }}">
                        <i class="mdi mdi-account me-2"></i>
                        Profil
                    </a>
                    <form action="{{ route('logout') }}" method="POST"
                        onsubmit="return confirm('Yakin ingin logout?')">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="mdi mdi-logout me-2"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
