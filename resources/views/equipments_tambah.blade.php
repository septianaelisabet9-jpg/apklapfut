<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Sewa Alat</title>
</head>
<body>
    <h2>Form Tambah Sewa Alat</h2>
    <a href="/equipments">Kembali ke Data Sewa Alat</a><br><br>

    <form action="/equipments/tambah" method="POST">
        @csrf
        <div>
            <label>Pilih Jenis Alat & Harga per Jam:</label><br>
            <select name="nama_barang_harga" id="pilihAlat" onchange="isiHarga()" required>
                <option value="">-- Pilih Alat --</option>
                <option value="Rompi|10000">Rompi - Rp 10.000 / jam</option>
                <option value="Bola Futsal|15000">Bola Futsal - Rp 15.000 / jam</option>
                <option value="Sarung Tangan Kiper|12000">Sarung Tangan Kiper - Rp 12.000 / jam</option>
                <option value="Cone Latihan|5000">Cone Latihan - Rp 5.000 / jam</option>
            </select>
        </div>
        <br>
        
        <!-- Input tersembunyi atau otomatis untuk dikirim ke controller -->
        <input type="hidden" name="nama_barang" id="namaBarang">
        <input type="hidden" name="harga_sewa_per_jam" id="hargaSewa">

        <div>
            <label>Stok Tersedia:</label><br>
            <input type="number" name="stok" placeholder="Contoh: 15" required>
        </div>
        <br>

        <button type="submit">Simpan Alat</button>
    </form>

    <!-- Skrip kecil agar nama dan harga otomatis terisi saat dipilih -->
    <script>
        function isiHarga() {
            var pilihan = document.getElementById("pilihAlat").value;
            if (pilihan) {
                var pecah = pilihan.split("|");
                document.getElementById("namaBarang").value = pecah[0];
                document.getElementById("hargaSewa").value = pecah[1];
            } else {
                document.getElementById("namaBarang").value = "";
                document.getElementById("hargaSewa").value = "";
            }
        }
    </script>
</body>
</html>