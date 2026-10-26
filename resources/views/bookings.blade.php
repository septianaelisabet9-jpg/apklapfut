<!DOCTYPE html>
<html>
<head><title>Data Pemesanan (Booking)</title></head>
<body>
    <h2>Data Pemesanan (Booking)</h2>
    <a href="/home">Kembali ke Home</a><br><br>

    <a href="/bookings/export-excel"><button type="button">Export Semua Data ke Excel</button></a><br><br>

    <form action="/bookings/tambah" method="POST">
        @csrf
        <label>Pilih User:</label>
        <select name="user_id" required>
            @foreach($users as $u) <option value="{{ $u->id }}">{{ $u->nama }}</option> @endforeach
        </select>

        <label>Pilih Lapangan:</label>
        <select name="field_id" required>
            @foreach($fields as $f) <option value="{{ $f->id }}">{{ $f->nama_lapangan }}</option> @endforeach
        </select>

        <input type="date" name="tgl_main" required>
        <input type="text" name="jam_mulai" placeholder="19:00:00" required>
        <input type="text" name="jam_selesai" placeholder="21:00:00" required>
        <input type="number" name="durasi_jam" placeholder="Durasi (Jam)" required>
        <input type="number" name="total_harga" placeholder="Total Harga" required>
        <button type="submit">Tambah Booking</button>
    </form><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>Kode</th>
            <th>Pemesan</th>
            <th>Lapangan</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Total</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->kode_booking }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->nama_lapangan }}</td>
            <td>{{ $d->tgl_main }}</td>
            <td>{{ $d->jam_mulai }} - {{ $d->jam_selesai }}</td>
            <td>Rp {{ number_format($d->total_harga) }}</td>
            <td>{{ $d->status }}</td>
            <td>
                <a href="/bookings/cetak-window/{{ $d->id }}" target="_blank">Print Nota</a> | 
                <a href="/bookings/export-pdf/{{ $d->id }}" target="_blank">PDF</a> | 
                <a href="/bookings/hapus/{{ $d->id }}" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>