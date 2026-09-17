@extends('layouts.app')

@section('title', 'Peran Pengguna')

@section('content')

    <div class="page-header">
        <h3 class="page-title">Peran Pengguna</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Pengaturan</li>
                <li class="breadcrumb-item active">Peran Pengguna</li>
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
                    <h4 class="card-title mb-1">Daftar Peran</h4>
                    <p class="text-muted mb-0">
                        Kelola peran/role yang tersedia untuk pengguna.
                    </p>
                </div>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPeran">
                    <i class="mdi mdi-plus"></i>
                    Tambah Peran
                </button>

            </div>

            <div class="table-responsive">

                <table class="table table-striped table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Peran</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                            <th width="170">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($roles as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->nama_peran }}</td>
                                <td>{{ $role->deskripsi ?? '-' }}</td>
                                <td>
                                    @if ($role->status)
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

                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalUbah{{ $role->id }}">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>

                                    <form action="{{ route('peran.destroy', $role) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus peran ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>

                            {{-- Modal Ubah --}}
                            <div class="modal fade" id="modalUbah{{ $role->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ route('peran.update', $role) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Peran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label class="form-label">Nama Peran</label>
                                                    <input type="text" name="nama_peran"
                                                        class="form-control kapital-otomatis"
                                                        value="{{ $role->nama_peran }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Deskripsi</label>
                                                    <textarea name="deskripsi" class="form-control kapital-otomatis" rows="3">{{ $role->deskripsi }}</textarea>
                                                </div>

                                                <div class="mb-0">
                                                    <label class="form-label">Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1" {{ $role->status ? 'selected' : '' }}>Aktif
                                                        </option>
                                                        <option value="0" {{ !$role->status ? 'selected' : '' }}>
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
                                <td colspan="5" class="text-center text-muted py-4">
                                    Belum ada data peran.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

    {{-- Modal Tambah Peran --}}
    <div class="modal fade" id="modalTambahPeran" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('peran.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Peran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Nama Peran</label>
                            <input type="text" name="nama_peran" class="form-control kapital-otomatis" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control kapital-otomatis" rows="3"></textarea>
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

@push('scripts')
    <script>
        // Kapital huruf depan otomatis untuk field Nama Peran & Deskripsi
        document.querySelectorAll('.kapital-otomatis').forEach(function(el) {
            el.addEventListener('input', function(e) {
                var start = e.target.selectionStart;
                var end = e.target.selectionEnd;
                e.target.value = e.target.value.replace(/(^|\s)\S/g, function(huruf) {
                    return huruf.toUpperCase();
                });
                e.target.setSelectionRange(start, end);
            });
        });
    </script>
@endpush
