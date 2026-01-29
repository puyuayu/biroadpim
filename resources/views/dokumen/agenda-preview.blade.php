@extends('layouts.app')

@section('content')

{{-- HEADER --}}
<section class="py-5" style="background:#8b0000;">
    <div class="container text-white">
        <h4 class="fw-bold mb-1">Preview Agenda Harian</h4>
        <p class="mb-0">Biro Administrasi Pimpinan Provinsi Lampung</p>
    </div>
</section>

{{-- KONTEN --}}
<section class="py-5">
    <div class="container">

        {{-- INFORMASI AGENDA --}}
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body">
                <h5 class="fw-bold mb-3">Agenda Kegiatan Pimpinan</h5>

                <table class="table table-borderless mb-0">
                    <tr>
                        <th width="200">Tanggal</th>
                        <td>: 22 Oktober 2025</td>
                    </tr>
                    <tr>
                        <th>Waktu</th>
                        <td>: 09.00 WIB</td>
                    </tr>
                    <tr>
                        <th>Tempat</th>
                        <td>: Ruang Rapat Utama</td>
                    </tr>
                    <tr>
                        <th>Kegiatan</th>
                        <td>: Rapat Koordinasi Pimpinan</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>: Dihadiri oleh seluruh pejabat struktural</td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- PREVIEW FILE --}}
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="fw-bold mb-3">Dokumen Agenda</h6>

                <iframe 
                    src="{{ asset('assets/dokumen/contoh-agenda.pdf') }}"
                    width="100%" 
                    height="600"
                    style="border:1px solid #ddd;">
                </iframe>
            </div>
        </div>

        {{-- BUTTON --}}
        <div class="mt-4 d-flex gap-2">
            <a href="{{ route('agenda.harian') }}" class="btn btn-secondary">
                Kembali
            </a>
            <a href="#" class="btn btn-danger">
                Download
            </a>
        </div>

    </div>
</section>

@endsection
