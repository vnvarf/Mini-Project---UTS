<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            [
                'kode_product' => '001',
                'nama_product' => 'White Pearl Butterfly',
                'harga_product' => 7000,
                'deskripsi_product' => 'Gelang manik-manik dengan menggunakan mutiara bewarna putih serta charm kupu-kupu berwarna putih',
                'satuan_id' => 1,
            ],
            [
                'kode_product' => '002',
                'nama_product' => 'Manik Mutiara Putih',
                'harga_product' => 10000,
                'deskripsi_product' => 'Manik-manik mutiara berwarna putih',
                'satuan_id' => 2,
            ],
            [
                'kode_product' => '003',
                'nama_product' => 'Tali Giok',
                'harga_product' => 5000,
                'deskripsi_product' => 'Tali giok untuk membuat gelang',
                'satuan_id' => 3,
            ],
        ]);
    }
}
