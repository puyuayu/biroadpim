@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="py-5 text-white"
    style="background: linear-gradient(90deg,#7a0000,#c41414);">
    <div class="container">
        <h3 class="fw-bold">Statistik Kepegawaian</h3>
        <p class="mb-0">Biro Administrasi Pimpinan</p>
        <small>Data Statistik Kepegawaian Biro Administrasi Pimpinan Provinsi Lampung</small>
    </div>
</section>

{{-- CONTENT --}}
<section class="py-5">
    <div class="container">

        <div class="text-center mb-4">
            <h5 class="fw-bold text-uppercase">
                Rekapitulasi Data Aparatur Sipil Negara
            </h5>
            <p class="mb-1">
                di Lingkungan Biro Administrasi Pimpinan
            </p>
            <p class="fw-semibold mb-0">
                Berdasarkan Pendidikan
            </p>
            <small class="text-muted">
                Keadaan Tanggal : 22 Oktober 2025
            </small>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-success">
                    <tr>
                        <th rowspan="2">Pendidikan</th>
                        <th colspan="2">CPNS</th>
                        <th colspan="2">PNS</th>
                        <th colspan="2">PPPK</th>
                        <th rowspan="2">Jumlah</th>
                    </tr>
                    <tr>
                        <th>L</th>
                        <th>P</th>
                        <th>L</th>
                        <th>P</th>
                        <th>L</th>
                        <th>P</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="text-start">SD Sederajat</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
                    <tr><td class="text-start">SLTP Umum</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
                    <tr><td class="text-start">SLTP Kejuruan</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>

                    <tr><td class="text-start">SLTA Umum</td><td>0</td><td>0</td><td>7</td><td>2</td><td>0</td><td>0</td><td>9</td></tr>
                    <tr><td class="text-start">SLTA Kejuruan</td><td>0</td><td>0</td><td>1</td><td>0</td><td>0</td><td>0</td><td>1</td></tr>
                    <tr><td class="text-start">SLTA Keguruan</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>

                    <tr><td class="text-start">Diploma III</td><td>1</td><td>2</td><td>1</td><td>2</td><td>0</td><td>0</td><td>6</td></tr>
                    <tr><td class="text-start">Diploma IV</td><td>1</td><td>0</td><td>3</td><td>1</td><td>0</td><td>0</td><td>5</td></tr>
                    <tr><td class="text-start">Sarjana</td><td>5</td><td>3</td><td>2</td><td>8</td><td>0</td><td>0</td><td>18</td></tr>

                    <tr><td class="text-start">Pasca Sarjana</td><td>0</td><td>0</td><td>10</td><td>11</td><td>0</td><td>0</td><td>21</td></tr>

                    <tr class="table-success fw-bold">
                        <td colspan="7" class="text-end">GRAND TOTAL</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

@endsection
