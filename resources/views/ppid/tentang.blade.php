@extends('layouts.app')

@section('content')

{{-- HERO IMAGE --}}
<section class="ppid-hero">
    <img src="{{ asset('assets/img/image.png') }}" alt="PPID Banner">
</section>

{{-- TENTANG PPID CARD --}}
<section class="container ppid-section">
    <div class="ppid-card">
        <h3 class="fw-bold mb-3">Tentang PPID</h3>
        <hr>

        <p>
            Informasi adalah hak asasi manusia dan bagian penting dari negara demokratis.
            UU Nomor 14 Tahun 2008 mendorong keterbukaan informasi untuk mewujudkan
            pemerintahan yang transparan dan akuntabel melalui pembentukan PPID
            di tingkat provinsi dan perangkat daerah, termasuk di Provinsi Lampung.
        </p>
    </div>

    {{-- PERMOHONAN INFORMASI --}}
    <div class="mt-5">
        <h4 class="fw-bold mb-4">Permohonan Informasi Publik</h4>

        <div class="row g-4">
            <div class="col-md-6">
                <a href="#" class="ppid-box">
                    <h5>Form Keberatan Atas Permohonan</h5>
                </a>
            </div>

            <div class="col-md-6">
                <a href="#" class="ppid-box">
                    <h5>Form Permohonan Informasi Publik</h5>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
