<!DOCTYPE html>
<html>
<head><title>Tambah Booking</title></head>
<body>
    <h2>Form Pemesanan (Booking) Lapangan</h2>
    <a href="/bookings">Kembali</a><br><br>
    <form action="/bookings/tambah" method="POST">
        @csrf
        <label>User / Pemesan:</label><br>
        <select name="user_id" required>
            @foreach($users as $u) <option value="{{ $u->id }}">{{ $u->nama }}</option> @endforeach
        </select><br><br>
        <label>Lapangan:</label><br>
        <select name="field_id" required>
            @foreach($fields as $f) <option value="{{ $f->id }}">{{ $f->nama_lapangan }}</option> @endforeach
        </select><br><br>
        <label>Tanggal Main:</label><br>
        <input type="date" name="tgl_main" required><br><br>
        <input type="text" name="jam_mulai" placeholder="19:00:00" required><br><br>
        <input type="text" name="jam_selesai" placeholder="21:00:00" required><br><br>
        <input type="number" name="durasi_jam" placeholder="Durasi (Jam)" required><br><br>
        <input type="number" name="total_harga" placeholder="Total Harga" required><br><br>
        <button type="submit">Simpan Booking</button>
    </form>
</body>
</html>