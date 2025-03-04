<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_stok')->insert([
                'barang_id' => $i,
                'user_id' => 1, // Anggap user dengan ID 1 adalah admin yang menginput stok
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => rand(10, 100),
            ]);
        }
    }
}
