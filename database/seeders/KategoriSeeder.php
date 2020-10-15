<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('kategori')->insert([

            [
                'kategori' => 'Agenda',
                'status' => 'publish',
            ],
            [
                'kategori' => 'Berita Umum',
                'status' => 'publish',
            ],
            [
                'kategori' => 'Pemerintahan',
                'status' => 'publish',
            ],
            [
                'kategori' => 'Pengumuman',
                'status' => 'publish',
            ],
            [
                'kategori' => 'Ekonomi',
                'status' => 'publish',
            ],
            [
                'kategori' => 'BMW NEWS',
                'status' => 'publish',
            ],
            [
                'kategori' => 'Kabupaten Layak Anak',
                'status' => 'publish',
            ],
        ]);
    }
}