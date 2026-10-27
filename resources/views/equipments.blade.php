@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Data Sewa Alat</h2>
    <hr>

    <!-- Tombol Navigasi & Aksi Atas -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="/home" class="btn btn-secondary">Kembali ke Home</a>
        <a href="/equipments/tambah-form" class="btn btn-primary">+ Tambah Alat</a>
    </div>

    <!-- Tabel Data Sewa Alat -->
    <div class="card shadow-sm p-3">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Harga/Jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nama_barang }}</td>
                        <td>
                            <span class="badge bg-info text-dark">{{ $d->stok }}</span>
                        </td>
                        <td>Rp {{ number_format($d->harga_sewa_per_jam, 0, ',', '.') }}</td>
                        <td>
                            <a href="/equipments/hapus/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                            <a href="/edit_karyawan/{{ $d->id  }}" class="btn btn-success btn-sm">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection