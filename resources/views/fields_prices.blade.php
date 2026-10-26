<!DOCTYPE html>
<html>
<head><title>Data Harga Lapangan</title></head>
<body>
    <h2>Data Harga Lapangan</h2>
    <a href="/home">Kembali ke Home</a> | <a href="/field-prices/tambah-form"><strong>+ Tambah Harga</strong></a><br><br>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Lapangan</th><th>Hari</th><th>Jam</th><th>Harga/Jam</th><th>Aksi</th></tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td><td>{{ $d->nama_lapangan }}</td><td>{{ $d->jenis_hari }}</td><td>{{ $d->jam_mulai }} - {{ $d->jam_selesai }}</td><td>Rp {{ number_format($d->harga_per_jam) }}</td>
            <td><a href="/field-prices/hapus/{{ $d->id }}" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>