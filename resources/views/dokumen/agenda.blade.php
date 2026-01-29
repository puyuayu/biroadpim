@extends('layouts.app')

@section('content')

{{-- HEADER HALAMAN --}}
<section class="py-5" style="background:#8b0000;">
    <div class="container text-white">
        <h3 class="fw-bold mb-1">Agenda Harian</h3>
        <p class="mb-0">Biro Administrasi Pimpinan Provinsi Lampung</p>
    </div>
</section>

{{-- KONTEN --}}
<section class="py-5">
    <div class="container">

        {{-- FILTER TAHUN --}}
        <div class="d-flex justify-content-end mb-4">
            <select class="form-select w-auto shadow-sm">
                <option selected>Pilih Tahun</option>
                <option>2025</option>
                <option>2024</option>
                <option>2023</option>
            </select>
        </div>

        {{-- LIST AGENDA --}}
        @for ($i = 1; $i <= 4; $i++)
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="fw-bold mb-1">Agenda Kegiatan Pimpinan</h6>
                    <small class="text-muted">Biro Administrasi Pimpinan</small>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('agenda.preview') }}" 
   class="btn btn-success btn-sm px-4">
    Preview
</a>

                    <a href="#" class="btn btn-danger btn-sm px-4">Download</a>
                </div>
            </div>
        </div>
        @endfor

    </div>
</section>

@endsection
