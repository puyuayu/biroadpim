@extends('layouts.app')

@section('content')

{{-- HERO / SLIDER --}}
<section class="hero-slider">
    <div class="container">
        <div class="hero-wrapper">
            <img src="{{ asset('assets/img/hero.jpeg') }}" alt="Biro Administrasi Pimpinan" class="img-fluid w-100 rounded">
        </div>
    </div>
</section>

{{-- HEADLINE --}}
<section class="container my-5">
    <h4 class="fw-bold mb-3">Headline</h4>

    <div class="headline-card position-relative">
        <img src="{{ asset('assets/img/headline.jpeg') }}" class="img-fluid w-100 rounded">

        <div class="headline-overlay">
            <h3 class="fw-bold text-white">
                Dua Pejabat Tinggi<br>
                Pemprov Lampung Dilantik
            </h3>
            <a href="{{ route('berita.detail') }}" class="btn btn-danger mt-3">
                Baca Selengkapnya
            </a>
        </div>
    </div>
</section>

{{-- BERITA TERBARU --}}
<section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Berita Terbaru</h4>
        <a href="{{ route('berita') }}" class="fw-semibold">Lihat Semua</a>
    </div>

    <div class="row g-4">
        {{-- BERITA UTAMA --}}
        <div class="col-md-5">
            <div class="card berita-utama border-0 shadow-sm">
                <img src="{{ asset('assets/img/berita1.jpg') }}" class="card-img-top rounded">

                <div class="card-body position-absolute bottom-0 start-0 w-100 text-white berita-overlay">
                    <h5 class="fw-bold">
                        Pj. Gubernur Lampung<br>
                        Lantik 12 Pejabat
                    </h5>
                    <a href="{{ route('berita.detail') }}" class="btn btn-danger btn-sm mt-2">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        {{-- LIST BERITA --}}
        <div class="col-md-7">
            <div class="berita-list d-flex mb-4">
                <img src="{{ asset('assets/img/berita2.jpg') }}" class="rounded me-3" width="120">

                <div>
                    <h6 class="fw-bold mb-1">
                        Audiensi dengan Gubernur Lampung
                    </h6>
                    <p class="mb-0 text-muted">
                        Kegiatan audiensi dengan gubernur Lampung
                        senin 23 Juni 2025 di kantor Gubernur Lampung.
                    </p>
                </div>
            </div>

            <hr>

            <div class="berita-list d-flex mt-4">
                <img src="{{ asset('assets/img/berita3.jpg') }}" class="rounded me-3" width="120">

                <div>
                    <h6 class="fw-bold mb-1">
                        Pemprov Lampung Lantik Dua Pejabat Pimpinan Tinggi
                    </h6>
                    <p class="mb-0 text-muted">
                        Gubernur Lampung Rahmat Mirzani Djausal,
                        diwakili Sekdaprov Lampung.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
