@extends('layouts.app')

@section('title', 'Data Pengguna')

@section('content')

<div class="page-header">
    <h3 class="page-title">Data Pengguna</h3>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Pengaturan</li>
            <li class="breadcrumb-item active">Data Pengguna</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h4 class="card-title mb-1">Daftar Pengguna</h4>
                <p class="text-muted mb-0">
                    Kelola seluruh data pengguna aplikasi.
                </p>
            </div>

            <button class="btn btn-primary">
                <i class="mdi mdi-account-plus"></i>
                Tambah Pengguna
            </button>

        </div>

        <div class="row mb-4">

            <div class="col-md-4">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Cari nama pengguna...">
            </div>

            <div class="col-md-3">
                <select class="form-control">
                    <option>Semua Role</option>
                    <option>Administrator</option>
                    <option>Petugas</option>
                </select>
            </div>

            <div class="col-md-3">
                <select class="form-control">
                    <option>Semua Status</option>
                    <option>Aktif</option>
                    <option>Nonaktif</option>
                </select>
            </div>

        </div>

        <div class="table-responsive">

            <table class="table table-striped table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th width="170">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Administrator</td>
                        <td>admin@surveihotel.com</td>
                        <td>
                            <span class="badge badge-primary">
                                Administrator
                            </span>
                        </td>
                        <td>
                            <span class="badge badge-success">
                                Aktif
                            </span>
                        </td>
                        <td>

                            <button class="btn btn-info btn-sm">
                                <i class="mdi mdi-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="mdi mdi-pencil"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="mdi mdi-delete"></i>
                            </button>

                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Petugas Hotel</td>
                        <td>petugas@surveihotel.com</td>
                        <td>
                            <span class="badge badge-info">
                                Petugas
                            </span>
                        </td>
                        <td>
                            <span class="badge badge-success">
                                Aktif
                            </span>
                        </td>
                        <td>

                            <button class="btn btn-info btn-sm">
                                <i class="mdi mdi-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="mdi mdi-pencil"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="mdi mdi-delete"></i>
                            </button>

                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Operator</td>
                        <td>operator@surveihotel.com</td>
                        <td>
                            <span class="badge badge-secondary">
                                Operator
                            </span>
                        </td>
                        <td>
                            <span class="badge badge-danger">
                                Nonaktif
                            </span>
                        </td>
                        <td>

                            <button class="btn btn-info btn-sm">
                                <i class="mdi mdi-eye"></i>
                            </button>

                            <button class="btn btn-warning btn-sm">
                                <i class="mdi mdi-pencil"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="mdi mdi-delete"></i>
                            </button>

                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>
</div>

<!-- modal tambah pengguna -->
@endsection