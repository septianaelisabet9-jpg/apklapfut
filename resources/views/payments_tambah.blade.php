<!DOCTYPE html>
<html>
<head><title>Tambah Pembayaran</title></head>
<body>
    <h2>Form Tambah Pembayaran</h2>
    <a href="/payments">Kembali</a><br><br>
    <form action="/payments/tambah" method="POST">
        @csrf
        <label>Kode Booking:</label><br>
        <select name="booking_id" required>
            @foreach($bookings as $b) <option value="{{ $b->id }}">{{ $b->kode_booking }}</option> @endforeach
        </select><br><br>
        <input type="text" name="metode_pembayaran" placeholder="cash / qris / transfer" required><br><br>
        <input type="text" name="jenis_pembayaran" placeholder="dp / lunas" required><br><br>
        <input type="number" name="jumlah_bayar" placeholder="Jumlah Bayar" required><br><br>
        <input type="text" name="bukti_transfer" placeholder="Link / Nama File Bukti"><br><br>
        <button type="submit">Simpan Pembayaran</button>
    </form>
</body>
</html>