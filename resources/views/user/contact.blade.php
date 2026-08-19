@extends('layouts.user')

@section('title', 'Kontak')

@section('content')

    <!-- Page Title -->
    <section class="section light-background py-5">

        <div class="container text-center">

            <span class="badge bg-primary mb-3">
                Hubungi Kami
            </span>

            <h1 class="display-4 fw-bold">
                Kontak <span class="text-primary">SurveiHotel</span>
            </h1>

            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Jika Anda memiliki pertanyaan, kritik, atau saran,
                silakan hubungi kami melalui informasi di bawah ini.
            </p>

        </div>

    </section>


    <!-- Contact Section -->
    <section class="section py-5">

        <div class="container">

            <div class="row g-4">

                <!-- Informasi Kontak -->
                <div class="col-lg-5">

                    <div class="card border-0 shadow-sm rounded-4 h-100">

                        <div class="card-body p-4">

                            <h3 class="fw-bold mb-4">
                                Informasi Kontak
                            </h3>

                            <!-- Alamat -->
                            <div class="d-flex mb-4">

                                <i class="bi bi-geo-alt-fill text-primary fs-4 me-3"></i>

                                <div>

                                    <h6 class="fw-bold mb-1">
                                        Alamat
                                    </h6>

                                    <p class="text-muted mb-0">
                                        Jl. Contoh No.123, Jakarta, Indonesia
                                    </p>

                                </div>

                            </div>


                            <!-- Telepon -->
                            <div class="d-flex mb-4">

                                <i class="bi bi-telephone-fill text-success fs-4 me-3"></i>

                                <div>

                                    <h6 class="fw-bold mb-1">
                                        Telepon
                                    </h6>

                                    <p class="text-muted mb-0">
                                        (021) 12345678
                                    </p>

                                </div>

                            </div>


                            <!-- Email -->
                            <div class="d-flex mb-4">

                                <i class="bi bi-envelope-fill text-danger fs-4 me-3"></i>

                                <div>

                                    <h6 class="fw-bold mb-1">
                                        Email
                                    </h6>

                                    <p class="text-muted mb-0">
                                        info@surveihotel.com
                                    </p>

                                </div>

                            </div>


                            <!-- Jam Operasional -->
                            <div class="d-flex">

                                <i class="bi bi-clock-fill text-warning fs-4 me-3"></i>

                                <div>

                                    <h6 class="fw-bold mb-1">
                                        Jam Operasional
                                    </h6>

                                    <p class="text-muted mb-0">
                                        Senin - Jumat, 08.00 - 17.00 WIB
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Form Kontak -->
                <div class="col-lg-7">

                    <div class="card border-0 shadow-sm rounded-4">

                        <div class="card-body p-4">

                            <h3 class="fw-bold mb-4">
                                Kirim Pesan
                            </h3>

                            <form>

                                <div class="row g-3">

                                    <!-- Nama -->
                                    <div class="col-md-6">

                                        <label class="form-label">
                                            Nama
                                        </label>

                                        <input type="text" class="form-control" placeholder="Masukkan nama">

                                    </div>


                                    <!-- Email -->
                                    <div class="col-md-6">

                                        <label class="form-label">
                                            Email
                                        </label>

                                        <input type="email" class="form-control" placeholder="Masukkan email">

                                    </div>


                                    <!-- Subjek -->
                                    <div class="col-12">

                                        <label class="form-label">
                                            Subjek
                                        </label>

                                        <input type="text" class="form-control" placeholder="Masukkan subjek">

                                    </div>


                                    <!-- Pesan -->
                                    <div class="col-12">

                                        <label class="form-label">
                                            Pesan
                                        </label>

                                        <textarea class="form-control" rows="6" placeholder="Tulis pesan Anda"></textarea>

                                    </div>


                                    <!-- Button -->
                                    <div class="col-12">

                                        <button type="submit" class="btn btn-primary rounded-pill px-4">

                                            <i class="bi bi-send-fill me-2"></i>

                                            Kirim Pesan

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
