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

                <img
                    src="{{ asset('assets/images/profil.jpg') }}"
                    class="rounded-circle mb-3"
                    width="120"
                    height="120"
                    alt="Profile">

                <h4 class="mb-1">Administrator</h4>

                <p class="text-muted mb-3">
                    Administrator Sistem
                </p>

                <span class="badge badge-success">
                    Aktif
                </span>

                <hr>

                <div class="text-start">

                    <p>
                        <strong>Email :</strong><br>
                        admin@surveihotel.com
                    </p>

                    <p>
                        <strong>Role :</strong><br>
                        Administrator
                    </p>

                    <p class="mb-0">
                        <strong>Bergabung :</strong><br>
                        Agustus 2026
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

                <form>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    value="Amanda Lutfiana Ulfa cute">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    value="admin@surveihotel.com">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    value="Administrator"
                                    readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    value="081234567890">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea
                            class="form-control"
                            rows="4">Jl. Contoh No. 123, Indonesia</textarea>
                    </div>

                    <div class="text-end">

                        <button type="reset" class="btn btn-light">
                            <i class="mdi mdi-refresh"></i>
                            Reset
                        </button>

                        <button type="button" class="btn btn-primary">
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