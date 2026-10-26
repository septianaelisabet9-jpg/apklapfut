<!DOCTYPE html>
<html>
<head><title>Data Jabatan</title></head>
<body>
    <h2>Data Jabatan</h2>
    <a href="/home">Kembali ke Home</a> | <a href="/jabatans/tambah-form"><strong>+ Tambah Jabatan</strong></a><br><br>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Nama Jabatan</th><th>Deskripsi</th><th>Aksi</th></tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td><td>{{ $d->nama_jabatan }}</td><td>{{ $d->deskripsi }}</td>
            <td><a href="/jabatans/hapus/{{ $d->id }}" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>