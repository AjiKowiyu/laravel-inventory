<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class master_barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_barang')->insert([
            [
                'kode'              => 'TGO-KLG',
                'nama'              => 'Tango Kaleng',
                'deskripsi'         => 'Wafer Tango kemasan kaleng',
                'id_kategori'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
            [
                'kode'              => 'TGO-SAC',
                'nama'              => 'Tango Sachet',
                'deskripsi'         => 'Wafer Tango kemasan sachet',
                'id_kategori'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
        ]);
    }
}
