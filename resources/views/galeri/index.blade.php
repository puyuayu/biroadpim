@extends('layouts.app')

@section('content')

<!-- HERO GALERI -->
<section class="galeri-hero text-white">
    <div class="container">
        <h3 class="fw-bold">Galeri Kegiatan</h3>
        <h5>Biro Administrasi Pimpinan</h5>
        <p class="mb-0">
            Dokumentasi foto dan video kegiatan pimpinan Provinsi Lampung
        </p>
    </div>
</section>

<!-- FILTER -->
<section class="py-4">
    <div class="container">
        <div class="d-flex flex-wrap gap-2 align-items-center">
            <button class="btn btn-danger btn-sm">Semua</button>
            <button class="btn btn-light btn-sm">Foto</button>
            <button class="btn btn-light btn-sm">Video</button>

            <div class="ms-auto">
                <input type="text" class="form-control form-control-sm"
                       placeholder="Cari...">
            </div>
        </div>
    </div>
</section>

<!-- GALERI GRID -->
<section class="pb-5">
    <div class="container">
        <div class="row g-4">

            @for ($i = 0; $i < 12; $i++)
            <div class="col-md-4">
                <div class="galeri-card">
                    <img src="{{ asset('assets/img/galeri1.jpg') }}" alt="">
                    <div class="overlay">
                        <h6>Pembahasan Bandara<br>Internasional Radin Inten II</h6>
                        <small>23 Desember 2025</small>
                    </div>
                </div>
            </div>
            @endfor

        </div>
    </div>
</section>

@endsection
