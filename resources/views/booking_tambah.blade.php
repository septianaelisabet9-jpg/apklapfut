@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Form Pemesanan (Booking) Lapangan</h2>
    <hr>
    
    <a href="/bookings" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card shadow-sm p-4">
        <form action="/bookings/tambah" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">**User / Pemesan:**</label>
                <select name="user_id" class="form-select" required>
                    <option value="">-- Pilih Pemesan --</option>
                    @foreach($users as $u) 
                        <option value="{{ $u->id }}">{{ $u->nama }}</option> 
                    @endforeach
                </select>
            </div>

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
                <label class="form-label">**Tanggal Main:**</label>
                <input type="date" name="tgl_main" class="form-control" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">**Jam Mulai:**</label>
                    <input type="text" name="jam_mulai" class="form-control" placeholder="19:00:00" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">**Jam Selesai:**</label>
                    <input type="text" name="jam_selesai" class="form-control" placeholder="21:00:00" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">**Durasi (Jam):**</label>
                <input type="number" name="durasi_jam" class="form-control" placeholder="Contoh: 2" required>
            </div>

            <div class="mb-3">
                <label class="form-label">**Total Harga (Rp):**</label>
                <input type="number" name="total_harga" class="form-control" placeholder="Contoh: 150000" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Booking</button>
        </form>
    </div>
</div>
@endsection