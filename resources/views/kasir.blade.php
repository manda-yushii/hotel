@extends('layouts.kasir')
@section('title', 'Kasir Hotel')

@push('styles')
    <style>
        .kasir-header {
            margin-bottom: 1rem;
        }

        .kolom-layanan {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .kolom-layanan .card-body {
            display: flex;
            flex-direction: column;
            min-height: 0;
        }

        .layanan-scroll {
            overflow-y: auto;
            flex: 1 1 auto;
            align-content: flex-start;
        }

        .kartu-pesanan .card-body {
            padding: 0.85rem 1rem;
        }

        .kartu-pesanan .table-responsive {
            max-height: 260px;
            overflow-y: auto;
        }

        .kartu-pembayaran .card-body {
            padding: 0.85rem 1rem;
        }

        .kartu-pembayaran .card-title {
            margin-bottom: 0.5rem !important;
            font-size: 1rem;
        }

        @media (max-width: 991.98px) {
            .kolom-layanan {
                height: auto;
                overflow: visible;
            }

            .layanan-scroll {
                overflow-y: visible;
                max-height: none;
            }
        }

        .keypad-wrap {
            max-width: 180px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 6px;
        }

        .keypad-btn {
            aspect-ratio: 1 / 1;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 10px;
            transition: transform .1s ease, box-shadow .1s ease;
        }

        .keypad-btn:active,
        .keypad-btn.keypad-pressed {
            transform: scale(0.95);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, .15);
        }

        .keypad-btn.tombol-angka.keypad-pressed,
        .keypad-btn.tombol-angka:active {
            background-color: #6c74d6;
            border-color: #6c74d6;
            color: #fff;
        }

        .layanan-btn {
            appearance: none;
            -webkit-appearance: none;
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 14px;
            text-align: left;
            white-space: normal;
            padding: 0.75rem !important;
            gap: 0.75rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
            transition: transform .15s ease, box-shadow .15s ease, border-color .15s ease;
        }

        .layanan-btn:hover {
            border-color: #6f7bf7;
            box-shadow: 0 6px 16px rgba(90, 100, 220, 0.15);
            transform: translateY(-3px);
        }

        .layanan-btn:active {
            transform: translateY(-1px);
            box-shadow: 0 2px 6px rgba(90, 100, 220, 0.15);
        }

        .layanan-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f2fb;
            color: #6f7bf7;
            font-size: 1.5rem;
        }

        .layanan-keterangan {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 0;
        }

        .layanan-nama {
            color: #212529;
            line-height: 1.2;
        }

        .layanan-kategori {
            color: #868e96;
            text-transform: uppercase;
            letter-spacing: .03em;
            font-size: .72rem;
        }

        .layanan-harga {
            color: #4d55c4;
        }

        #daftarTransaksi tr td {
            vertical-align: middle !important;
            padding: 1.1rem 0.5rem !important;
            font-size: 0.95rem;
            line-height: 1.4;
        }
    </style>
@endpush

