<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('slider')->insert([       
            [
                'judul' => 'Pemberian Bantuan Sembako',
                'link' => NULL,
                'img' => '1589721189IMG-20200506-WA0030.jpg',
            ],
            [
                'judul' => 'Cuci Tangan Pakai Sabun',
                'link' => NULL,
                'img' => '1589721360IMG-20200422-WA0004.jpg',
            ],
            [
                'judul' => 'Pemberian Bantuan Sembako Kepada Satgas Kebersihan',
                'link' => NULL,
                'img' => '158972150020200517_202010.jpg',
            ],
            [
                'judul' => 'Pemberian Bantuan Sembako',
                'link' => NULL,
                'img' => '1589722803IMG-20200505-WA0009.jpg',
            ],
            [
                'judul' => 'Pemberian Bantuan Sembako',
                'link' => NULL,
                'img' => '1589722803IMG-20200420-WA0014.jpg',
            ],
            [
                'judul' => 'Pemberian Bantuan Sembako dan APD',
                'link' => NULL,
                'img' => '1589723185IMG-20200422-WA0025.jpg',
            ],
            [
                'judul' => 'Pemberian Bantuan Sembako dan APD',
                'link' => NULL,
                'img' => '158972318820200517_204807.jpg',
            ],
            [
                'judul' => 'Pemberian Bantuan APD',
                'link' => NULL,
                'img' => '1589724663IMG-20200422-WA0033.jpg',
            ],
            [
                'judul' => 'Pemberian Bantuan APD',
                'link' => NULL,
                'img' => '1589724663IMG-20200422-WA0033.jpg',
            ],
        ]);
    }    
}