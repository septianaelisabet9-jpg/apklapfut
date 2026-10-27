@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Data Jabatan</h2>
    <hr>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="/home" class="btn btn-secondary">Kembali ke Home</a>
        <a href="/jabatans/tambah-form" class="btn btn-primary">+ Tambah Jabatan</a>
    </div>

    <div class="card shadow-sm p-3">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Jabatan</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>
                            <span>{{ $d->nama_jabatan }}</span>
                        </td>
                        <td>{{ $d->deskripsi }}</td>
                        <td>
                            <a href="/jabatans/hapus/{{ $d->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection