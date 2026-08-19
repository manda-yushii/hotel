@extends('layouts.user')

@section('title', 'Survei Hotel')

@section('content')

    <section class="page-title section light-background">
        <div class="container text-center">
            <h1>Survei Kepuasan Hotel</h1>
            <p>
                Berikan penilaian Anda terhadap pelayanan hotel.
            </p>
        </div>
    </section>

    <section class="section py-5">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="card shadow-sm border-0 rounded-4">

                        <div class="card-body p-5">

                            <h3 class="fw-bold mb-4">
                                Form Penilaian Hotel
                            </h3>

                            <p class="text-muted">
                                Silakan berikan penilaian Anda terhadap pelayanan hotel.
                            </p>

                            <hr>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Nama Hotel
                                </label>

                                <input type="text" class="form-control" value="Hotel Nusantara" readonly>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Nama Pengunjung
                                </label>

                                <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Email
                                </label>

                                <input type="email" class="form-control" placeholder="nama@email.com">
                            </div>

                            <hr class="my-4">

                            <h4 class="fw-bold mb-4">
                                Penilaian Pelayanan
                            </h4>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Pelayanan Staff
                                </label>

                                <select class="form-select">
                                    <option selected disabled>Pilih Penilaian</option>
                                    <option>Sangat Baik ⭐⭐⭐⭐⭐</option>
                                    <option>Baik ⭐⭐⭐⭐</option>
                                    <option>Cukup ⭐⭐⭐</option>
                                    <option>Kurang ⭐⭐</option>
                                    <option>Sangat Kurang ⭐</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Kebersihan Hotel
                                </label>

                                <select class="form-select">
                                    <option selected disabled>Pilih Penilaian</option>
                                    <option>Sangat Baik ⭐⭐⭐⭐⭐</option>
                                    <option>Baik ⭐⭐⭐⭐</option>
                                    <option>Cukup ⭐⭐⭐</option>
                                    <option>Kurang ⭐⭐</option>
                                    <option>Sangat Kurang ⭐</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Fasilitas Hotel
                                </label>

                                <select class="form-select">
                                    <option selected disabled>Pilih Penilaian</option>
                                    <option>Sangat Baik ⭐⭐⭐⭐⭐</option>
                                    <option>Baik ⭐⭐⭐⭐</option>
                                    <option>Cukup ⭐⭐⭐</option>
                                    <option>Kurang ⭐⭐</option>
                                    <option>Sangat Kurang ⭐</option>
                                </select>
                            </div>
                            <hr class="my-4">
                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Saran dan Masukan
                                </label>
                                <textarea class="form-control" rows="5" placeholder="Tuliskan pengalaman atau saran Anda..."></textarea>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="rekomendasi">
                                <label class="form-check-label" for="rekomendasi">
                                    Saya bersedia merekomendasikan hotel ini kepada orang lain.
                                </label>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('user.hotel') }}" class="btn btn-outline-secondary rounded-pill px-4">
                                    <i class="bi bi-arrow-left me-2"></i>
                                    Kembali
                                </a>
                                <button type="submit" class="btn btn-primary rounded-pill px-5">
                                    <i class="bi bi-send me-2"></i>
                                    Kirim Survei
                                </button>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
