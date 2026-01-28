@extends('layouts.app')

@section('content')

<!-- HERO / HEADER -->
<section class="py-5 text-white"
    style="background: linear-gradient(90deg, #8b0000, #c41414);">
    <div class="container">
        <h1 class="fw-bold">Struktur Organisasi</h1>
        <h5>Biro Administrasi Pimpinan</h5>
        <p class="mb-0">
            Struktur organisasi Biro Administrasi Pimpinan Provinsi Lampung
        </p>
    </div>
</section>

<!-- KONTEN -->
<section class="py-5">
    <div class="container">

        <!-- GAMBAR STRUKTUR -->
        <div class="text-center mb-4">
            <img src="{{ asset('assets/img/struktur-organisasi.png') }}"
                 alt="Struktur Organisasi Biro Adpim"
                 class="img-fluid shadow rounded">
        </div>

        <!-- KETERANGAN -->
        <div class="mt-4">
            <p class="text-muted text-center">
                Struktur organisasi ini menggambarkan susunan jabatan serta
                pembagian tugas dan fungsi di lingkungan
                <strong>Biro Administrasi Pimpinan</strong>
                Sekretariat Daerah Provinsi Lampung.
            </p>
        </div>

    </div>
</section>

@endsection
