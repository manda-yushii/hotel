@extends('layouts.auth')

@section('title', 'Register')

@section('content')

    <!-- Hero -->
    <section class="section light-background py-5">
        <div class="container text-center">
            <span class="badge bg-success mb-3">
                Bergabung Bersama Kami
            </span>
            <h1 class="display-4 fw-bold">
                Daftar <span class="text-primary">SurveiHotel</span>
            </h1>
            <p class="lead text-muted mx-auto" style="max-width:700px;">
                Buat akun baru untuk mulai memberikan penilaian terhadap hotel.
            </p>
        </div>
    </section>

    <!-- Register -->
    <section class="section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card border-0 shadow rounded-4">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <i class="bi bi-person-plus-fill display-1 text-success"></i>
                                <h3 class="fw-bold mt-3">
                                    Buat Akun Baru
                                </h3>
                                <p class="text-muted">
                                    Lengkapi data di bawah ini untuk membuat akun.
                                </p>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('register.attempt') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">
                                        Nama Lengkap
                                    </label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email"
                                        value="{{ old('email') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">
                                        Password
                                    </label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Masukkan Password" required>
                                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                            <i class="bi bi-eye" id="iconPassword"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">
                                        Konfirmasi Password
                                    </label>
                                    <div class="input-group">
                                        <input type="password" name="password_confirmation" id="passwordConfirmation"
                                            class="form-control" placeholder="Masukkan Ulang Password" required>
                                        <button type="button" class="btn btn-outline-secondary"
                                            id="togglePasswordConfirmation">
                                            <i class="bi bi-eye" id="iconPasswordConfirmation"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-lg rounded-pill">
                                        <i class="bi bi-person-check-fill me-2"></i>
                                        Daftar
                                    </button>
                                </div>
                            </form>
                            <hr class="my-4">
                            <div class="text-center">
                                Sudah punya akun?
                                <a href="{{ route('login') }}" class="fw-bold text-decoration-none">
                                Login Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function pasangToggle(idInput, idTombol, idIcon) {
            document.getElementById(idTombol).addEventListener('click', function() {
                const input = document.getElementById(idInput);
                const icon = document.getElementById(idIcon);

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.replace('bi-eye', 'bi-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.replace('bi-eye-slash', 'bi-eye');
                }
            });
        }

        pasangToggle('password', 'togglePassword', 'iconPassword');
        pasangToggle('passwordConfirmation', 'togglePasswordConfirmation', 'iconPasswordConfirmation');
    </script>
@endpush
