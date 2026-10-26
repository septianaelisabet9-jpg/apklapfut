<!DOCTYPE html>
<html>
<head><title>Tambah Jabatan</title></head>
<body>
    <h2>Form Tambah Jabatan</h2>
    <a href="/jabatans">Kembali</a><br><br>
    <form action="/jabatans/tambah" method="POST">
        @csrf
        <label>Nama Jabatan:</label><br>
        <select name="nama_jabatan" required>
            <option value="">-- Pilih Jabatan --</option>
            <option value="Admin">Admin</option>
            <option value="Kasir">Kasir</option>
            <option value="Pelanggan">Pelanggan</option>
        </select><br><br>

        <label>Deskripsi:</label><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi jabatan..."><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>