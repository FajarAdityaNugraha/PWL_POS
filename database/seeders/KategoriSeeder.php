<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode' => 'ELK', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'MIN', 'kategori_nama' => 'Minuman'],
            ['kategori_kode' => 'PHS', 'kategori_nama' => 'Perhiasan'],
            ['kategori_kode' => 'PBA', 'kategori_nama' => 'Perabotan'],
        ]);
    }
}
