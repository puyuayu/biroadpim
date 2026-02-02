@extends('layouts.app')

@section('content')

<!-- HERO BERITA -->
<section class="hero" style="background-image: url('{{ asset('assets/img/headline.jpeg') }}')">
    <div class="hero-overlay d-flex align-items-end">
        <div class="container pb-5">
            <h2>Dua Pejabat Tinggi<br>Pemprov Lampung Dilantik</h2>
        </div>
    </div>
</section>


<!-- CONTENT -->
<section class="container my-5">
    <div class="row">

        <!-- KONTEN BERITA -->
        <div class="col-lg-8">
            <h3 class="fw-bold mb-2">Dua Pejabat Tinggi Pemprov Lampung Dilantik</h3>

            <div class="text-muted mb-3">
                27 Mei 2025 &nbsp;•&nbsp; KOMINFO &nbsp;•&nbsp; 257 Suka &nbsp;•&nbsp; 1 Komentar
            </div>

            <img src="{{ asset('assets/img/headline.jpeg') }}" class="img-fluid rounded mb-4">

            <p><strong>BANDARLAMPUNG</strong> — Pemerintah Provinsi Lampung menggelar rapat Optimalisasi Pajak Alat Berat di Ruang Command Center...</p>

            <p>Rapat dipimpin Asisten Bidang Administrasi Umum Sulpakar dan membahas pendataan ulang alat berat...</p>

            <p>Selain pendataan, rapat juga membahas rencana pembentukan tim khusus untuk mengoptimalkan pajak alat berat...</p>

            <p>“Pembentukan tim ini diharapkan dapat memperkuat koordinasi lintas OPD...”</p>

            <p>Melalui langkah pendataan ulang dan pembentukan tim, Pemerintah Provinsi Lampung berharap optimalisasi pajak alat berat...</p>
        </div>

        <!-- SIDEBAR -->
        <div class="col-lg-4">

            <!-- BERITA TERKINI -->
            <div class="card mb-4 sidebar-box">
                <div class="card-header fw-bold">Berita Terkini</div>
                <div class="card-body">
                    <div class="sidebar-news">
                        <img src="{{ asset('assets/img/berita.jpg') }}">
                        <div>
                            <h6>Pemprov Lampung Gelar Rapat Pembahasan...</h6>
                            <small>08 Jan 2026</small>
                        </div>
                    </div>

                    <div class="sidebar-news">
                        <img src="{{ asset('assets/img/berita.jpg') }}">
                        <div>
                            <h6>Perkuat Pelayanan Bandara...</h6>
                            <small>08 Jan 2026</small>
                        </div>
                    </div>

                    <div class="sidebar-news">
                        <img src="{{ asset('assets/img/berita.jpg') }}">
                        <div>
                            <h6>Pastikan Kesiapan Layanan...</h6>
                            <small>08 Jan 2026</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KOMENTAR -->
            <div class="card sidebar-box">
                <div class="card-header bg-danger text-white fw-bold">Komentar</div>
                <div class="card-body">
                    <div class="d-flex gap-3 mb-3">
                        <div class="avatar"></div>
                        <div>
                            <strong>Puyu</strong> <small class="text-muted">9 Jan 2026</small>
                            <p class="mb-0">Isi komentar untuk berita tersebut di sini</p>
                        </div>
                    </div>

                    <h6 class="fw-bold mt-4">Berikan Komentar</h6>
                    <textarea class="form-control mb-2" rows="3"></textarea>
                    <button class="btn btn-danger btn-sm">Kirim</button>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
