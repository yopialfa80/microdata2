<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('file')->insert([

            [
                'judul_file' => 'Rencana Kerja Pemerintah Daerah Tahun 2015',
                'deskripsi_file' => 'Rencana Kerja Pemerintah Daerah  Kabupaten Tulang Bawang',
                'nama_file' => 'YcFwAbxGYfwc7A2p0gaySKuMVrIAjijMrFzes2pd.pdf',
                'type_file' => 'pdf',
                'created_at' => '2019-04-10 16:06:36',
            ],
            [
                'judul_file' => 'Rencana Pembangunan Jangka Menengah Daerah Tahun 2013-2015',
                'deskripsi_file' => 'Rencana Pembangunan Jangka Menengah Kabupaten Tulang Bawang',
                'nama_file' => 'smh65yDH2kqRcCAe886iyKLmvIqzAhcniiMdO5pR.pdf',
                'type_file' => 'pdf',
                'created_at' => '2019-04-10 16:06:38',
            ],
            [
                'judul_file' => 'Rencana Pembangunan Jangka Panjang Daerah Tahun 2005-2025',
                'deskripsi_file' => 'Rencana Pembangunan Jangka Panjang Kabupaten Tulang Bawang',
                'nama_file' => 'yI24KQo54SeyLpRMd1RK2T81c9GAg6xxAd4xSCln.pdf',
                'type_file' => 'pdf',
                'created_at' => '2019-04-10 16:06:39',
            ],
            [
                'judul_file' => 'Perpanjangan Waktu Maintenance SPSE V4.3 Kab. Tulang Bawang',
                'deskripsi_file' => '',
                'nama_file' => 'SMcG1EmgyUlghDKx0ZUx1jnojTxejcwB415Bdwbe.pdf',
                'type_file' => 'pdf',
                'created_at' => '2019-06-10 12:10:51',
            ],
            [
                'judul_file' => 'Permohonan Maaf Atas Gangguan Layanan Telkom',
                'deskripsi_file' => '',
                'nama_file' => 'Cm8esnfvILMK8bEnOaYyESpxy1fDtOLeQe4rh0i7.pdf',
                'type_file' => 'pdf',
                'created_at' => '2019-06-17 16:18:05',
            ],
        ]);
    }
}