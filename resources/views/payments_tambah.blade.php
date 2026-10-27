@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Form Tambah Pembayaran</h2>
    <hr>

    <a href="/payments" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card shadow-sm p-4">
        <form action="/payments/tambah" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">**Kode Booking:**</label>
                <select name="booking_id" class="form-select" required>
                    <option value="">-- Pilih Kode Booking --</option>
                    @foreach($bookings as $b) 
                        <option value="{{ $b->id }}">{{ $b->kode_booking }}</option> 
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">**Metode Pembayaran:**</label>
                <input type="text" name="metode_pembayaran" class="form-control" placeholder="cash / qris / transfer" required>
            </div>

            <div class="mb-3">
                <label class="form-label">**Jenis Pembayaran:**</label>
                <input type="text" name="jenis_pembayaran" class="form-control" placeholder="dp / lunas" required>
            </div>

            <div class="mb-3">
                <label class="form-label">**Jumlah Bayar (Rp):**</label>
                <input type="number" name="jumlah_bayar" class="form-control" placeholder="Contoh: 150000" required>
            </div>

            <div class="mb-3">
                <label class="form-label">**Bukti Transfer (Opsional):**</label>
                <input type="text" name="bukti_transfer" class="form-control" placeholder="Link / Nama File Bukti">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Pembayaran</button>
        </form>
    </div>
</div>
@endsection