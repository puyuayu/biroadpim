@extends('layouts.app')

@section('title', 'Tentang Biro Administrasi Pimpinan')

@section('content')

<!-- HERO PROFIL -->
<section class="profil-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <img src="{{ asset('assets/img/tentang.jpg') }}" class="img-fluid rounded">
            </div>
            <div class="col-md-5">
                <div class="profil-box">
                    <h4>Biro Administrasi Pimpinan</h4>
                    <p>
                        Visi utama Biro Administrasi Pimpinan Setda Provinsi Lampung
                        yaitu dalam mendukung visi Provinsi Lampung yaitu
                        <strong>Bersama Lampung Maju Menuju Indonesia Emas</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VISI MISI -->
<section class="visi-misi py-5">
    <div class="container">
        <h3 class="mb-4 fw-bold">Visi & Misi</h3>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="visi-card">
                    “BERSAMA LAMPUNG MAJU MENUJU INDONESIA EMAS”
                </div>
            </div>
            <div class="col-md-3">
                <div class="visi-card">
                    Mendorong Pertumbuhan Ekonomi yang Inklusif,
                    Mandiri, dan Inovatif
                </div>
            </div>
            <div class="col-md-3">
                <div class="visi-card">
                    Memperkuat Sumber Daya Manusia
                    yang Unggul dan Produktif
                </div>
            </div>
            <div class="col-md-3">
                <div class="visi-card">
                    Meningkatkan Kehidupan Masyarakat Beradab,
                    Berkeadilan, Berkelanjutan
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TUGAS POKOK -->
<section class="tugas-pokok">
    <div class="container">
        <h3 class="fw-bold mb-3">Tugas Pokok & Fungsi</h3>

        <div class="tugas-box">
            <p>
                Menyiapkan pengkoordinasian perumusan kebijakan, mengkoordinasikan
                Pimpinan dan Asisten Administrasi Umum dalam penyiapan pelaksanaan
                kebijakan, pelaksanaan pemantauan, evaluasi program dan kegiatan,
                penyelenggaraan pembinaan teknis, administrasi dan sumber daya
                di bidang komunikasi pimpinan serta protokol.
            </p>

            <ol>
                <li>
                    Penyiapan pelaksanaan kebijakan di bidang tata usaha pimpinan,
                    protokol serta materi dan komunikasi pimpinan
                </li>
                <li>
                    Pelaksanaan fungsi lain yang diberikan Pimpinan dan Asisten
                    Administrasi Umum yang berkaitan dengan tugasnya
                </li>
                <li>
                    Penyiapan pelaksanaan pemantauan dan evaluasi di bidang tata
                    usaha pimpinan, protokol serta materi dan komunikasi pimpinan
                </li>
            </ol>
        </div>
    </div>
</section>

@endsection
