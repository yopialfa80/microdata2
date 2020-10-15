<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstansiSettingSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('instansi_setting')->insert([

            [
                'nama_kepala' => 'Hj. Winarti, SE., MH & Hendriwansyah',
                'kabupaten' => 'Tulang Bawang',
                'provinsi' => 'Lampung',
                'foto_kepala' => '1569234871Untitled-1.jpg',
                'font' => 'font-1.css',
                'theme' => '',
                'style' => 'red',
                'bg' => 'bg-5.jpg',
                'preloader' => '3.gif',
            ],
        ]);
    }
}