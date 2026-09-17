@extends('layouts.app')

@section('title', 'Form Survei')

@section('content')

    <div class="page-header">
        <h3 class="page-title">Form Survei</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Survei</li>
                <li class="breadcrumb-item active">Form Survei</li>
            </ol>
        </nav>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">

            <div class="mb-4">
                <h4 class="card-title mb-1">Form Kepuasan Pelanggan</h4>
                <p class="text-muted">
                    Silakan isi data survei kepuasan pelanggan setelah melakukan pemesanan hotel.
                </p>
            </div>

            <form action="{{ route('survei.store') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" class="form-control"
                                placeholder="Masukkan nama pelanggan" value="{{ old('nama_pelanggan') }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan email"
                                value="{{ old('email') }}" required>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hotel</label>
                            <select name="hotel_id" class="form-control" required>
                                <option value="">Pilih Hotel</option>
                                @foreach ($hotels as $hotel)
                                    <option value="{{ $hotel->id }}"
                                        {{ old('hotel_id') == $hotel->id ? 'selected' : '' }}>
                                        {{ $hotel->nama_hotel }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nomor Kamar</label>
                            <select name="kamar_id" class="form-control">
                                <option value="">Pilih Kamar</option>
                                @foreach ($kamar as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('kamar_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->nomor_kamar }} - {{ $item->hotel->nama_hotel ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label>Rating Pelayanan</label>

                    <select name="rating" class="form-control" required>
                        <option value="">Pilih Rating</option>
                        <option value="5" {{ old('rating') == 5 ? 'selected' : '' }}>★★★★★ - Sangat Puas</option>
                        <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>★★★★☆ - Puas</option>
                        <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>★★★☆☆ - Cukup</option>
                        <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>★★☆☆☆ - Kurang</option>
                        <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>★☆☆☆☆ - Sangat Kurang</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Kritik & Saran</label>

                    <textarea name="kritik_saran" class="form-control" rows="5" placeholder="Masukkan kritik dan saran...">{{ old('kritik_saran') }}</textarea>
                </div>

                <div class="text-end">

                    <button type="reset" class="btn btn-light">
                        <i class="mdi mdi-refresh"></i>
                        Reset
                    </button>

                    <button type="submit" class="btn btn-primary">
                        <i class="mdi mdi-content-save"></i>
                        Simpan
                    </button>

                </div>

            </form>

        </div>
    </div>

@endsection
