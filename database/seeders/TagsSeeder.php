<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('tags')->insert([
            [
                'nama_tag'=> 'Pantai',
                'tag_seo' => 'pantai',
                'count' => 7,
            ],
            [
                'nama_tag'=> 'Ekonomi',
                'tag_seo' => 'ekonomi',
                'count' => 7,
            ],
            [
                'nama_tag'=> 'Hiburan',
                'tag_seo' => 'hiburan',
                'count' => 16,
            ],
            [
                'nama_tag'=> 'Teknologi',
                'tag_seo' => 'teknologi',
                'count' => 8,
            ],
            [
                'nama_tag'=> 'Metropolitan',
                'tag_seo' => 'metropolitan',
                'count' => 29,
            ],
            [
                'nama_tag'=> 'Nasional',
                'tag_seo' => 'nasional',
                'count' => 38,
            ],
            [
                'nama_tag'=> 'Kesehatan',
                'tag_seo' => 'kesehatan',
                'count' => 14,
            ],
            [
                'nama_tag'=> 'Olahraga',
                'tag_seo' => 'olahraga',
                'count' => 10,
            ],
            [
                'nama_tag'=> 'Kuliner',
                'tag_seo' => 'kuliner',
                'count' => 17,
            ],
            [
                'nama_tag'=> 'seni-budaya',
                'tag_seo' => 'seni-budaya',
                'count' => 4,
            ],
            [
                'nama_tag'=> 'Sekitar Kita',
                'tag_seo' => 'sekitar-kita',
                'count' => 9,
            ],
            [
                'nama_tag'=> 'Wisata',
                'tag_seo' => 'wisata',
                'count' => 4,
            ],
            [
                'nama_tag'=> 'Hukum',
                'tag_seo' => 'hukum',
                'count' => 13,
            ],
            [
                'nama_tag'=> 'Musik',
                'tag_seo' => 'musik',
                'count' => 11,
            ],
            [
                'nama_tag'=> 'Internasional',
                'tag_seo' => 'internasional',
                'count' => 22,
            ],
            [
                'nama_tag'=> 'Bola',
                'tag_seo' => 'bola',
                'count' => 19,
            ],
            [
                'nama_tag'=> 'tokoh',
                'tag_seo' => 'tokoh',
                'count' => 0,
            ],
            [
                'nama_tag'=> 'pemerintahan',
                'tag_seo' => 'publish',
                'count' => 0,
            ],
            [
                'nama_tag'=> 'Pendidikan',
                'tag_seo' => 'pendidikan',
                'count' => 0,
            ],
            [
                'nama_tag'=> 'Kesehatan',
                'tag_seo' => 'kesehatan',
                'count' => 0,
            ],
            [
                'nama_tag'=> 'BMW NEWS',
                'tag_seo' => 'bmw-news',
                'count' => 0,
            ],
            [
                'nama_tag'=> 'TULANG BAWANG',
                'tag_seo' => 'tulang-bawang',
                'count' => 0,
            ],
            [
                'nama_tag'=> 'NASIONAL',
                'tag_seo' => 'nasional',
                'count' => 0,
            ],
            [
                'nama_tag'=> 'PEMERINTAHAN',
                'tag_seo' => 'pemerintahan',
                'count' => 0,
            ],
            [
                'nama_tag'=> 'UMUM',
                'tag_seo' => 'umum',
                'count' => 0,
            ],
            
       ]);
    }    
}