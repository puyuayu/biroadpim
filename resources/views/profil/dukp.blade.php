@extends('layouts.app')

@section('content')
<section class="py-5 text-white"
    style="background: linear-gradient(90deg,#7a0000,#c41414);">
    <div class="container">
        <h3 class="fw-bold">Daftar Urut Kepangkatan</h3>
        <p>Biro Administrasi Pimpinan Provinsi Lampung</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <iframe
                    src="{{ asset('dokumen/duk-biro-adpim.pdf') }}"
                    style="width:100%; height:900px; border:1px solid #ddd;">
                </iframe>
            </div>
        </div>
    </div>
</section>
@endsection
