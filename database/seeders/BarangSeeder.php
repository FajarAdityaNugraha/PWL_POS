<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            ['kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'TV LED', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Kulkas', 'harga_beli' => 1500000, 'harga_jual' => 1800000],
            ['kategori_id' => 2, 'barang_kode' => 'B003', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['kategori_id' => 2, 'barang_kode' => 'B004', 'barang_nama' => 'Mie Instan', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['kategori_id' => 3, 'barang_kode' => 'B005', 'barang_nama' => 'Susu UHT', 'harga_beli' => 7000, 'harga_jual' => 10000],
            ['kategori_id' => 3, 'barang_kode' => 'B006', 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['kategori_id' => 4, 'barang_kode' => 'B007', 'barang_nama' => 'Cincin Emas', 'harga_beli' => 500000, 'harga_jual' => 700000],
            ['kategori_id' => 4, 'barang_kode' => 'B008', 'barang_nama' => 'Gelang Perak', 'harga_beli' => 300000, 'harga_jual' => 450000],
            ['kategori_id' => 5, 'barang_kode' => 'B009', 'barang_nama' => 'Kursi Kayu', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['kategori_id' => 5, 'barang_kode' => 'B010', 'barang_nama' => 'Meja Belajar', 'harga_beli' => 100000, 'harga_jual' => 150000],
        ]);
    }
}
