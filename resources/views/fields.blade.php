@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Data Lapangan Futsal</h2>
    <hr>

    <!-- Tombol Navigasi & Aksi Atas -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="/home" class="btn btn-secondary">Kembali ke Home</a>
        <a href="/fields/tambah-form" class="btn btn-primary">+ Tambah Lapangan Baru</a>
    </div>

    <!-- Tabel Data Lapangan -->
    <div class="card shadow-sm p-3">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Lapangan</th>
                        <th>Jenis Lantai</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td><strong>{{ $d->nama_lapangan }}</strong></td>
                        <td>
                            <span class="badge bg-success">{{ $d->jenis_lantai }}</span>
                        </td>
                        <td>{{ $d->deskripsi }}</td>
                        <td>
                            <a href="/fields/hapus/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection