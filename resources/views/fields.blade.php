<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Lapangan</title>
</head>
<body>
    <h2>Data Lapangan Futsal</h2>
    <a href="/home">Kembali ke Home</a> | 
    <a href="/fields/tambah-form"><strong>+ Tambah Lapangan Baru</strong></a>
    <br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama Lapangan</th>
            <th>Jenis Lantai</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->nama_lapangan }}</td>
            <td>{{ $d->jenis_lantai }}</td>
            <td>{{ $d->deskripsi }}</td>
            <td>
                <a href="/fields/hapus/{{ $d->id }}" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>