<!DOCTYPE html>
<html>
<head><title>Data Sewa Alat</title></head>
<body>
    <h2>Data Sewa Alat</h2>
    <a href="/home">Kembali ke Home</a> | <a href="/equipments/tambah-form"><strong>+ Tambah Alat</strong></a><br><br>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Nama Barang</th><th>Stok</th><th>Harga/Jam</th><th>Aksi</th></tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td><td>{{ $d->nama_barang }}</td><td>{{ $d->stok }}</td><td>Rp {{ number_format($d->harga_sewa_per_jam) }}</td>
            <td><a href="/equipments/hapus/{{ $d->id }}" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>