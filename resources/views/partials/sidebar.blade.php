<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        {{-- Dashboard --}}
        <li class="nav-item {{ request()->is('/', 'dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="mdi mdi-view-dashboard menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        {{-- Master Data --}}
        <li class="nav-item">
            <a class="nav-link {{ request()->is('hotel*') || request()->is('kamar*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" href="#masterData"
                aria-expanded="{{ request()->is('hotel*') || request()->is('kamar*') ? 'true' : 'false' }}">
                <i class="mdi mdi-office-building menu-icon"></i>
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse {{ request()->is('hotel*') || request()->is('kamar*') ? 'show' : '' }}"
                id="masterData">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('hotel*') ? 'active' : '' }}" href="{{ url('/hotel') }}">
                            Data Hotel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kamar*') ? 'active' : '' }}" href="{{ url('/kamar') }}">
                            Data Kamar
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- Survei --}}
        <li class="nav-item">
            <a class="nav-link {{ request()->is('survei*') || request()->is('hasil*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" href="#survei"
                aria-expanded="{{ request()->is('survei*') || request()->is('hasil*') ? 'true' : 'false' }}">
                <i class="mdi mdi-clipboard-text menu-icon"></i>
                <span class="menu-title">Survei</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse {{ request()->is('survei*') || request()->is('hasil*') ? 'show' : '' }}"
                id="survei">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('survei*') ? 'active' : '' }}"
                            href="{{ url('/survei') }}">
                            Form Survei
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('hasil*') ? 'active' : '' }}" href="{{ url('/hasil') }}">
                            Hasil Survei
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- Pengaturan --}}
        <li class="nav-item">
            <a class="nav-link {{ request()->is('pengguna*') || request()->is('peran*') || request()->is('profile*') ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" href="#pengaturan"
                aria-expanded="{{ request()->is('pengguna*') || request()->is('peran*') || request()->is('profile*') ? 'true' : 'false' }}">
                <i class="mdi mdi-cog menu-icon"></i>
                <span class="menu-title">Pengaturan</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse {{ request()->is('pengguna*') || request()->is('peran*') || request()->is('profile*') ? 'show' : '' }}"
                id="pengaturan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pengguna*') ? 'active' : '' }}"
                            href="{{ url('/pengguna') }}">
                            Data Pengguna
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('peran*') ? 'active' : '' }}" href="{{ url('/peran') }}">
                            Peran Pengguna
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile*') ? 'active' : '' }}"
                            href="{{ url('/profile') }}">
                            Profil
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
