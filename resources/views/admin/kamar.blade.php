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

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h4 class="card-title mb-1">Daftar Kamar</h4>
                    <p class="text-muted mb-0">
                        Kelola seluruh data kamar hotel.
                    </p>
                </div>

                @if ($hotels->isEmpty())
                    <button type="button" class="btn btn-primary" disabled title="Tambah Data Hotel dulu">
                        <i class="mdi mdi-plus-circle me-1"></i>
                        Tambah Kamar
                    </button>
                @else
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modalTambahKamar">
                        <i class="mdi mdi-plus-circle me-1"></i>
                        Tambah Kamar
                    </button>
                @endif

            </div>

            @if ($hotels->isEmpty())
                <div class="alert alert-warning">
                    Belum ada data hotel. Tambahkan Data Hotel dulu sebelum bisa menambah kamar.
                </div>
            @endif

            <div class="row mb-4">

                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Cari nomor kamar...">
                </div>

                <div class="col-md-3">
                    <select class="form-control">
                        <option>Semua Hotel</option>
                        @foreach ($hotels as $hotel)
                            <option>{{ $hotel->nama_hotel }}</option>
                        @endforeach
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

                        @forelse ($kamar as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomor_kamar }}</td>
                                <td>{{ $item->hotel->nama_hotel ?? '-' }}</td>
                                <td>{{ $item->tipe }}</td>
                                <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                                <td>
                                    @if ($item->status)
                                        <span class="badge badge-success">
                                            Tersedia
                                        </span>
                                    @else
                                        <span class="badge badge-danger">
                                            Terisi
                                        </span>
                                    @endif
                                </td>
                                <td>

                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalUbah{{ $item->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>

                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalLihat{{ $item->id }}">
                                        <i class="mdi mdi-eye"></i>
                                    </button>

                                    <form action="{{ route('kamar.destroy', $item) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus kamar ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>

                            {{-- Modal Lihat --}}
                            <div class="modal fade" id="modalLihat{{ $item->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Kamar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Nomor Kamar</strong><br>{{ $item->nomor_kamar }}</p>
                                            <p><strong>Hotel</strong><br>{{ $item->hotel->nama_hotel ?? '-' }}</p>
                                            <p><strong>Tipe</strong><br>{{ $item->tipe }}</p>
                                            <p><strong>Harga /
                                                    Malam</strong><br>Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                                            <p class="mb-0">
                                                <strong>Status</strong><br>{{ $item->status ? 'Tersedia' : 'Terisi' }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Ubah --}}
                            <div class="modal fade" id="modalUbah{{ $item->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('kamar.update', $item) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Kamar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label class="form-label">Hotel</label>
                                                    <select name="hotel_id" class="form-control" required>
                                                        @foreach ($hotels as $hotel)
                                                            <option value="{{ $hotel->id }}"
                                                                {{ $item->hotel_id == $hotel->id ? 'selected' : '' }}>
                                                                {{ $hotel->nama_hotel }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Nomor Kamar</label>
                                                    <input type="text" name="nomor_kamar" class="form-control"
                                                        value="{{ $item->nomor_kamar }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Tipe</label>
                                                    <input type="text" name="tipe" class="form-control"
                                                        value="{{ $item->tipe }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Harga / Malam</label>
                                                    <input type="number" name="harga" class="form-control"
                                                        step="0.01" min="0" value="{{ $item->harga }}"
                                                        required>
                                                </div>

                                                <div class="mb-0">
                                                    <label class="form-label">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1" {{ $item->status ? 'selected' : '' }}>
                                                            Tersedia</option>
                                                        <option value="0" {{ !$item->status ? 'selected' : '' }}>
                                                            Terisi</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">
                                    Belum ada data kamar.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

    @if ($hotels->isNotEmpty())
        {{-- Modal Tambah Kamar --}}
        <div class="modal fade" id="modalTambahKamar" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('kamar.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Kamar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="form-label">Hotel</label>
                                <select name="hotel_id" class="form-control" required>
                                    <option value="">-- Pilih Hotel --</option>
                                    @foreach ($hotels as $hotel)
                                        <option value="{{ $hotel->id }}">{{ $hotel->nama_hotel }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nomor Kamar</label>
                                <input type="text" name="nomor_kamar" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tipe</label>
                                <input type="text" name="tipe" class="form-control"
                                    placeholder="Standard / Deluxe / Suite" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Harga / Malam</label>
                                <input type="number" name="harga" class="form-control" step="0.01" min="0"
                                    required>
                            </div>

                            <div class="mb-0">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Terisi</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

@endsection