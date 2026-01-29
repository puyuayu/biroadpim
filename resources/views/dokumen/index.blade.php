@extends('layouts.app')

@section('content')

{{-- HEADER --}}
<section class="py-5" style="background:#8b0000;">
    <div class="container text-white">
        <h4 class="fw-bold mb-1">Dokumen</h4>
        <p class="mb-0">Biro Administrasi Pimpinan Provinsi Lampung</p>
    </div>
</section>

{{-- FILTER --}}
<section class="py-4">
    <div class="container d-flex justify-content-end">
        <div class="dropdown">
            <button class="btn btn-light border dropdown-toggle" data-bs-toggle="dropdown">
                Tahun
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2025</a></li>
                <li><a class="dropdown-item" href="#">2024</a></li>
                <li><a class="dropdown-item" href="#">2023</a></li>
            </ul>
        </div>
    </div>
</section>

{{-- LIST DOKUMEN --}}
<section class="pb-5">
    <div class="container">

        {{-- ITEM --}}
        @for ($i = 1; $i <= 4; $i++)
        <div class="card shadow-sm mb-4 border-0">
            <div class="card-body d-flex justify-content-between align-items-center">

                <div>
                    <h6 class="fw-bold mb-1">Renstra {{ 2022 + $i }}</h6>
                    <small class="text-muted">Dokumen Perencanaan Strategis</small>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('agenda.preview') }}" class="btn btn-success btn-sm px-4">
                        Preview
                    </a>
                    <a href="#" class="btn btn-danger btn-sm px-4">
                        Download
                    </a>
                </div>

            </div>
        </div>
        @endfor

    </div>
</section>

@endsection
