@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero" style="background-image: url('{{ asset('assets/img/hero.jpg') }}')">
    <div class="hero-overlay">
        <div class="container">
            <h2>Dua Pejabat Tinggi<br>Pemprov Lampung Dilantik</h2>
            <a href="{{ route('berita.detail') }}" class="btn btn-danger mt-3">Baca Selengkapnya</a>
        </div>
    </div>
</section>

<!-- BERITA TERBARU -->
<section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Berita Terbaru</h4>
        <a href="{{ route('berita') }}" class="btn btn-danger btn-sm">Lihat Semua</a>
    </div>

    <div class="row">
        <!-- Featured -->
        <div class="col-md-5">
            <div class="card berita-utama">
                <img src="{{ asset('assets/img/berita1.jpg') }}" class="card-img">
                <div class="card-img-overlay">
                    <h5>Pj. Gubernur Lampung Lantik 12 Pejabat</h5>
                    <a href="{{ route('berita.detail') }}" class="btn btn-danger btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- List -->
        <div class="col-md-7">
            <div class="berita-list mb-3">
                <img src="{{ asset('assets/img/berita2.jpg') }}">
                <div>
                    <h6 class="fw-bold">Audiensi dengan Gubernur Lampung</h6>
                    <p>Kegiatan audiensi dengan gubernur Lampung senin 23 Juni 2025.</p>
                </div>
            </div>

            <div class="berita-list">
                <img src="{{ asset('assets/img/berita2.jpg') }}">
                <div>
                    <h6 class="fw-bold">Pemprov Lampung Lantik Dua Pejabat</h6>
                    <p>Pelantikan pejabat pimpinan tinggi di lingkungan Pemprov Lampung.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
