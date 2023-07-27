<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('FrontEnd-Himti-master/assets/images/HIMTI.png') }}">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <span class="simple-text logo-normal">
            ADMIN
            <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
        </span>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Route::is('tambah') ? 'active' : '' }}">
                <a href="{{ route('tambah') }}">
                    <i class="nc-icon nc-calendar-60"></i>
                    <p>Create Acara</p>
                </a>
            </li>
            <li>
            <li class="{{ Route::is('tambah-sharing') ? 'active' : '' }}">
                <a href="{{ route('tambah-sharing') }}">
                    <i class="nc-icon nc-watch-time"></i>
                    <p>Create Jadwal Sharing</p>
                </a>
            </li>
            <li class="{{ Route::is('tambah-artikel') ? 'active' : '' }}">
                <a href="{{ route('tambah-artikel') }}">
                    <i class="nc-icon nc-paper"></i>
                    <p>Create Artikel</p>
                </a>
            </li>
            <li class="{{ Route::is('tambah-anggota') ? 'active' : '' }}">
                <a href="{{ route('tambah-anggota') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Create Anggota</p>
                </a>
            </li>
            <li class="{{ Route::is('tambahKategori') ? 'active' : '' }}">
                <a href="{{ route('tambahKategori') }}">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>Create Kategori</p>
                </a>
            </li>
            <li class="{{ Route::is('tambah-angkatan') ? 'active' : '' }}">
                <a href="{{ route('tambah-angkatan') }}">
                    <i class="nc-icon nc-world-2"></i>
                    <p>Create Angkatan</p>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}">
                    <i class="nc-icon nc-globe text-warning"></i>
                    <p>HIMTI Website</p>
                </a>
            </li>


        </ul>
    </div>
</div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <p class="navbar-brand">
                    @if (Route::is('dashboard'))
                        Dashboard
                    @elseif (Route::is('tambah'))
                        Tambah Acara
                    @elseif (Route::is('tambahKategori'))
                        Tambah Kategori
                    @elseif (Route::is('tambah-sharing'))
                        Tambah Jadwal Sharing
                    @elseif (Route::is('tambahKategori'))
                        Tambah Jadwal Sharing
                    @elseif (Route::is('tambah-angkatan'))
                        Tambah Angkatan
                    @elseif (Route::is('tambah-anggota'))
                        Tambah Anggota
                    @elseif (Route::is('update-acara'))
                        Update Acara
                    @elseif (Route::is('update-sharing'))
                        Update Jadwal Sharing
                    @elseif (Route::is('update-artikel'))
                        Update Artikel
                    @elseif (Route::is('update-anggota'))
                        Update Anggota
                    @elseif (Route::is('update-kategori'))
                        Update Kategori
                    @elseif (Route::is('update-angkatan'))
                        Update Angkatan
                    @endif
                </p>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

                <ul class="navbar-nav">

                    <li class="nav-item btn-rotate dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>{{ Auth::user()->name }}</p>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
