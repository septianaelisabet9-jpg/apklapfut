<!DOCTYPE html>
<html>
<head><title>Data Pembayaran</title></head>
<body>
    <h2>Data Pembayaran</h2>
    <a href="/home">Kembali ke Home</a> | <a href="/payments/tambah-form"><strong>+ Tambah Pembayaran</strong></a><br><br>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Kode Booking</th><th>Metode</th><th>Jenis</th><th>Jumlah</th><th>Status</th><th>Aksi</th></tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td><td>{{ $d->kode_booking }}</td><td>{{ $d->metode_pembayaran }}</td><td>{{ $d->jenis_pembayaran }}</td><td>Rp {{ number_format($d->jumlah_bayar) }}</td><td>{{ $d->status }}</td>
            <td><a href="/payments/hapus/{{ $d->id }}" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>