@extends('layouts.main')

@section('content')

<!-- MAP -->
<section class="py-4">
    <div class="container">
        <div class="card shadow-sm border-0">
            <iframe
                src="https://www.google.com/maps?q=Jl.%20Robert%20Wolter%20Monginsidi%20No.%2069%20Bandar%20Lampung&output=embed"
                width="100%"
                height="300"
                style="border:0; border-radius:10px;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<!-- KONTAK -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- Informasi Kontak -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Informasi Kontak</h5>

                        <p class="mb-2"><strong>Alamat</strong><br>
                            Jln. Robert Wolter Monginsidi No. 69 Telukbetung,<br>
                            Bandar Lampung. Kode Pos 35215
                        </p>

                        <p class="mb-2"><strong>Telepon</strong><br>
                            (0721) 481166
                        </p>

                        <p class="mb-2"><strong>Email</strong><br>
                            biroadpimlampung@gmail.com
                        </p>

                        <p class="mb-0"><strong>Jam Layanan</strong><br>
                            08.00 – 16.00 WIB
                        </p>
                    </div>
                </div>
            </div>

            <!-- Form Hubungi Kami -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Hubungi Kami</h5>

                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nama">
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Pesan"></textarea>
                            </div>

                            <div class="text-end">
                                <button class="btn btn-danger px-4">Kirim</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