@section('content')

    <div class="kasir-header d-flex justify-content-between align-items-start">
        <div>
            <h4 class="fw-bold mb-0">Kasir Hotel</h4>
            <p class="text-muted mb-0">Kelola transaksi dan pembayaran tamu</p>
        </div>

        <div class="text-end">
            <p class="mb-1 small text-muted">
                Login sebagai <strong>{{ auth()->user()->name }}</strong>
            </p>
            <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin ingin logout?')">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">
                    <i class="mdi mdi-logout"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>

    <div class="row g-3" style="height: calc(100% - 70px);">

        {{-- Kolom kiri: daftar layanan yang bisa diklik untuk ditambahkan ke transaksi --}}
        <div class="col-lg-6 kolom-layanan">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title mb-3">Layanan Hotel</h5>
                    <div class="row g-2 layanan-scroll" id="daftarLayanan">
                        @foreach ($layanan as $item)
                            <div class="col-6 col-md-4">
                                <button type="button" class="layanan-btn w-100 d-flex align-items-center"
                                    data-id="{{ $item['id'] }}" data-nama="{{ $item['nama'] }}"
                                    data-harga="{{ $item['harga'] }}">
                                    <span class="layanan-icon"><i class="mdi {{ $item['icon'] }}"></i></span>
                                    <span class="layanan-keterangan">
                                        <span class="fw-semibold layanan-nama">{{ $item['nama'] }}</span>
                                        <span class="layanan-kategori">{{ $item['kategori'] }}</span>
                                        <span
                                            class="fw-bold layanan-harga">Rp{{ number_format($item['harga'], 0, ',', '.') }}</span>
                                    </span>
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Kolom kanan: rincian transaksi, keypad angka, dan pembayaran --}}
        <div class="col-lg-6 kolom-transaksi">

            <div class="card mb-2 kartu-pesanan">
                <div class="card-body">
                    <h5 class="card-title mb-2">Detail Transaksi</h5>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Layanan</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-end">Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="daftarTransaksi">
                                <tr id="transaksiKosong">
                                    <td colspan="4" class="text-center text-muted">Belum ada layanan dipilih</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="my-2">
                    <div class="d-flex justify-content-between fs-5">
                        <span class="fw-semibold">Total</span>
                        <span class="fw-bold text-primary" id="labelTotal">Rp0</span>
                    </div>
                </div>
            </div>

            <div class="card mb-2 kartu-pembayaran">
                <div class="card-body">
                    <h5 class="card-title mb-2">Pembayaran</h5>

                    <label class="form-label mb-1 small">Uang Dibayar</label>
                    <input type="text" class="form-control text-end mb-2" id="labelBayar" value="Rp0" readonly>

                    <div class="keypad-wrap">
                        @foreach (['1', '2', '3', '4', '5', '6', '7', '8', '9'] as $angka)
                            <button type="button" class="btn btn-outline-dark keypad-btn tombol-angka"
                                data-angka="{{ $angka }}">{{ $angka }}</button>
                        @endforeach
                        <button type="button" class="btn btn-outline-secondary keypad-btn" id="btnHapusAngka">
                            <i class="mdi mdi-backspace-outline"></i>
                        </button>
                        <button type="button" class="btn btn-outline-dark keypad-btn tombol-angka"
                            data-angka="0">0</button>
                        <button type="button" class="btn btn-outline-secondary keypad-btn" id="btnClearAngka">C</button>
                    </div>

                    <hr class="my-2">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="fw-semibold">Kembalian</span>
                        <span class="fw-bold" id="labelKembalian">Rp0</span>
                    </div>

                    <button type="button" class="btn btn-success w-100" id="btnBayar" disabled>
                        <i class="mdi mdi-cash-register"></i> Proses Bayar
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        (function() {
            const transaksi = {};
            let uangBayar = 0;

            const formatRupiah = (angka) => 'Rp' + Number(angka).toLocaleString('id-ID');

            function hitungTotal() {
                return Object.values(transaksi).reduce((total, item) => total + (item.harga * item.qty), 0);
            }

            function renderTransaksi() {
                const tbody = document.getElementById('daftarTransaksi');
                const items = Object.entries(transaksi);

                if (items.length === 0) {
                    tbody.innerHTML =
                        '<tr id="transaksiKosong"><td colspan="4" class="text-center text-muted">Belum ada layanan dipilih</td></tr>';
                } else {
                    tbody.innerHTML = items.map(([id, item]) => `
          <tr>
            <td>${item.nama}</td>
            <td class="text-center">
              <button type="button" class="btn btn-sm btn-outline-secondary btn-kurang" data-id="${id}">-</button>
              <span class="mx-2">${item.qty}</span>
              <button type="button" class="btn btn-sm btn-outline-secondary btn-tambah" data-id="${id}">+</button>
            </td>
            <td class="text-end">${formatRupiah(item.harga * item.qty)}</td>
            <td class="text-end">
              <button type="button" class="btn btn-sm btn-outline-danger btn-hapus-item" data-id="${id}">
                <i class="mdi mdi-close"></i>
              </button>
            </td>
          </tr>
        `).join('');
                }

                const total = hitungTotal();
                document.getElementById('labelTotal').textContent = formatRupiah(total);
                hitungKembalian();
            }

            function hitungKembalian() {
                const total = hitungTotal();
                const kembalian = uangBayar - total;
                document.getElementById('labelKembalian').textContent = formatRupiah(kembalian < 0 ? 0 : kembalian);
                document.getElementById('btnBayar').disabled = total <= 0 || uangBayar < total;
            }

            document.getElementById('daftarLayanan').addEventListener('click', function(e) {
                const btn = e.target.closest('.layanan-btn');
                if (!btn) return;
                const id = btn.dataset.id;
                if (transaksi[id]) {
                    transaksi[id].qty += 1;
                } else {
                    transaksi[id] = {
                        nama: btn.dataset.nama,
                        harga: Number(btn.dataset.harga),
                        qty: 1
                    };
                }
                renderTransaksi();
            });

            document.getElementById('daftarTransaksi').addEventListener('click', function(e) {
                const tambah = e.target.closest('.btn-tambah');
                const kurang = e.target.closest('.btn-kurang');
                const hapus = e.target.closest('.btn-hapus-item');

                if (tambah) {
                    transaksi[tambah.dataset.id].qty += 1;
                } else if (kurang) {
                    transaksi[kurang.dataset.id].qty -= 1;
                    if (transaksi[kurang.dataset.id].qty <= 0) delete transaksi[kurang.dataset.id];
                } else if (hapus) {
                    delete transaksi[hapus.dataset.id];
                } else {
                    return;
                }
                renderTransaksi();
            });

            function ketikAngka(digit) {
                const angkaBaru = uangBayar === 0 ? digit : String(uangBayar) + digit;
                uangBayar = Number(angkaBaru);
                document.getElementById('labelBayar').value = formatRupiah(uangBayar);
                hitungKembalian();
            }

            function hapusAngkaTerakhir() {
                const teks = String(uangBayar).slice(0, -1);
                uangBayar = teks === '' ? 0 : Number(teks);
                document.getElementById('labelBayar').value = formatRupiah(uangBayar);
                hitungKembalian();
            }

            function clearAngka() {
                uangBayar = 0;
                document.getElementById('labelBayar').value = formatRupiah(uangBayar);
                hitungKembalian();
            }

            function kedipkanTombol(btn) {
                if (!btn) return;
                btn.classList.add('keypad-pressed');
                setTimeout(function() {
                    btn.classList.remove('keypad-pressed');
                }, 150);
            }

            document.querySelectorAll('.tombol-angka').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    ketikAngka(btn.dataset.angka);
                });
            });
            document.getElementById('btnHapusAngka').addEventListener('click', hapusAngkaTerakhir);
            document.getElementById('btnClearAngka').addEventListener('click', clearAngka);

            document.addEventListener('keydown', function(e) {
                if (e.key >= '0' && e.key <= '9') {
                    ketikAngka(e.key);
                    kedipkanTombol(document.querySelector('.tombol-angka[data-angka="' + e.key + '"]'));
                } else if (e.key === 'Backspace') {
                    hapusAngkaTerakhir();
                    kedipkanTombol(document.getElementById('btnHapusAngka'));
                } else if (e.key === 'Delete' || e.key === 'Escape') {
                    clearAngka();
                    kedipkanTombol(document.getElementById('btnClearAngka'));
                }
            });

            document.getElementById('btnBayar').addEventListener('click', function() {
                alert('Pembayaran berhasil dicatat (masih simulasi, belum disimpan ke database).');
                Object.keys(transaksi).forEach((id) => delete transaksi[id]);
                uangBayar = 0;
                document.getElementById('labelBayar').value = formatRupiah(0);
                renderTransaksi();
            });

            renderTransaksi();
        })();
    </script>
@endpush
