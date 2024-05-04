<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => 'PCS',
                'nama_satuan' => 'Pieces',
            ],
            [
                'kode_satuan' => 'Gr',
                'nama_satuan' => 'Gram',
            ],
            [
                'kode_satuan' => 'cm',
                'nama_satuan' => 'Centi Meter',
            ],
        ]);
    }

}

