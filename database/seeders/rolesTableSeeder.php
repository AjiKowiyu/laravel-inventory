<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'kode'              => 'ADMIN',
                'nama'              => 'Administrator',
                'deskripsi'         => 'Administrator Sistem memiliki kuasa penuh terhadap aplikasi',
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
            [
                'kode'              => 'STAFF',
                'nama'              => 'Karyawan',
                'deskripsi'         => 'Karyawan atau pegawai level staff',
                'dibuat_kapan'      => date('Y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
        ]);
    }
}
