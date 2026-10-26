<!DOCTYPE html>
<html>
<head><title>Data Users</title></head>
<body>
    <h2>Data Users</h2>
    <a href="/home">Kembali ke Home</a> | <a href="/users/tambah-form"><strong>+ Tambah User</strong></a><br><br>
    <table border="1" cellpadding="8">
        <tr><th>ID</th><th>Jabatan</th><th>Nama</th><th>Email</th><th>No HP</th><th>Aksi</th></tr>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td><td>{{ $d->nama_jabatan }}</td><td>{{ $d->nama }}</td><td>{{ $d->email }}</td><td>{{ $d->no_hp }}</td>
            <td><a href="/users/hapus/{{ $d->id }}" onclick="return confirm('Hapus data?')">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>