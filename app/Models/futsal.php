<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class futsal
{
    // --- AUTH ---
    public function cekLogin($inputLogin)
    {
        return DB::table('users')
            ->where(function($query) use ($inputLogin) {
                $query->where('nama', $inputLogin)
                      ->orWhere('email', $inputLogin);
            })
            ->first();
    }

    public function getAllJabatan() { return DB::table('jabatans')->get(); }
    public function insertJabatan($data) { return DB::table('jabatans')->insert($data); }
    public function deleteJabatan($id) { return DB::table('jabatans')->where('id', $id)->delete(); }

    public function getAllUsers()
    {
        return DB::table('users')
            ->join('jabatans', 'users.id_jabatan', '=', 'jabatans.id')
            ->select('users.*', 'jabatans.nama_jabatan')
            ->get();
    }
    public function insertUser($data) { return DB::table('users')->insert($data); }
    public function deleteUser($id) { return DB::table('users')->where('id', $id)->delete(); }

    public function getAllFields() { return DB::table('fields')->get(); }
    public function insertField($data) { return DB::table('fields')->insert($data); }
    public function deleteField($id) { return DB::table('fields')->where('id', $id)->delete(); }


    public function insertPrice($data)
{
    // Pastikan key-nya id_field sesuai kolom database
    return DB::table('field_prices')->insert([
        'id_field'      => $data['field_id'], // Ubah field_id jadi id_field
        'jenis_hari'    => $data['jenis_hari'],
        'jam_mulai'     => $data['jam_mulai'],
        'jam_selesai'   => $data['jam_selesai'],
        'harga_per_jam' => $data['harga_per_jam']
    ]);
}
    public function deletePrice($id) { return DB::table('field_prices')->where('id', $id)->delete(); }

  public function getAllBookings()
    {
        return DB::table('bookings')
            ->join('users', 'bookings.id_users', '=', 'users.id')
            ->join('fields', 'bookings.id_field', '=', 'fields.id')
            ->select('bookings.*', 'users.nama', 'fields.nama_lapangan')
            ->get();
    }

    public function getBookingById($id)
    {
        return DB::table('bookings')
            ->join('users', 'bookings.id_users', '=', 'users.id')
            ->join('fields', 'bookings.id_field', '=', 'fields.id')
            ->select('bookings.*', 'users.nama', 'fields.nama_lapangan')
            ->where('bookings.id', $id)
            ->first();
    }    public function insertBooking($data) { return DB::table('bookings')->insert($data); }
    public function deleteBooking($id) { return DB::table('bookings')->where('id', $id)->delete(); }
    

    public function getAllPayments()
{
    return DB::table('payments')
        ->join('bookings', 'payments.id_booking', '=', 'bookings.id') // Ubah booking_id jadi id_booking sesuai Navicat
        ->select('payments.*', 'bookings.kode_booking')
        ->get();
}
    public function insertPayment($data) { return DB::table('payments')->insert($data); }
    public function deletePayment($id) { return DB::table('payments')->where('id', $id)->delete(); }

    public function getAllEquipments() { return DB::table('equipments')->get(); }
    public function insertEquipment($data) { return DB::table('equipments')->insert($data); }
    public function deleteEquipment($id) { return DB::table('equipments')->where('id', $id)->delete(); }
    public function getAllPrices()
    {
        return DB::table('field_prices')
            ->join('fields', 'field_prices.id_field', '=', 'fields.id') // Sesuaikan dengan nama kolom di Navicat
            ->select('field_prices.*', 'fields.nama_lapangan')
            ->get();
    }
}