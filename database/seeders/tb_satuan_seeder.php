<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tb_satuan_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_satuans')->insert([
            [
                'kode_satuan' => 'PCS',
                'nama_satuan' => 'Pcs'
            ],
            [
                'kode_satuan' => 'KDS',
                'nama_satuan' => 'Kardus'
            ],
            [
                'kode_satuan' => 'LSN',
                'nama_satuan' => 'Lusin'
            ],
        ]);
    }
}
