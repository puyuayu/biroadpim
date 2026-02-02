@extends('layouts.app')

@section('content')

<div class="container my-4">

    <!-- Search & Kategori -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-9">
            <input type="text" class="form-control search-input" placeholder="Cari berita...">
        </div>
        <div class="col-md-3 text-end">
            <select class="form-select">
                <option selected>Kategori</option>
                <option>Pemerintahan</option>
                <option>Kegiatan</option>
                <option>Pengumuman</option>
            </select>
        </div>
    </div>

    <!-- Berita Utama -->
    <div class="card berita-utama mb-4 shadow-sm border-0">
        <img src="{{ asset('assets/img/berita.jpg') }}" class="card-img-top berita-utama-img">
        <div class="card-body">
            <h4 class="fw-bold">
                Tingkatkan Prestasi Renang, Sekdaprov Marindo Tekankan
                Pentingnya Skala Prioritas dan Kolaborasi Lintas Sektor
            </h4>
            <p class="text-muted">
                Sekdaprov Marindo Kurniawan menegaskan komitmen Pemerintah Provinsi
                Lampung dalam memajukan infrastruktur olahraga...
            </p>
            <a href="{{ route('berita.detail') }}" class="btn btn-danger mt-3">
                Baca Selengkapnya
            </a>
        </div>
    </div>

    <!-- LIST BERITA -->
    <div class="card berita-list mb-3 shadow-sm border-0">
        <div class="row g-0 align-items-center">
            <div class="col-md-5">
                <img src="{{ asset('assets/img/berita.jpg') }}"
                     class="img-fluid rounded-start berita-thumb">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="fw-bold">
                        Gubernur Rahmat Mirzani Djausal Hadiri Gala Dinner APEKSI Outlook 2025–2026
                    </h5>
                    <p class="text-muted">
                        Sekdaprov Marindo Kurniawan menegaskan komitmen Pemerintah Provinsi Lampung...
                    </p>
                    <a href="{{ route('berita.detail') }}" class="btn btn-danger mt-2">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card berita-list mb-3 shadow-sm border-0">
        <div class="row g-0 align-items-center">
            <div class="col-md-5">
                <img src="{{ asset('assets/img/berita.jpg') }}"
                     class="img-fluid rounded-start berita-thumb">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="fw-bold">
                        Pemprov Lampung Dorong Kolaborasi Antar Daerah
                    </h5>
                    <p class="text-muted">
                        Pemerintah Provinsi Lampung terus memperkuat sinergi lintas sektor...
                    </p>
                    <a href="{{ route('berita.detail') }}" class="btn btn-danger mt-2">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
