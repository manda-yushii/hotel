@extends('layouts.user')

@section('title', 'Tentang')

@section('content')

<!-- Hero About -->
<section class="section light-background py-5">

    <div class="container text-center">

        <span class="badge bg-primary mb-3">
            Tentang Kami
        </span>

        <h1 class="display-4 fw-bold">
            Mengenal <span class="text-primary">SurveiHotel</span>
        </h1>

        <p class="lead text-muted mx-auto" style="max-width:700px;">
            SurveiHotel merupakan aplikasi yang membantu pelanggan memberikan
            penilaian terhadap pelayanan hotel secara mudah, cepat, dan
            transparan.
        </p>

    </div>

</section>

<!-- About -->
<section class="about section">

    <div class="container">

        <div class="row gy-5 align-items-center">

            <div class="col-lg-6">

                <img src="{{ asset('user/assets/img/about.jpg') }}"
                    class="img-fluid rounded-4 shadow"
                    alt="Tentang SurveiHotel">

            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold mb-4">
                    Tentang SurveiHotel
                </h2>

                <p>
                    SurveiHotel merupakan website survei pemesanan hotel yang
                    membantu pelanggan memberikan penilaian terhadap pelayanan
                    hotel secara mudah, cepat, dan transparan.
                </p>

                <p>
                    Melalui website ini, pengguna dapat melihat daftar hotel,
                    membaca informasi lengkap, kemudian mengisi survei untuk
                    membantu meningkatkan kualitas pelayanan hotel.
                </p>

                <div class="row mt-4">

                    <div class="col-md-6 mb-4">

                        <div class="d-flex">

                            <i class="bi bi-check-circle-fill text-success fs-2 me-3"></i>

                            <div>

                                <h5>Mudah Digunakan</h5>

                                <p class="text-muted mb-0">
                                    Tampilan sederhana dan nyaman digunakan.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 mb-4">

                        <div class="d-flex">

                            <i class="bi bi-shield-check text-primary fs-2 me-3"></i>

                            <div>

                                <h5>Data Aman</h5>

                                <p class="text-muted mb-0">
                                    Penilaian tersimpan dengan aman.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 mb-4">

                        <div class="d-flex">

                            <i class="bi bi-bar-chart-fill text-warning fs-2 me-3"></i>

                            <div>

                                <h5>Hasil Akurat</h5>

                                <p class="text-muted mb-0">
                                    Membantu hotel meningkatkan kualitas pelayanan.
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 mb-4">

                        <div class="d-flex">

                            <i class="bi bi-people-fill text-danger fs-2 me-3"></i>

                            <div>

                                <h5>Untuk Semua</h5>

                                <p class="text-muted mb-0">
                                    Dapat digunakan oleh seluruh pelanggan hotel.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Statistik -->
<section class="section py-5 light-background">

    <div class="container">

        <div class="section-title text-center mb-5">

            <h2>Mengapa Memilih SurveiHotel?</h2>

            <p>
                Kami membantu pelanggan memberikan penilaian secara cepat,
                mudah, dan terpercaya.
            </p>

        </div>

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm rounded-4 text-center p-4 h-100">

                    <i class="bi bi-building fs-1 text-primary mb-3"></i>

                    <h2 class="fw-bold">50+</h2>

                    <p class="mb-0">Hotel Terdaftar</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm rounded-4 text-center p-4 h-100">

                    <i class="bi bi-people fs-1 text-success mb-3"></i>

                    <h2 class="fw-bold">1000+</h2>

                    <p class="mb-0">Pengguna</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm rounded-4 text-center p-4 h-100">

                    <i class="bi bi-clipboard-data fs-1 text-warning mb-3"></i>

                    <h2 class="fw-bold">500+</h2>

                    <p class="mb-0">Survei Selesai</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm rounded-4 text-center p-4 h-100">

                    <i class="bi bi-star-fill fs-1 text-danger mb-3"></i>

                    <h2 class="fw-bold">98%</h2>

                    <p class="mb-0">Tingkat Kepuasan</p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Cara Kerja -->
