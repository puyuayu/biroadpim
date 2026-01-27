<!-- TOP HEADER -->
<div class="top-header py-2">
    <div class="container d-flex align-items-center">
        <img src="{{ asset('assets/img/logo-lampung.png') }}" height="55" class="me-3">
        <div>
            <h6 class="mb-0 fw-bold">Biro Administrasi Pimpinan</h6>
            <small>Pemerintah Provinsi Lampung</small>
        </div>
    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark main-navbar">
    <div class="container">

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>

                <!-- DROPDOWN PROFIL -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Biro Adpim</a></li>
                        <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="#">Profil Kepala Biro</a></li>
                        <li><a class="dropdown-item" href="#">SDM</a></li>
                        <li><a class="dropdown-item" href="#">Daftar Urut Kepangkatan</a></li>
                        <li><a class="dropdown-item" href="#">Statistik Kepegawaian</a></li>
                        <li><a class="dropdown-item" href="#">SI-ANGGUN</a></li>
                    </ul>
                </li>

                <!-- DROPDOWN PPID -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        PPID
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tentang PPID</a></li>
                        <li><a class="dropdown-item" href="#">Profil Struktur PPID</a></li>
                        <li><a class="dropdown-item" href="#">Tugas Wewenang PPID</a></li>
                        <li><a class="dropdown-item" href="#">Kegiatan PPID</a></li>
                        <li><a class="dropdown-item" href="#">SK PPID</a></li>
                        <li><a class="dropdown-item" href="#">Pelayanan Informasi</a></li>
                        <li><a class="dropdown-item" href="#">SOP Pelayanan Publik</a></li>
                        <li><a class="dropdown-item" href="#">Daftar Informasi Publik</a></li>
                        <li><a class="dropdown-item" href="#">Dasar Hukum</a></li>
                        <li><a class="dropdown-item" href="#">Laporan Tahunan</a></li>
                        <li><a class="dropdown-item" href="#">Penghargaan</a></li>
                        <li><a class="dropdown-item" href="#">TPenggadaan Barang Jasa</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}"
                       href="{{ route('berita') }}">Berita</a>
                </li>

                <!-- DROPDOWN LINK -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Instagram</a></li>
                        <li><a class="dropdown-item" href="#">Tiktok</a></li>
                        <li><a class="dropdown-item" href="#">Twitter</a></li>
                        <li><a class="dropdown-item" href="#">Youtube</a></li>
                        <li><a class="dropdown-item" href="#">e-Sughat</a></li>
                        <li><a class="dropdown-item" href="#">LPSE Lampung</a></li>
                    </ul>
                </li>

                <!-- DROPDOWN DOKUMEN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Dokumen
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dokumen</a></li>
                        <li><a class="dropdown-item" href="#">Agenda</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('galeri') ? 'active' : '' }}"
                       href="{{ route('galeri') }}">Galeri</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}"
                       href="{{ route('kontak') }}">Kontak</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
