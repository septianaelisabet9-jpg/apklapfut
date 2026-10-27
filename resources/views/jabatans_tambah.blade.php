@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Form Tambah Jabatan</h2>
    <hr>

    <a href="/jabatans" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card shadow-sm p-4">
        <form action="/jabatans/tambah" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">**Nama Jabatan:**</label>
                <select name="nama_jabatan" class="form-select" required>
                    <option value="">-- Pilih Jabatan --</option>
                    <option value="Admin">Admin</option>
                    <option value="Kasir">Kasir</option>
                    <option value="Pelanggan">Pelanggan</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">**Deskripsi:**</label>
                <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi jabatan...">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection