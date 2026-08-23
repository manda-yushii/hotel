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
                        @foreach ($survei->pluck('hotel.nama_hotel')->filter()->unique() as $namaHotel)
                            <option>{{ $namaHotel }}</option>
                        @endforeach
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

                        @forelse ($survei as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_pelanggan }}</td>
                                <td>{{ $item->hotel->nama_hotel ?? '-' }}</td>
                                <td>{{ $item->kamar->nomor_kamar ?? '-' }}</td>
                                <td>{{ str_repeat('★', $item->rating) }}{{ str_repeat('☆', 5 - $item->rating) }}</td>
                                <td>{{ $item->created_at->translatedFormat('d F Y') }}</td>
                                <td>
                                    @if ($item->status)
                                        <span class="badge badge-success">
                                            Selesai
                                        </span>
                                    @else
                                        <span class="badge badge-warning">
                                            Diproses
                                        </span>
                                    @endif
                                </td>
                                <td>

                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalLihat{{ $item->id }}">
                                        <i class="mdi mdi-eye"></i>
                                    </button>

                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalUbah{{ $item->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>

                                    <form action="{{ route('hasil.destroy', $item) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data survei ini?');">
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
                                            <h5 class="modal-title">Detail Survei</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Pelanggan</strong><br>{{ $item->nama_pelanggan }}</p>
                                            <p><strong>Email</strong><br>{{ $item->email }}</p>
                                            <p><strong>Hotel</strong><br>{{ $item->hotel->nama_hotel ?? '-' }}</p>
                                            <p><strong>Kamar</strong><br>{{ $item->kamar->nomor_kamar ?? '-' }}</p>
                                            <p><strong>Rating</strong><br>{{ str_repeat('★', $item->rating) }}{{ str_repeat('☆', 5 - $item->rating) }}
                                            </p>
                                            <p><strong>Kritik & Saran</strong><br>{{ $item->kritik_saran ?? '-' }}</p>
                                            <p><strong>Tanggal</strong><br>{{ $item->created_at->translatedFormat('d F Y') }}
                                            </p>
                                            <p class="mb-0">
                                                <strong>Status</strong><br>{{ $item->status ? 'Selesai' : 'Diproses' }}</p>
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
                                        <form action="{{ route('hasil.update', $item) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Data Survei</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label class="form-label">Nama Pelanggan</label>
                                                    <input type="text" name="nama_pelanggan" class="form-control"
                                                        value="{{ $item->nama_pelanggan }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ $item->email }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Rating</label>
                                                    <select name="rating" class="form-control" required>
                                                        <option value="5" {{ $item->rating == 5 ? 'selected' : '' }}>
                                                            ★★★★★ - Sangat Puas</option>
                                                        <option value="4" {{ $item->rating == 4 ? 'selected' : '' }}>
                                                            ★★★★☆ - Puas</option>
                                                        <option value="3" {{ $item->rating == 3 ? 'selected' : '' }}>
                                                            ★★★☆☆ - Cukup</option>
                                                        <option value="2" {{ $item->rating == 2 ? 'selected' : '' }}>
                                                            ★★☆☆☆ - Kurang</option>
                                                        <option value="1" {{ $item->rating == 1 ? 'selected' : '' }}>
                                                            ★☆☆☆☆ - Sangat Kurang</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Kritik & Saran</label>
                                                    <textarea name="kritik_saran" class="form-control" rows="3">{{ $item->kritik_saran }}</textarea>
                                                </div>

                                                <input type="hidden" name="hotel_id" value="{{ $item->hotel_id }}">
                                                <input type="hidden" name="kamar_id" value="{{ $item->kamar_id }}">

                                                <div class="mb-0">
                                                    <label class="form-label">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1" {{ $item->status ? 'selected' : '' }}>
                                                            Selesai</option>
                                                        <option value="0" {{ !$item->status ? 'selected' : '' }}>
                                                            Diproses</option>
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
                                <td colspan="8" class="text-center text-muted py-4">
                                    Belum ada data hasil survei.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

@endsection
