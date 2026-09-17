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
                    <h4 class="card-title mb-1">Daftar Pengguna</h4>
                    <p class="text-muted mb-0">
                        Kelola seluruh data pengguna aplikasi.
                    </p>
                </div>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPengguna">
                    <i class="mdi mdi-account-plus"></i>
                    Tambah Pengguna
                </button>

            </div>

            <div class="row mb-4">

                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Cari nama pengguna...">
                </div>

                <div class="col-md-3">
                    <select class="form-control">
                        <option>Semua Role</option>
                        @foreach ($roles as $role)
                            <option>{{ $role->nama_peran }}</option>
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th width="170">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->role)
                                        <span class="badge badge-primary">
                                            {{ $user->role->nama_peran }}
                                        </span>
                                    @else
                                        <span class="badge badge-secondary">
                                            Belum ada role
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if ($user->status)
                                        <span class="badge badge-success">
                                            Aktif
                                        </span>
                                    @else
                                        <span class="badge badge-danger">
                                            Nonaktif
                                        </span>
                                    @endif
                                </td>
                                <td>

                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalLihat{{ $user->id }}">
                                        <i class="mdi mdi-eye"></i>
                                    </button>

                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalUbah{{ $user->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>

                                    <form action="{{ route('pengguna.destroy', $user) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus pengguna ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>

                            {{-- Modal Lihat --}}
                            <div class="modal fade" id="modalLihat{{ $user->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Pengguna</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Nama</strong><br>{{ $user->name }}</p>
                                            <p><strong>Email</strong><br>{{ $user->email }}</p>
                                            <p><strong>Role</strong><br>{{ $user->role->nama_peran ?? '-' }}</p>
                                            <p class="mb-0">
                                                <strong>Status</strong><br>{{ $user->status ? 'Aktif' : 'Nonaktif' }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal Ubah --}}
                            <div class="modal fade" id="modalUbah{{ $user->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('pengguna.update', $user) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Pengguna</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $user->name }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        value="{{ $user->email }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Kosongkan jika tidak ingin mengganti password">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Role</label>
                                                    <select name="role_id" class="form-control">
                                                        <option value="">-- Pilih Role --</option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}"
                                                                {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                                                {{ $role->nama_peran }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-0">
                                                    <label class="form-label">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1" {{ $user->status ? 'selected' : '' }}>Aktif
                                                        </option>
                                                        <option value="0" {{ !$user->status ? 'selected' : '' }}>
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
                                <td colspan="6" class="text-center text-muted py-4">
                                    Belum ada data pengguna.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

    {{-- Modal Tambah Pengguna --}}
    <div class="modal fade" id="modalTambahPengguna" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('pengguna.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Pengguna</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="role_id" class="form-control">
                                <option value="">-- Pilih Role --</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->nama_peran }}</option>
                                @endforeach
                            </select>
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
