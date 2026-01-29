@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="py-5 text-white"
    style="background: linear-gradient(90deg,#7a0000,#c41414);">
    <div class="container">
        <h3 class="fw-bold mb-1">Sumber Daya Perangkat Daerah</h3>
        <h5>Biro Administrasi Pimpinan</h5>
        <p class="mb-0">
            Daftar Pegawai Biro Administrasi Pimpinan Provinsi Lampung
        </p>
    </div>
</section>

<!-- CONTENT -->
<section class="py-5">
    <div class="container">

        <h4 class="text-center fw-bold mb-1">Tabel 1.1</h4>
        <h5 class="text-center fw-bold mb-4">Daftar Pegawai</h5>

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle sdm-table">
                <thead>
                    <tr class="table-head">
                        <th rowspan="2">JUMLAH PEGAWAI</th>
                        <th rowspan="2">KUALIFIKASI<br>PENDIDIKAN</th>
                        <th rowspan="2">PANGKAT / GOL</th>
                        <th colspan="2">JUMLAH PEJABAT</th>
                    </tr>
                    <tr class="table-head">
                        <th>STRUKTURAL</th>
                        <th>FUNGSIONAL</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>PNS : 60</td>
                        <td>S3 : 0</td>
                        <td>IV/c : 0</td>
                        <td>Ess IV : 1</td>
                        <td>IV/a : 2</td>
                    </tr>
                    <tr>
                        <td>PPPK : 51</td>
                        <td>S2 : 21</td>
                        <td>IV/b : 2</td>
                        <td>Ess III : 3</td>
                        <td>III/d : 4</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>S1 : 18</td>
                        <td>IV/a : 3</td>
                        <td></td>
                        <td>III/c : 1</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>D4 : 5</td>
                        <td>III/d : 13</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>D3 : 6</td>
                        <td>III/c : 12</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>D2 : 0</td>
                        <td>III/b : 7</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>D1 : 0</td>
                        <td>III/a : 15</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>SLTA : 10</td>
                        <td>II/d : 4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>SLTP : 0</td>
                        <td>II/c : 4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>SD : 0</td>
                        <td>II/b : 0</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <!-- TOTAL -->
                    <tr class="fw-bold">
                        <td>Jumlah : 111</td>
                        <td>Jumlah : 60</td>
                        <td>Jumlah : 60</td>
                        <td colspan="2">Jumlah : 11</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="fst-italic mt-2">
            Sumber : Bagian TU Biro Adpim Tahun 2025
        </p>

    </div>
</section>

@endsection
