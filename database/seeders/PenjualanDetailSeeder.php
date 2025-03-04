<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) { // Loop 10 transaksi
            for ($j = 1; $j <= 3; $j++) { // Setiap transaksi memiliki 3 barang
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 10), // Random barang dari 10 data di m_barang
                    'jumlah' => rand(1, 5),
                ]);
            }
        }
    }
}