<section class="section py-5">

    <div class="container">

        <div class="section-title text-center mb-5">

            <h2>Cara Kerja SurveiHotel</h2>

            <p>
                Hanya membutuhkan beberapa langkah sederhana untuk memberikan
                penilaian terhadap hotel.
            </p>

        </div>

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">

                    <div class="mb-3">

                        <span class="badge bg-primary rounded-circle fs-4 p-3">
                            1
                        </span>

                    </div>

                    <i class="bi bi-building fs-1 text-primary mb-3"></i>

                    <h4>Pilih Hotel</h4>

                    <p class="text-muted">
                        Pilih hotel yang ingin Anda lihat dan nilai.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">

                    <div class="mb-3">

                        <span class="badge bg-success rounded-circle fs-4 p-3">
                            2
                        </span>

                    </div>

                    <i class="bi bi-eye fs-1 text-success mb-3"></i>

                    <h4>Lihat Detail</h4>

                    <p class="text-muted">
                        Baca informasi hotel beserta fasilitas yang tersedia.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">

                    <div class="mb-3">

                        <span class="badge bg-warning rounded-circle fs-4 p-3">
                            3
                        </span>

                    </div>

                    <i class="bi bi-clipboard-check fs-1 text-warning mb-3"></i>

                    <h4>Isi Survei</h4>

                    <p class="text-muted">
                        Berikan penilaian mengenai pelayanan hotel.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">

                    <div class="mb-3">

                        <span class="badge bg-danger rounded-circle fs-4 p-3">
                            4
                        </span>

                    </div>

                    <i class="bi bi-check-circle fs-1 text-danger mb-3"></i>

                    <h4>Selesai</h4>

                    <p class="text-muted">
                        Penilaian Anda membantu meningkatkan kualitas pelayanan hotel.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Visi & Misi -->
<section class="section light-background py-5">

    <div class="container">

        <div class="row gy-5">

            <div class="col-lg-6">

                <div class="card border-0 shadow rounded-4 h-100">

                    <div class="card-body p-5">

                        <div class="mb-3">

                            <i class="bi bi-bullseye fs-1 text-primary"></i>

                        </div>

                        <h3 class="fw-bold mb-3">

                            Visi

                        </h3>

                        <p class="text-muted">

                            Menjadi platform survei hotel yang terpercaya,
                            modern, dan mudah digunakan untuk membantu
                            meningkatkan kualitas pelayanan hotel di Indonesia.

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="card border-0 shadow rounded-4 h-100">

                    <div class="card-body p-5">

                        <div class="mb-3">

                            <i class="bi bi-rocket-takeoff fs-1 text-success"></i>

                        </div>

                        <h3 class="fw-bold mb-3">

                            Misi

                        </h3>

                        <ul class="list-unstyled">

                            <li class="mb-3">

                                <i class="bi bi-check-circle-fill text-success me-2"></i>

                                Menyediakan sistem survei yang mudah digunakan.

                            </li>

                            <li class="mb-3">

                                <i class="bi bi-check-circle-fill text-success me-2"></i>

                                Membantu hotel memperoleh masukan dari pelanggan.

                            </li>

                            <li class="mb-3">

                                <i class="bi bi-check-circle-fill text-success me-2"></i>

                                Mendukung peningkatan kualitas pelayanan hotel.

                            </li>

                            <li>

                                <i class="bi bi-check-circle-fill text-success me-2"></i>

                                Memberikan pengalaman pengguna yang nyaman.

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Call To Action -->
<section class="section py-5">

    <div class="container">

        <div class="card border-0 bg-primary text-white rounded-4 shadow">

            <div class="card-body text-center p-5">

                <h2 class="fw-bold mb-3">

                    Mari Berikan Penilaian Anda

                </h2>

                <p class="mb-4">

                    Pendapat Anda sangat berarti untuk membantu hotel
                    meningkatkan kualitas pelayanan kepada pelanggan.

                </p>

                <a href="{{ route('user.hotel') }}"
                    class="btn btn-light btn-lg rounded-pill px-4 me-2">

                    <i class="bi bi-building me-2"></i>

                    Lihat Hotel

                </a>

                <a href="{{ route('user.survey') }}"
                    class="btn btn-outline-light btn-lg rounded-pill px-4">

                    <i class="bi bi-clipboard-check me-2"></i>

                    Isi Survei

                </a>

            </div>

        </div>

    </div>

</section>

@endsection