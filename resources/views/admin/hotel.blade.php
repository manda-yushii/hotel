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
                    <h4 class="card-title mb-1">Daftar Hotel</h4>
                    <p class="text-muted mb-0">
                        Kelola seluruh data hotel yang tersedia.
                    </p>
                </div>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahHotel">
                    <i class="mdi mdi-plus-circle me-1"></i>
                    Tambah Hotel
                </button>

            </div>

            <div class="row mb-4">

                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Cari nama hotel...">
                </div>

                <div class="col-md-3">
                    <select class="form-control">
                        <option>Semua Kota</option>
                        @foreach ($hotels->pluck('kota')->unique() as $kota)
                            <option>{{ $kota }}</option>
                        @endforeach
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

                        @forelse ($hotels as $hotel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $hotel->nama_hotel }}</td>
                                <td>{{ $hotel->kota }}</td>
                                <td>
                                    @if ($hotel->rating)
                                        {{ str_repeat('★', (int) round($hotel->rating)) }}{{ str_repeat('☆', 5 - (int) round($hotel->rating)) }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>-</td>
                                <td>
                                    @if ($hotel->status)
                                        <span class="badge badge-success">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="badge badge-secondary">
                                            Nonaktif
                                        </span>
                                    @endif
                                </td>
                                <td>

                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalUbah{{ $hotel->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>

                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalLihat{{ $hotel->id }}">
                                        <i class="mdi mdi-eye"></i>
                                    </button>

                                    <form action="{{ route('hotel.destroy', $hotel) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus hotel ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>

                            {{-- Modal Lihat --}}
                            <div class="modal fade" id="modalLihat{{ $hotel->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Nama Hotel</strong><br>{{ $hotel->nama_hotel }}</p>
                                            <p><strong>Deskripsi</strong><br>{{ $hotel->deskripsi ?? '-' }}</p>
                                            <p><strong>Alamat</strong><br>{{ $hotel->alamat }}</p>
                                            <p><strong>Kota</strong><br>{{ $hotel->kota }}</p>
                                            <p><strong>Telepon</strong><br>{{ $hotel->telepon ?? '-' }}</p>
                                            <p><strong>Email</strong><br>{{ $hotel->email ?? '-' }}</p>
                                            <p><strong>Rating</strong><br>{{ $hotel->rating ?? '-' }}</p>
                                            <p class="mb-0">
                                                <strong>Status</strong><br>{{ $hotel->status ? 'Aktif' : 'Nonaktif' }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Ubah --}}
                            <div class="modal fade" id="modalUbah{{ $hotel->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('hotel.update', $hotel) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Hotel</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label class="form-label">Nama Hotel</label>
                                                    <input type="text" name="nama_hotel" class="form-control"
                                                        value="{{ $hotel->nama_hotel }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control" rows="2">{{ $hotel->deskripsi }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Alamat</label>
                                                    <textarea name="alamat" class="form-control" rows="2" required>{{ $hotel->alamat }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Kota</label>
                                                    <input type="text" name="kota" class="form-control"
                                                        value="{{ $hotel->kota }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Telepon</label>
                                                    <input type="text" name="telepon" class="form-control"
                                                        value="{{ $hotel->telepon }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ $hotel->email }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Rating (0 - 5)</label>
                                                    <input type="number" name="rating" class="form-control"
                                                        step="0.1" min="0" max="5"
                                                        value="{{ $hotel->rating }}">
                                                </div>

                                                <div class="mb-0">
                                                    <label class="form-label">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1" {{ $hotel->status ? 'selected' : '' }}>
                                                            Aktif</option>
                                                        <option value="0" {{ !$hotel->status ? 'selected' : '' }}>
                                                            Nonaktif</option>
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
                                    Belum ada data hotel.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

    {{-- Modal Tambah Hotel --}}
    <div class="modal fade" id="modalTambahHotel" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('hotel.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Hotel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Nama Hotel</label>
                            <input type="text" name="nama_hotel" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="2"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="2" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kota</label>
                            <input type="text" name="kota" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Telepon</label>
                            <input type="text" name="telepon" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Rating (0 - 5)</label>
                            <input type="number" name="rating" class="form-control" step="0.1" min="0"
                                max="5">
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
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

@endsection
