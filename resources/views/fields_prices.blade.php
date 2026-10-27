@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Data Harga Lapangan</h2>
    <hr>

    <!-- Tombol Navigasi & Aksi Atas -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="/home" class="btn btn-secondary">Kembali ke Home</a>
        <a href="/field-prices/tambah-form" class="btn btn-primary">+ Tambah Harga</a>
    </div>

    <!-- Tabel Data Harga Lapangan -->
    <div class="card shadow-sm p-3">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Lapangan</th>
                        <th>Hari</th>
                        <th>Jam Operasional</th>
                        <th>Harga/Jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nama_lapangan }}</td>
                        <td>
                            <span class="badge bg-info text-dark text-uppercase">{{ $d->jenis_hari }}</span>
                        </td>
                        <td>{{ $d->jam_mulai }} - {{ $d->jam_selesai }}</td>
                        <td>Rp {{ number_format($d->harga_per_jam, 0, ',', '.') }}</td>
                        <td>
                            <a href="/field-prices/hapus/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection