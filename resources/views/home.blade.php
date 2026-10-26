@extends('template')
@section('content')

<div class="container py-4">
    <!-- Header Sambutan -->
    <div class="p-4 mb-4 bg-light rounded-3 shadow-sm border">
        <div class="container-fluid py-2">
            <h1 class="display-6 fw-bold text-primary">Selamat Datang, felicia! ⚽</h1>
            <p class="fs-5 text-secondary">Siap mengelola penyewaan lapangan hari ini?</p>
        </div>
    </div>

    <!-- Menu Navigasi dalam bentuk Grid Card -->
    <h3 class="mb-3">Menu Navigasi Utama</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        
        <div class="col">
            <div class="card h-100 shadow-sm border-0 bg-white">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Data Jabatan</h5>
                    <p class="card-text text-muted small">Kelola data hak akses jabatan.</p>
                    <a href="/jabatans" class="btn btn-primary btn-sm w-100">Buka Jabatan</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm border-0 bg-white">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Data Users</h5>
                    <p class="card-text text-muted small">Kelola data pengguna sistem.</p>
                    <a href="/users" class="btn btn-success btn-sm w-100">Buka Users</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm border-0 bg-white">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Data Lapangan</h5>
                    <p class="card-text text-muted small">Kelola informasi lapangan futsal.</p>
                    <a href="/fields" class="btn btn-warning btn-sm w-100 text-dark">Buka Lapangan</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm border-0 bg-white">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Data Harga Lapangan</h5>
                    <p class="card-text text-muted small">Atur tarif harga sewa per jam.</p>
                    <a href="/field-prices" class="btn btn-info btn-sm w-100 text-white">Buka Harga Lapangan</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm border-0 bg-white">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Data Pemesanan (Booking)</h5>
                    <p class="card-text text-muted small">Kelola jadwal booking lapangan.</p>
                    <a href="/bookings" class="btn btn-primary btn-sm w-100">Buka Pemesanan</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm border-0 bg-white">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Data Pembayaran</h5>
                    <p class="card-text text-muted small">Proses verifikasi pembayaran.</p>
                    <a href="/payments" class="btn btn-secondary btn-sm w-100">Buka Pembayaran</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm border-0 bg-white">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold">Data Sewa Alat</h5>
                    <p class="card-text text-muted small">Kelola inventaris dan sewa alat.</p>
                    <a href="/equipments" class="btn btn-dark btn-sm w-100 text-white">Buka Sewa Alat</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Tombol Logout -->
    <div class="text-start">
        <a href="/logout" class="btn btn-outline-danger px-4">Logout</a>
    </div>
</div>

@endsection