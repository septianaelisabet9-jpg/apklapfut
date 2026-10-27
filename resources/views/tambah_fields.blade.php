@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Form Tambah Harga Lapangan</h2>
    <hr>

    <a href="/field-prices" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card shadow-sm p-4">
        <form action="/field-prices/tambah" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">**Lapangan:**</label>
                <select name="field_id" class="form-select" required>
                    <option value="">-- Pilih Lapangan --</option>
                    @foreach($fields as $f) 
                        <option value="{{ $f->id }}">{{ $f->nama_lapangan }}</option> 
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">**Jenis Hari:**</label>
                <select name="jenis_hari" class="form-select" required>
                    <option value="">-- Pilih Jenis Hari --</option>
                    <option value="weekday">Weekday (Senin - Jumat)</option>
                    <option value="weekend">Weekend (Sabtu - Minggu)</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">**Jam Mulai:**</label>
                    <input type="text" name="jam_mulai" class="form-control" placeholder="08:00:00" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">**Jam Selesai:**</label>
                    <input type="text" name="jam_selesai" class="form-control" placeholder="18:00:00" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">**Harga per Jam (Rp):**</label>
                <input type="number" name="harga_per_jam" class="form-control" placeholder="Contoh: 100000" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Harga</button>
        </form>
    </div>
</div>
@endsection