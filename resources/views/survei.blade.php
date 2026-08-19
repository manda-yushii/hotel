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

<div class="card">
    <div class="card-body">

        <div class="mb-4">
            <h4 class="card-title mb-1">Form Kepuasan Pelanggan</h4>
            <p class="text-muted">
                Silakan isi data survei kepuasan pelanggan setelah melakukan pemesanan hotel.
            </p>
        </div>

        <form>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Pelanggan</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama pelanggan">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan email">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Hotel</label>
                        <select class="form-control">
                            <option>Pilih Hotel</option>
                            <option>Hotel Nusantara</option>
                            <option>Hotel Merdeka</option>
                            <option>Hotel Harmoni</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nomor Kamar</label>
                        <select class="form-control">
                            <option>Pilih Kamar</option>
                            <option>101</option>
                            <option>205</option>
                            <option>308</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Rating Pelayanan</label>

                <select class="form-control">
                    <option>★★★★★ - Sangat Puas</option>
                    <option>★★★★☆ - Puas</option>
                    <option>★★★☆☆ - Cukup</option>
                    <option>★★☆☆☆ - Kurang</option>
                    <option>★☆☆☆☆ - Sangat Kurang</option>
                </select>
            </div>

            <div class="form-group">
                <label>Kritik & Saran</label>

                <textarea
                    class="form-control"
                    rows="5"
                    placeholder="Masukkan kritik dan saran..."></textarea>
            </div>

            <div class="text-end">

                <button type="reset" class="btn btn-light">
                    <i class="mdi mdi-refresh"></i>
                    Reset
                </button>

                <button type="button" class="btn btn-primary">
                    <i class="mdi mdi-content-save"></i>
                    Simpan
                </button>

            </div>

        </form>

    </div>
</div>

@endsection