<!DOCTYPE html>
<html>
<head><title>Tambah User</title></head>
<body>
    <h2>Form Tambah User</h2>
    <a href="/users">Kembali</a><br><br>
    <form action="/users/tambah" method="POST">
        @csrf
        <label>Jabatan:</label><br>
        <select name="id_jabatan" required>
            @foreach($jabatans as $j) <option value="{{ $j->id }}">{{ $j->nama_jabatan }}</option> @endforeach
        </select><br><br>
        <input type="text" name="nama" placeholder="Nama Lengkap" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="no_hp" placeholder="No HP" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Simpan User</button>
    </form>
</body>
</html>