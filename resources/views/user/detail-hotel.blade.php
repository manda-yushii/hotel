@extends('layouts.user')

@section('title', 'Detail Hotel')

@section('content')

    <!-- Page Title -->
    <section class="page-title section light-background">

        <div class="container text-center">

            <h1>Detail Hotel</h1>

            <p>
                Informasi lengkap mengenai hotel yang akan Anda nilai.
            </p>

        </div>

    </section>

    <!-- Detail Hotel -->
    <section class="section py-4">

        <div class="container">

            <div class="row gy-5">


                <!-- Informasi -->
                <div class="col-lg-12">

                    <h1 class="fw-bold display-5 mb-3">
                        Hotel Nusantara
                    </h1>

                    <p class="text-muted">

                        <i class="bi bi-geo-alt-fill text-danger"></i>

                        Jakarta, Indonesia

                    </p>

                    <div class="mb-4">

                        <span class="badge bg-warning text-dark fs-6 px-3 py-2">

                            ⭐ 4.9 / 5

                        </span>

                    </div>

                    <p>

                        Hotel Nusantara merupakan hotel berbintang lima
                        dengan fasilitas lengkap, pelayanan profesional,
                        dan lokasi yang strategis.

                    </p>

                    <hr class="my-5">
                    <div class="card shadow-sm border-0 rounded-4">

                        <div class="card-body">

                            <h4 class="fw-bold mb-4">

                                Fasilitas Hotel

                            </h4>

                            <div class="row">

                                <div class="col-6 mb-3">

                                    <i class="bi bi-wifi text-primary me-2"></i>

                                    WiFi Gratis

                                </div>

                                <div class="col-6 mb-3">

                                    <i class="bi bi-cup-hot text-primary me-2"></i>

                                    Restoran

                                </div>

                                <div class="col-6 mb-3">

                                    <i class="bi bi-car-front text-primary me-2"></i>

                                    Parkir Luas

                                </div>

                                <div class="col-6 mb-3">

                                    <i class="bi bi-water text-primary me-2"></i>

                                    Kolam Renang

                                </div>

                                <div class="col-6 mb-3">

                                    <i class="bi bi-house-door text-primary me-2"></i>

                                    Kamar Nyaman

                                </div>

                                <div class="col-6 mb-3">

                                    <i class="bi bi-shield-check text-primary me-2"></i>

                                    Keamanan 24 Jam

                                </div>

                            </div>
                        </div>

                    </div>
                    <hr class="my-5">
                    <div class="card shadow-sm border-0 rounded-4">
                        <div class="card-body">


                            <h4 class="fw-bold mb-4">

                                Informasi Hotel

                            </h4>

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <strong>
                                        <i class="bi bi-geo-alt-fill text-primary"></i>
                                        Alamat
                                    </strong>

                                    <p class="mb-0 text-muted">
                                        Jl. Sudirman No. 100, Jakarta Pusat
                                    </p>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <strong>
                                        <i class="bi bi-telephone-fill text-primary"></i>
                                        Telepon
                                    </strong>

                                    <p class="mb-0 text-muted">
                                        (021) 12345678
                                    </p>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <strong>
                                        <i class="bi bi-envelope-fill text-primary"></i>
                                        Email
                                    </strong>

                                    <p class="mb-0 text-muted">
                                        info@hotelnusantara.com
                                    </p>

                                </div>

                                <div class="col-md-3 mb-3">

                                    <strong>
                                        <i class="bi bi-clock-fill text-primary"></i>
                                        Check In
                                    </strong>

                                    <p class="mb-0 text-muted">
                                        14.00 WIB
                                    </p>

                                </div>

                                <div class="col-md-3 mb-3">

                                    <strong>
                                        <i class="bi bi-clock-history text-primary"></i>
                                        Check Out
                                    </strong>

                                    <p class="mb-0 text-muted">
                                        12.00 WIB
                                    </p>

                                </div>

                            </div>

                        </div>
                    </div>

                    <hr class="my-5">
                    <div class="card shadow-sm border-0 rounded-4">

                        <div class="card-body">
                            <h4 class="fw-bold mb-4">

                                Galeri Hotel

                            </h4>

                            <div class="row g-4">

                                <div class="col-lg-3 col-md-6">

                                    <img src="{{ asset('user/assets/img/hotel/detail1.jpg') }}"
                                        class="img-fluid rounded-4 shadow-sm" alt="Galeri Hotel">

                                </div>

                                <div class="col-lg-3 col-md-6">

                                    <img src="{{ asset('user/assets/img/hotel/detail2.jpg') }}"
                                        class="img-fluid rounded-4 shadow-sm" alt="Galeri Hotel">

                                </div>

                                <div class="col-lg-3 col-md-6">

                                    <img src="{{ asset('user/assets/img/hotel/detail3.jpg') }}"
                                        class="img-fluid rounded-4 shadow-sm" alt="Galeri Hotel">

                                </div>

                                <div class="col-lg-3 col-md-6">

                                    <img src="{{ asset('user/assets/img/hotel/detail4.jpg') }}"
                                        class="img-fluid rounded-4 shadow-sm" alt="Galeri Hotel">

                                </div>

                            </div>

                            <div class="text-center mt-5">

                                <a href="{{ route('user.survey') }}" class="btn btn-primary btn-lg rounded-pill px-5">

                                    <i class="bi bi-clipboard-check me-2"></i>

                                    Isi Survei Hotel

                                </a>

                                <a href="{{ route('user.hotel') }}"
                                    class="btn btn-outline-secondary btn-lg rounded-pill px-5 ms-2">

                                    <i class="bi bi-arrow-left me-2"></i>

                                    Kembali

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

    </section>

@endsection
