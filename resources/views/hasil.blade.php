@extends('layouts.app')

@section('title', 'Hasil Survei')

@section('content')

    <div class="page-header">
        <h3 class="page-title">Hasil Survei</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Survei</li>
                <li class="breadcrumb-item active">Hasil Survei</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h4 class="card-title mb-1">Daftar Hasil Survei</h4>
                    <p class="text-muted mb-0">
                        Menampilkan data hasil survei kepuasan pelanggan.
                    </p>
                </div>

                <button class="btn btn-success">
                    <i class="mdi mdi-file-excel"></i>
                    Export
                </button>

            </div>

            <div class="row mb-4">

                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Cari pelanggan...">
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
                        <option>Semua Rating</option>
                        <option>★★★★★</option>
                        <option>★★★★☆</option>
                        <option>★★★☆☆</option>
                        <option>★★☆☆☆</option>
                        <option>★☆☆☆☆</option>
                    </select>
                </div>

            </div>

            <div class="table-responsive">

                <table class="table table-striped table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Pelanggan</th>
                            <th>Hotel</th>
                            <th>Kamar</th>
                            <th>Rating</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th width="170">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Ahmad</td>
                            <td>Hotel Nusantara</td>
                            <td>101</td>
                            <td>★★★★★</td>
                            <td>03 Agustus 2026</td>
                            <td>
                                <span class="badge badge-success">
                                    Selesai
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
                            <td>Budi</td>
                            <td>Hotel Merdeka</td>
                            <td>205</td>
                            <td>★★★★☆</td>
                            <td>02 Agustus 2026</td>
                            <td>
                                <span class="badge badge-success">
                                    Selesai
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
                            <td>Siti</td>
                            <td>Hotel Harmoni</td>
                            <td>308</td>
                            <td>★★★☆☆</td>
                            <td>01 Agustus 2026</td>
                            <td>
                                <span class="badge badge-warning">
                                    Diproses
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

@endsection
