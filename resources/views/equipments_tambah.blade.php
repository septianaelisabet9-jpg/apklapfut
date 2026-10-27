@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Form Tambah Sewa Alat</h2>
    <hr>

    <a href="/equipments" class="btn btn-secondary mb-3">Kembali ke Data Sewa Alat</a>

    <div class="card shadow-sm p-4">
        <form action="/equipments/tambah" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">**Pilih Jenis Alat & Harga per Jam:**</label>
                <select name="nama_barang_harga" id="pilihAlat" class="form-select" onchange="isiHarga()" required>
                    <option value="">-- Pilih Alat --</option>
                    <option value="Rompi|10000">Rompi - Rp 10.000 / jam</option>
                    <option value="Bola Futsal|15000">Bola Futsal - Rp 15.000 / jam</option>
                    <option value="Sarung Tangan Kiper|12000">Sarung Tangan Kiper - Rp 12.000 / jam</option>
                    <option value="Cone Latihan|5000">Cone Latihan - Rp 5.000 / jam</option>
                </select>
            </div>

            <!-- Input tersembunyi untuk dikirim ke controller -->
            <input type="hidden" name="nama_barang" id="namaBarang">
            <input type="hidden" name="harga_sewa_per_jam" id="hargaSewa">

            <div class="mb-3">
                <label class="form-label">**Stok Tersedia:**</label>
                <input type="number" name="stok" class="form-control" placeholder="Contoh: 15" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Alat</button>
        </form>
    </div>
</div>

<!-- Skrip JavaScript untuk mengisi input tersembunyi secara otomatis -->
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
@endsection