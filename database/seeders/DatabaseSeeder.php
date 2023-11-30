<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(master_barangTableSeeder::class);
        // $this->call(stok_barangTableSeeder::class);
        $this->call(rolesTableSeeder::class);
    }
}
