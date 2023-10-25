<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stok_barangTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('stok_barang')->insert([
            [
                'kode'              => 'TGO-KLG',
                'stok_masuk'        => 10,
                'stok_keluar'       => 0,
                'stok_sisa'         => 10,
                'stok_minimal'      => 5,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
            [
                'kode'              => 'TGO-SAC',
                'stok_masuk'        => 27,
                'stok_keluar'       => 0,
                'stok_sisa'         => 27,
                'stok_minimal'      => 20,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
        ]);
    }
}
