@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="page-header">
        <h3 class="page-title">Dashboard</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-3 grid-margin stretch-card">
            <div class="card bg-primary text-white shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6>Total Hotel</h6>
                        <h2 class="mb-0">{{ $totalHotel }}</h2>
                    </div>
                    <i class="mdi mdi-office-building mdi-48px"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 grid-margin stretch-card">
            <div class="card bg-success text-white shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6>Total Kamar</h6>
                        <h2 class="mb-0">{{ $totalKamar }}</h2>
                    </div>
                    <i class="mdi mdi-door mdi-48px"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 grid-margin stretch-card">
            <div class="card bg-warning text-white shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6>Total Survei</h6>
                        <h2 class="mb-0">{{ $totalSurvei }}</h2>
                    </div>
                    <i class="mdi mdi-clipboard-text mdi-48px"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 grid-margin stretch-card">
            <div class="card bg-danger text-white shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6>Total Pengguna</h6>
                        <h2 class="mb-0">{{ $totalPengguna }}</h2>
                    </div>
                    <i class="mdi mdi-account-group mdi-48px"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">
                        Selamat Datang 👋
                    </h4>

                    <p class="text-muted">
                        Selamat datang di aplikasi
                        <strong>Survei Pemesanan Hotel</strong>, {{ auth()->user()->name }}.
                    </p>

                    <hr>
                    <div class="row text-center mt-4">
                        <div class="col-md-4 mb-3">
                            <a href="{{ url('/hotel') }}" class="text-decoration-none text-dark">
                                <div class="border rounded p-4 h-100 shadow-sm">
                                    <i class="mdi mdi-office-building text-primary" style="font-size:40px"></i>

                                    <h6 class="mt-3 mb-1 fw-bold">
                                        Data Hotel
                                    </h6>
                                    <small class="text-muted">
                                        Kelola data hotel
                                    </small>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 mb-3">
                            <a href="{{ url('/kamar') }}" class="text-decoration-none text-dark">
                                <div class="border rounded p-4 h-100 shadow-sm">
                                    <i class="mdi mdi-bed text-success" style="font-size:40px"></i>

                                    <h6 class="mt-3 mb-1 fw-bold">
                                        Data Kamar
                                    </h6>
                                    <small class="text-muted">
                                        Kelola data kamar
                                    </small>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4 mb-3">
                            <a href="{{ url('/survei') }}" class="text-decoration-none text-dark">
                                <div class="border rounded p-4 h-100 shadow-sm">
                                    <i class="mdi mdi-clipboard-check text-warning" style="font-size:40px"></i>

                                    <h6 class="mt-3 mb-1 fw-bold">
                                        Form Survei
                                    </h6>
                                    <small class="text-muted">
                                        Kelola survei pelanggan
                                    </small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Aktivitas Terbaru
                    </h4>
                    <ul class="list-group">
                        @forelse ($aktivitas as $item)
                            <li class="list-group-item d-flex justify-content-between">
                                {{ $item['label'] }}
                                <span class="badge badge-{{ $item['color'] }}">
                                    {{ $item['badge'] }}
                                </span>
                            </li>
                        @empty
                            <li class="list-group-item text-muted text-center">
                                Belum ada aktivitas.
                            </li>
                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
