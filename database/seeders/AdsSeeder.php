<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('ads')->insert([

            [
                'posisi' => 'sidebar',
                'link' => '',
                'keterangan' => 'Sensus',
                'img' => '1599129776untukdiskominfo.jpg',
                'status' => 'publish',
            ],
            [
                'posisi' => 'slider footer',
                'link' => '',
                'keterangan' => '',
                'img' => 'footer.png',
                'status' => 'publish',
            ],
            [
                'posisi' => 'slider footer',
                'link' => '',
                'keterangan' => '',
                'img' => 'footer2.jpg',
                'status' => 'publish',
            ],
            [
                'posisi' => 'sidebar2',
                'link' => '',
                'keterangan' => '',
                'img' => '15864120592020-Corona-Kemkes1.jpg',
                'status' => 'publish',
            ],
            [
                'posisi' => 'slider footer',
                'link' => '',
                'keterangan' => '',
                'img' => '1559271383spanduk.jpg',
                'status' => 'unpublish',
            ],
        ]);
    }
}