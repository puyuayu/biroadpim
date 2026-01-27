<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biro Administrasi Pimpinan Provinsi Lampung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

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
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navMenu" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">PPID</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}"href="{{ route('berita') }}">Berita</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Dokumen</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('galeri') ? 'active' : '' }}"href="{{ route('galeri') }}">Galeri</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}"href="{{ route('kontak') }}">Kontak</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
