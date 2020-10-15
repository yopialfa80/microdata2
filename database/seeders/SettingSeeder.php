<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('setting')->insert([        
            'idadm' => NULL,
            'googlecode' => '123 3',
            'judul' => 'Website Kabupaten Tulang Bawang',
            'deskripsi' => 'Kabupaten Tulang Bawang memiliki luas wilayah 4385.84 km² dengan 15 kecamatan, 4 kelurahan dan 148 kampung.',
            'logo' => '15551573371.png',
            'alamat' => 'Jalan Cemara Komplek Perkantoran Pemda Tulang Bawang, Menggala',
            'telp' => '0726 21213',
            'telp2' => '0726 21213',
            'email' => 'tulangbawangkab@site.com',
            'metatag' => NULL,
            'footer' => 'Copyright © 2019 DISKOMINFO | All Rights Reserved.',
            'fb' => NULL,
            'twitter' => NULL,
            'twitter' => NULL,
            'twitter' => NULL,
            'twitter' => NULL,
            'metadesc' => 'Kabupaten Tulang Bawang adalah salah satu kabupaten di Provinsi Lampung, Indonesia dengan ibu kotanya adalah Kota Menggala.',
            'metakey' => 'tulang bawang, tuba, tulang bawang kab, tulang bawang kabupaten, website tuba, portal web tulang bawang, berita tuba, informasi tulang bawang, pemerintah tulang bawang.',
            'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.5462072798878!2d105.21814921485287!3d-4.495025148809662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3f39e288ef2c5d%3A0x11bc83b30ec73d1e!2sPemda+Tulang+Bawang!5e0!3m2!1sid!2sid!4v1557991918976!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
        ]);
    }    
}