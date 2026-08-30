@extends('layouts.app')

@section('title', 'Profil')

@section('content')

    <div class="page-header">
        <h3 class="page-title">Profil</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Pengaturan</li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </nav>
    </div>

    <div class="row">

        <div class="col-lg-4 grid-margin stretch-card">

            <div class="card">
                <div class="card-body text-center">

                    <img src="{{ asset('assets/images/profil.jpg') }}" class="rounded-circle mb-3" width="120"
                        height="120" alt="Profile">

                    <h4 class="mb-1">{{ $user->name }}</h4>

                    <p class="text-muted mb-3">
                        {{ $user->role->nama_peran ?? 'Belum ada role' }}
                    </p>

                    <span class="badge {{ $user->status ? 'badge-success' : 'badge-danger' }}">
                        {{ $user->status ? 'Aktif' : 'Nonaktif' }}
                    </span>

                    <hr>

                    <div class="text-start">

                        <p>
                            <strong>Email :</strong><br>
                            {{ $user->email }}
                        </p>

                        <p>
                            <strong>Role :</strong><br>
                            {{ $user->role->nama_peran ?? 'Belum ada role' }}
                        </p>

                        <p class="mb-0">
                            <strong>Bergabung :</strong><br>
                            {{ $user->created_at->translatedFormat('F Y') }}
                        </p>

                    </div>

                </div>
            </div>

        </div>

        <div class="col-lg-8 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">
                        Informasi Profil
                    </h4>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" class="form-control" value="{{ $user->role->nama_peran ?? '-' }}"
                                        readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" name="telepon" class="form-control"
                                        value="{{ old('telepon', $user->telepon) }}">
                                    @error('telepon')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="4">{{ old('alamat', $user->alamat) }}</textarea>
                            @error('alamat')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-end">

                            <button type="reset" class="btn btn-light">
                                <i class="mdi mdi-refresh"></i>
                                Reset
                            </button>

                            <button type="submit" class="btn btn-primary">
                                <i class="mdi mdi-content-save"></i>
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
