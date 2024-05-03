<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tb_barang_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_barangs')->insert([
            [
                'kode_barang' => '1201',
                'nama_barang' => 'Cimory UHT 250 ml',
                'harga_barang'=> 6000,
                'deskripsi_barang' => 'Cimory UHT 250 ml All Variant',
                'satuan_barang_id' => 1
            ],
        ]);
    }
}
