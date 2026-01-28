@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="py-5 text-white"
    style="background: linear-gradient(90deg,#8b0000,#c41414);">
    <div class="container">
        <h2 class="fw-bold mb-1">Profil Kepala Biro Adpim</h2>
        <h5>Kepala Biro Administrasi Pimpinan</h5>
        <p class="mb-0">
            Kepala Biro Administrasi Pimpinan Provinsi Lampung
        </p>
    </div>
</section>

<!-- PROFIL -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- PROFIL SINGKAT -->
            <div class="col-md-7">
                <div class="card shadow-sm h-100">
                    <div class="card-header text-dark fw-bold"
                        style="background: linear-gradient(90deg,#ffb3b3,#ffd6d6);">
                        FITER RAHMAWAN, S.STP., M.M.
                        <br>
                        <small>Kepala Biro Administrasi Provinsi Lampung</small>
                    </div>
                    <div class="card-body">
                        <h6 class="fw-bold">Profil Singkat</h6>
                        <p class="text-muted mb-0">
                            Fiter Rahmawan adalah pejabat di Pemerintah Provinsi
                            Lampung yang pernah menjabat sebagai Kepala Bagian
                            Penyiapan Materi dan Komunikasi di Biro Administrasi
                            Pimpinan (Adpim) dan kemudian ditunjuk sebagai
                            Pelaksana Tugas (Plt.) Kepala Biro Adpim Pemprov
                            Lampung pada Juni 2025, menggantikan Yudhy Hermanto
                            yang mengundurkan diri. Ia sering terlihat dalam
                            agenda harian Gubernur Lampung dalam kapasitasnya
                            di Biro Adpim.
                        </p>
                    </div>
                </div>
            </div>

            <!-- DATA PEJABAT -->
            <div class="col-md-5">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h6 class="fw-bold">
                            Kepala Biro Administrasi Provinsi Lampung
                        </h6>
                        <hr>

                        <p class="fw-bold mb-1">
                            FITER RAHMAWAN, S.STP., M.M.
                        </p>

                        <p class="mb-2">
                            <strong>NIP</strong><br>
                            19840701 200312 1 001
                        </p>

                        <p>
                            <strong>Menjabat Sejak</strong><br>
                            06 Juni 2025
                        </p>

                        <div class="text-end">
                            <img src="{{ asset('assets/img/kepala-biro.png') }}"
                                 alt="Kepala Biro"
                                 class="img-fluid rounded"
                                 style="max-height:260px">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- RIWAYAT -->
<section class="pb-5">
    <div class="container">
        <h3 class="fw-bold mb-4">Riwayat Jabatan</h3>

        <div class="row g-4">

            <!-- TIMELINE -->
            <div class="col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <ul class="timeline">

                            <li>
                                <strong>Kepala Seksi Dokumentasi dan Informasi Pendidikan</strong><br>
                                Dinas Pendidikan Kabupaten Lampung Selatan<br>
                                <small class="text-muted">TMT: 06-08-2012</small>
                            </li>

                            <li>
                                <strong>Kepala Seksi Subsidi Dinas Pendidikan</strong><br>
                                Kabupaten Lampung Selatan<br>
                                <small class="text-muted">TMT: 23-11-2013</small>
                            </li>

                            <li>
                                <strong>Kepala Sub Bagian Kerjasama Antar Lembaga</strong><br>
                                Bagian Otonomi Daerah Setda Kab. Lampung Selatan<br>
                                <small class="text-muted">TMT: 05-02-2015</small>
                            </li>

                            <li>
                                <strong>Kepala Sub Bagian Hubungan Keprotokolan</strong><br>
                                Biro Humas & Protokol Setda Provinsi Lampung<br>
                                <small class="text-muted">TMT: 09-02-2017</small>
                            </li>

                            <li>
                                <strong>Kepala Bagian Materi dan Komunikasi Pimpinan</strong><br>
                                Biro Adpim Setda Provinsi Lampung<br>
                                <small class="text-muted">TMT: 20-09-2024</small>
                            </li>

                            <li>
                                <strong>Plt. Kepala Biro Administrasi Pimpinan</strong><br>
                                Setda Provinsi Lampung<br>
                                <small class="text-muted">TMT: 03-06-2025</small>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- PENDIDIKAN -->
            <div class="col-md-5">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="fw-bold">Riwayat Pendidikan</h5>
                        <ol class="mt-3">
                            <li>SD Mutiara Persit Bandar Lampung</li>
                            <li>SLTP Negeri 25 Bandar Lampung</li>
                            <li>SMU Negeri 3 Bandar Lampung</li>
                            <li>Institut Pemerintahan Dalam Negeri Jatinangor</li>
                            <li>Pasca Sarjana Universitas Negeri Lampung</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
