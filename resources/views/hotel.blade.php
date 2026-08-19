@extends('layouts.app')

@section('title', 'Data Hotel')

@section('content')

<div class="page-header">
    <h3 class="page-title">Data Hotel</h3>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Master Data</li>
            <li class="breadcrumb-item active">Data Hotel</li>
        </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h4 class="card-title mb-1">Daftar Hotel</h4>
                <p class="text-muted mb-0">
                    Kelola seluruh data hotel yang tersedia.
                </p>
            </div>

            <button class="btn btn-primary">
                <i class="mdi mdi-plus-circle me-1"></i>
                Tambah Hotel
            </button>

        </div>

        <div class="row mb-4">

            <div class="col-md-4">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Cari nama hotel...">
            </div>

            <div class="col-md-3">
                <select class="form-control">
                    <option>Semua Kota</option>
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
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
                        <th>Nama Hotel</th>
                        <th>Kota</th>
                        <th>Bintang</th>
                        <th>Total Kamar</th>
                        <th>Status</th>
                        <th width="170">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Hotel Nusantara</td>
                        <td>Jakarta</td>
                        <td>★★★★★</td>
                        <td>120</td>
                        <td>
                            <span class="badge badge-success">
                                Aktif
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
                        <td>Hotel Merdeka</td>
                        <td>Bandung</td>
                        <td>★★★★☆</td>
                        <td>80</td>
                        <td>
                            <span class="badge badge-success">
                                Aktif
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
                        <td>Hotel Harmoni</td>
                        <td>Yogyakarta</td>
                        <td>★★★☆☆</td>
                        <td>65</td>
                        <td>
                            <span class="badge badge-secondary">
                                Nonaktif
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