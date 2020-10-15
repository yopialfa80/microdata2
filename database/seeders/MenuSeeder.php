<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('menu')->insert([

            [
                'id_parent' => 0,
                'nama_menu' => 'Profile',
                'order_menu' => 1,
                'link' => 'kategori',
                'status' => 'y',
            ],
            [
                'id_parent' => 0,
                'nama_menu' => 'Pelayanan',
                'order_menu' => 2,
                'link' => 'kategori',
                'status' => 'y',
            ],
            [
                'id_parent' => 0,
                'nama_menu' => 'Informasi',
                'order_menu' => 3,
                'link' => 'Informasi',
                'status' => 'y',
            ],
            [
                'id_parent' => 0,
                'nama_menu' => 'Galeri',
                'order_menu' => 4,
                'link' => 'Galeri',
                'status' => 'y',
            ],
            [
                'id_parent' => 0,
                'nama_menu' => 'Berita',
                'order_menu' => 7,
                'link' => 'berita',
                'status' => 'y',
            ],
        ]);
    }
}