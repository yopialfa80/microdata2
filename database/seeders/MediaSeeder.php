<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('media')->insert([

            [
                'type' => 'embed',
                'judul_media' => 'BELI OLEH - OLEH SERBA IKAN DI CAKAT RAYA TULANG BAWANG',
                'judul_img' => 'Pusat Oleh - oleh ini terletak di jalan tanjakan Cakat Raya Menggala Tulang Bawang, disini terdapat bermacam- macam  olahan ikan air tawar misalnya, berbagai jenis ikan asin mulai dari ikan asin gabus, lais,  Sepat dan baung, ada juga iakan asap, terasi, kerupuk ikan  ada juga telur ikan yang',
                'img' => '',
                'instansi_id' => NULL,
                'source' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/vmXlbWAnnEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ],
            [
                'type' => 'image',
                'judul_media' => 'Workshop SISKUEDES',
                'judul_img' => 'Workshop SISKUEDES',
                'img' => '1556781320_DSC2596.JPG',
                'instansi_id' => NULL,
                'source' => '',
            ],
            [
                'type' => 'image',
                'judul_media' => 'Pemkab Tuba, Peringati Hari Lingkungan Hidup Sedunia',
                'judul_img' => NULL,
                'img' => '1560742964WhatsApp Image 2019-06-17 at 10.37.38.jpeg',
                'instansi_id' => NULL,
                'source' => '',
            ],
            [
                'type' => 'image',
                'judul_media' => 'Pemkab Tuba, Peringati Hari Lingkungan Hidup Sedunia',
                'judul_img' => NULL,
                'img' => '1560742965WhatsApp Image 2019-06-17 at 09.17.29.jpeg',
                'instansi_id' => NULL,
                'source' => '',
            ],
            [
                'type' => 'image',
                'judul_media' => 'Pemkab Tuba, Peringati Hari Lingkungan Hidup Sedunia',
                'judul_img' => NULL,
                'img' => '1560742968WhatsApp Image 2019-06-17 at 10.38.18.jpeg',
                'instansi_id' => NULL,
                'source' => '',
            ],
        ]);
    }
}