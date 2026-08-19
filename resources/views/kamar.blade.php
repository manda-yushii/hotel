@extends('layouts.app')

@section('title', 'Data Kamar')

@section('content')

<div class="page-header">
    <h3 class="page-title">Data Kamar</h3>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Master Data</li>
            <li class="breadcrumb-item active">Data Kamar</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h4 class="card-title mb-1">Daftar Kamar</h4>
                <p class="text-muted mb-0">
                    Kelola seluruh data kamar hotel.
                </p>
            </div>

            <button class="btn btn-primary">
                <i class="mdi mdi-plus-circle me-1"></i>
                Tambah Kamar
            </button>

        </div>

        <div class="row mb-4">

            <div class="col-md-4">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Cari nomor kamar...">
            </div>

            <div class="col-md-3">
                <select class="form-control">
                    <option>Semua Hotel</option>
                    <option>Hotel Nusantara</option>
                    <option>Hotel Merdeka</option>
                    <option>Hotel Harmoni</option>
                </select>
            </div>

            <div class="col-md-3">
                <select class="form-control">
                    <option>Semua Status</option>
                    <option>Tersedia</option>
                    <option>Terisi</option>
                </select>
            </div>

        </div>

        <div class="table-responsive">

            <table class="table table-striped table-hover align-middle">

                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nomor Kamar</th>
                        <th>Hotel</th>
                        <th>Tipe</th>
                        <th>Harga / Malam</th>
                        <th>Status</th>
                        <th width="170">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>101</td>
                        <td>Hotel Nusantara</td>
                        <td>Deluxe</td>
                        <td>Rp500.000</td>
                        <td>
                            <span class="badge badge-success">
                                Tersedia
                            </span>
                        </td>
                        <td>

                            <button class="btn btn-warning btn-sm">
                                <i class="mdi mdi-pencil"></i>
                            </button>

                            <button class="btn btn-info btn-sm">
                                <i class="mdi mdi-eye"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="mdi mdi-delete"></i>
                            </button>

                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>205</td>
                        <td>Hotel Merdeka</td>
                        <td>Suite</td>
                        <td>Rp850.000</td>
                        <td>
                            <span class="badge badge-danger">
                                Terisi
                            </span>
                        </td>
                        <td>

                            <button class="btn btn-warning btn-sm">
                                <i class="mdi mdi-pencil"></i>
                            </button>

                            <button class="btn btn-info btn-sm">
                                <i class="mdi mdi-eye"></i>
                            </button>

                            <button class="btn btn-danger btn-sm">
                                <i class="mdi mdi-delete"></i>
                            </button>

                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>308</td>
                        <td>Hotel Harmoni</td>
                        <td>Standard</td>
                        <td>Rp350.000</td>
                        <td>
                            <span class="badge badge-success">
                                Tersedia
                            </span>
                        </td>
                        <td>

                            <button class="btn btn-warning btn-sm">
                                <i class="mdi mdi-pencil"></i>
                            </button>

                            <button class="btn btn-info btn-sm">
                                <i class="mdi mdi-eye"></i>
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

@endsection