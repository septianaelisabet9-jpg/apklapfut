<!DOCTYPE html>
<html>
<head><title>Tambah Harga</title></head>
<body>
    <h2>Form Tambah Harga Lapangan</h2>
    <a href="/field-prices">Kembali</a><br><br>
    <form action="/field-prices/tambah" method="POST">
        @csrf
        <label>Lapangan:</label><br>
        <select name="field_id" required>
            <option value="">-- Pilih Lapangan --</option>
            @foreach($fields as $f) 
                <option value="{{ $f->id }}">{{ $f->nama_lapangan }}</option> 
            @endforeach
        </select><br><br>

        <label>Jenis Hari:</label><br>
        <select name="jenis_hari" required>
            <option value="">-- Pilih Jenis Hari --</option>
            <option value="weekday">Weekday (Senin - Jumat)</option>
            <option value="weekend">Weekend (Sabtu - Minggu)</option>
        </select><br><br>

        <label>Jam Mulai:</label><br>
        <input type="text" name="jam_mulai" placeholder="08:00:00" required><br><br>

        <label>Jam Selesai:</label><br>
        <input type="text" name="jam_selesai" placeholder="18:00:00" required><br><br>

        <label>Harga per Jam:</label><br>
        <input type="number" name="harga_per_jam" placeholder="Contoh: 100000" required><br><br>

        <button type="submit">Simpan Harga</button>
    </form>
</body>
</html>