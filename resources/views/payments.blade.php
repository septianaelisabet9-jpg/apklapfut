@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Data Pembayaran</h2>
    <hr>

    <!-- Tombol Navigasi & Aksi Atas -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="/home" class="btn btn-secondary">Kembali ke Home</a>
        <a href="/payments/tambah-form" class="btn btn-primary">+ Tambah Pembayaran</a>
    </div>

    <!-- Tabel Data Pembayaran -->
    <div class="card shadow-sm p-3">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Kode Booking</th>
                        <th>Metode</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td><strong>{{ $d->kode_booking }}</strong></td>
                        <td>
                            <span class="badge bg-secondary text-uppercase">{{ $d->metode_pembayaran }}</span>
                        </td>
                        <td>
                            <span class="badge bg-info text-dark text-uppercase">{{ $d->jenis_pembayaran }}</span>
                        </td>
                        <td>Rp {{ number_format($d->jumlah_bayar, 0, ',', '.') }}</td>
                        <td>
                            <span class="badge bg-success">{{ $d->status }}</span>
                        </td>
                        <td>
                            <a href="/payments/hapus/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection