@extends('layouts.auth')

@section('title', 'Login')

@section('content')

    <!-- Hero -->
    <section class="section light-background py-5">
        <div class="container text-center">
            <span class="badge bg-primary mb-3">
                Selamat Datang
            </span>
            <h1 class="display-4 fw-bold">
                Login <span class="text-primary">SurveiHotel</span>
            </h1>
            <p class="lead text-muted mx-auto" style="max-width:700px;">
                Masuk ke akun Anda untuk mengakses layanan SurveiHotel.
            </p>
        </div>
    </section>
    <!-- Login -->
    <section class="section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card border-0 shadow rounded-4">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <i class="bi bi-person-circle display-1 text-primary"></i>
                                <h3 class="fw-bold mt-3">
                                    Login Akun
                                </h3>
                                <p class="text-muted">
                                    Silakan masukkan email dan password Anda.
                                </p>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" placeholder="Masukkan Email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Password
                                    </label>
                                    <input type="password" class="form-control" placeholder="Masukkan Password">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember">
                                        <label class="form-check-label" for="remember">
                                            Ingat Saya
                                        </label>
                                    </div>
                                    <a href="#" class="text-decoration-none">
                                        Lupa Password?
                                    </a>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                                        <i class="bi bi-box-arrow-in-right me-2"></i>
                                        Login
                                    </button>
                                </div>
                            </form>
                            <hr class="my-4">
                            <div class="text-center">
                                Belum punya akun?
                                <a href="{{ route('register') }}" class="fw-bold text-decoration-none">
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
