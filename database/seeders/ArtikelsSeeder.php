<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('artikels')->insert([

            [
                'user_id' => 0,
                'kategori_id' => 0,
                'headlines' => 0,
                'utama' => 0,
                'judul_artikel' => 'Bupati Tulang Bawang Salurkan Bantuan Korban Tsunami di Lampung',
                'slug' => '',
                'isi_artikel' => 'Tulang Bawang - Bupati Tulang Bawang, mengunjungi lokasi bencana tsunami yang berada di Bandar Lampung. Kehadirannya, untuk memberikan kebahagiaan para korban agar dapat meringankan sedikit rasa kesedihannya. Orang nomor satu di Kabupaten Tulang Bawang, langsung menyambut masyarakat Pulau Sabesi, bersama sejumlah pejabat, Bupati Gotong Royong itu mengunjungi dan membawa bantuan dari Pemkab Tulang Bawang. Dari pintu Kapal Jatra 3, Winarti bersama Bupati Lampung Selatan Nanang Ermanto, menyambut kedatangan ribuan pengungsi.

                “Saudaraku semua harus bisa tabah menghadapi musibah ini, tetap semangat, dan jangan cepat percaya info yang banyak beredar dan menyesatkan, saya berharap semua bersabar, tetap semangat dan jangan putus asa, ini ujian, yakin kita mampu menghadapi musibah ini,” ungkap Winarti kepada korban, Rabu (26/12). Iya mengatakan, bencana tsunami ini mengejutkan lantaran tidak lihat ada tanda-tanda akan gempa, tapi ternyata ada tsunami, musibah masyarakat Lampung Selatan dan juga musibah kita semua. “Jadi kami dari Pemkab Tulang bawang, kesini mengantarkan bantuan, yang diharapkan dapat bermanfaat, seperti sembako, terpal, mukena dan anduk serta lain sebagainya,” jelas Bupati.
                
                Selain itu, kata dia, pihaknya telah menyiapkan satu mobil yang berisikan makanan untuk anak-anak. “Kita sudah siapkan satu mobil snack untuk anak anak biar bergembira, biar semua merasa terperhatikan, jadi prinsipnya semua bergotong royong agar bisa melewat bencana ini, kita bisa kuat, bisa tabah, saya atas nama Bupati Tulangbawang sangat merasa berduka dengan kondisi korban yang meninggal ataupun yang luka-luka,” ungkap Bupati. Dirinya percaya Indonesia akan bersatu bergotong royong saling membantu bilamana salah satu masyarakat di daerah dari NKRI ini terkena musibah.
                
                Adapun bantuan yang diberikan melalui Dinas Sosial, yakni berupa Matras 50 buah, Selimut 30 buah, Beras 150 Kg, Mie Instan 20 dus, Biskuit 20 kotak, lalu melalui BPBD, beras 155 Kg, Mie instan 30 Dus dan Biskuit 20 dus, total bantuan yang diberikan Pemda Tulang bawang Beras 305 Kg, Mie instan 50 dus, Biskuit 40 dus, Selimut 30 buah, Matras 50 buah.',
                'img' => 'http://tulangbawangkab.go.id/?p=10024',
                'caption' => '',
                'metakey' => '',
                'metadesc' => '',
                'tanggal' => '2019-01-08',
                'view' => 0,
                'tag' => '',
                'parent' => 0,
                'created_at' => '2019-01-08 10:56:52',
                'updated_at' => '2019-01-08 10:56:52',   
            ],
            [
                'user_id' => 0,
                'kategori_id' => 31,
                'headlines' => 0,
                'utama' => 0,
                'judul_artikel' => 'Wabup Tuba HENDRIWANSYAH Tinjau Alat Khemoterafi di RSUD Menggala',
                'slug' => 'wabup-tuba-hendriwansyah-tinjau-alat-khemoterafi-di-rsud-menggala',
                'isi_artikel' => 'Wakil Bupati Kabupaten tulang Bawang “HENDRIWANSYAH” beserta rombongan melakukan kegiatan kunjungan kerja di Rumah Sakit Umum Daerah tiyuh tohou, “saat Kunjungan Kerja di RSUD Menggala, untuk meninjau alat Khemoterafi bersama direktur RSUDM dr. Lukman Pura, yang didampingi SALEH selaku Sekretaris, pada hari Rabu (23/01/2019).

                Dalam kegiatan kunjungan kerja ini, Wakil Bupati beserta rombongan berkesempatan melihat seluruh jalannya aktivitas kegiatan RSUDM tulang Bawang dalam melayani masyarakat yang sedang berobat.
                
                Tak hanya itu, Wakil Bupati tulang Bawang juga berbincang-bincang dengan para pegawai RSUD menggala kabupaten tulang Bawang provinsi lampung, ia berharap agar Pelayanan tetap profesional sesuai SOP, sebagai harapan masyarakat, ”jelasnya.
                
                Lebih lanjut pintanya agar karyawan RSUD tulang Bawang tetap memilki integritas yang tinggi karena yang dibutuhkan adalah kualitas bukan kuantitas.
                
                “Kalau masyarakat banyak yang berobat berarti masyarakat kita tidak sehat. Maka rumah sakit punya kewajiban turut menjaga masyarakat kita agar tetap sehat, "tutupnya.',
                'img' => '1555579725Masyarakat-Kelukan-310x165-650x450.jpg',
                'caption' => '',
                'metakey' => 'RSUD Menggala',
                'metadesc' => 'RSUD Menggala',
                'tanggal' => '2019-01-24',
                'view' => 2,
                'tag' => 'tokoh',
                'parent' => 0,
                'created_at' => '2019-01-24 14:56:31',
                'updated_at' => '2019-01-24 14:56:31',   
            ],
            [
                'user_id' => 0,
                'kategori_id' => 31,
                'headlines' => 0,
                'utama' => 0,
                'judul_artikel' => 'Forum Komunikasi Putra Putri TNI-Polri (FKPPI) Kab Tuba Melakukan Penanaman Pohon aren Sebanyak 257 Batang',
                'slug' => 'forum-komunikasi-putra-putri-tni-polri-fkppi-kab-tuba-melakukan-penanaman-pohon-aren-sebanyak-257-batang',
                'isi_artikel' => 'Forum Komunikasi Putra Putri TNI-Polri (FKPPI) Kabupaten Tulang Bawang melakukan penanaman pohon aren sebanyak 257 batang di Kawasan bantaran Sungai Way Tulang Bawang yang dilaksanakan di Dusun 1 Cakat Nyenyek Kecamatan Menggala Timur, Kamis (24/01/2019).

                Hadir pada kegiatan, Sekdakab Tulang Bawang Ir. Anthoni MM, Kasdim May. Ketut S, kadis Pertanian Sumarno, Kaban Kesbangpol Hamami Ria, Camat Menggala Timur, Ketua Forum Kepala Kampung Kecamatan Menggala Timur Jaja dan masyarakat Kampung Menggala.
                
                Sekdakab Tulang Bawang Ir. Anthoni MM, dalam sambutannya menyampaikan salam dari Bupati Tulang Bawang Hj. Winarti SE MH sebab tidak dapat hadir karena ada tugas lain.
                
                Bupati berpesan, bahwa kegiatan ini patut untuk di apresiasi, maka semoga dengan adanya kegiatan ini dapat mendorong komunitas lain untuk secara nyata membangun Tulang Bawang berdasarkan semangat gotong royong.
                
                “Sebagai Bupati, saya berterima kasih atas peran nyata FKPPI Tulang Bawang, ini bentuk gotong royong kita melestarikan dalam merawat tanah leluhur. Semoga bisa menjadi contoh organisasi-organisasi lain,” kata Bupati Winarti, yang disampaikan Sekdakab.',
                'img' => '1555579647image_6483441-3-650x450.jpg',
                'caption' => '',
                'metakey' => 'Forum Komunikasi Putra Putri TNI-Polri',
                'metadesc' => 'Forum Komunikasi Putra Putri TNI-Polri',
                'tanggal' => '2019-01-25',
                'view' => 2,
                'tag' => 'tokoh,pemerintahan',
                'parent' => 0,
                'created_at' => '2019-01-25 11:27:45',
                'updated_at' => '2019-01-25 11:27:45',   
            ],
            [
                'user_id' => 0,
                'kategori_id' => 31,
                'headlines' => 0,
                'utama' => 0,
                'judul_artikel' => 'Bupati Tulang Bawang Menghadiri Mujahadah Nisfussannah dan Doa Bersama',
                'slug' => 'bupati-tulang-bawang-menghadiri-mujahadah-nisfussannah-dan-doa-bersama',
                'isi_artikel' => 'Tulang Bawang - Dalam upaya terus membangun nilai spritual, Bupati Tulangbawang Hj. Winarti , menghadiri Mujahadah Nisfussannah dan doa bersama KH. Abdul Latif Madjid. RA, yang dilaksankan di Lapangan Persada Unit II Kecamatan Banjar Agung, Senin malam (28/01/2019) dihadiri oleh Pejabat yang ada di Pemkab Tulang Bawang . Sholawat wahidiyah berpedoman pada Al-Quran dan hadist bertujuan mendekatkan diri pada Allah SWT, yang dapat menentramkan hati dan penunjuk jalan kebenaran, maka wajar saja jika kegiatan ini dihadiri jamaah se-Provinsi Lampung.

"Sholawat wahidiyah tidak ada unsur politik, murni amalan untuk pendidikan akhlak masyarakat, dan tujuannya untuk sadar akan iman dan Islam guna keselamatan dunia akhirat. Untuk di Provinsi Lampung jamaah sholawat Wahidiyah telah ada di 13 Kabupaten/Kota," tutur Ketua Panitia, Srijan. Sementara, Bupati <a href="http://lampung.tribunnews.com/tag/hj-winarti" target="_blank" rel="noopener">Hj. Winarti</a> dalam sambutannya, mengucapkan terimakasih atas kedatangan KH. Abdul Latif Madjid. Ra di Kabupaten Tulangbawang, selain itu Bupati juga meminta didoakan, agar masyarakat Tulangbawang dapat bekerja keras dan terus bersemangat dapat membangun diri untuk kesejahtaraan dan ketentraman Tulangbawang.

"Saya sangat berterimakasih atas terselenggaranya acara doa bersama ini, mari bersama membangun spritual masyarakat, terus jaga silaturahmi, persatuan untuk kita semua, terutama di Tahun politik ini," jelas Bupati Winarti berpesan. Kegiatan ini dihadiri ribuan jamaah wahidiniyah yang tetap tertib dan lancar, walaupun diguyur hujan gerimis sebagai barokah.',
                'img' => '1555579565IMG_20190129_101948-1.jpg',
                'caption' => '',
                'metakey' => 'Doa Bersama',
                'metadesc' => 'Doa Bersama',
                'tanggal' => '2019-01-29',
                'view' => 4,
                'tag' => 'tokoh,pemerintahan',
                'parent' => 0,
                'created_at' => '2019-01-29 10:23:24',
                'updated_at' => '2019-01-29 10:23:24',   
            ],
            [
                'user_id' => 0,
                'kategori_id' => 31,
                'headlines' => 0,
                'utama' => 0,
                'judul_artikel' => 'Bupati Winarti Gelar Silaturahmi Dengan Para Awak Media Se-Tulang Bawang',
                'slug' => 'bupati-winarti-gelar-silaturahmi-dengan-para-awak-media-se-tulang-bawang',
                'isi_artikel' => 'Mengawali Tahun 2019, Bupati Tulang Bawang Hj. Winarti SE MH menggelar silaturahmi dengan para awak media se-Tulang Bawang, yang dilaksanakan di Rumah Dinas Jabatan Bupati Tulang Bawang, Rabu (30/1/19).

                Adapun kegiatan ini bertujuan meningkatkan silaturahmi Pemerintah Daerah terhadap awak media dengan harapan dapat menyatukan energi untuk kemajuan Kabupaten Tulang Bawang.
                
                Hadir pada kesempatan tersebut, Bupati Tulang Bawang Hj. Winarti SE MH didampingi Sekdakab Ir. Anthoni MM dan sejumlah Pejabat Eselon II dilingkup Pemkab Tulang Bawang serta sejumlah Ketua berikut anggota Organisasi wartawan yang ada di Kabupaten Tulang Bawang.
                
                Dalam laporannya, Plt. Kepala Dinas Kominfo Dedi Palwadi meyampaikan, bahwa perkembangan media di Kabupaten Tulang Bawang mengalami peningkatan. “Dengan demikian maka sangat diharapkan awak media dapat kian berperan serta bergotong royong membangun Tulang Bawang,” tuturnya.
                
                Sementara, mewakili awak media, Ketua PWI Tulang Bawang Abdulrahman mengatakan bahwa rekan-rekan media yang ada di Kabupaten Tulang Bawang akan mendukung dan mengawal pembangunan Pemerintah Daerah Kabupaten Tulang Bawang yang dipimpin Bupati Hj. Winarti SE MH.
                
                “Rekan-rekan media akan mengawal program Pemerintah dengan cara menyampaikan informasi dengan mengedepankan keberimbangan, yakni suport lengkap 5w 1h,” ucap Ketua PWI Tulang Bawang.
                
                Sedangkan, Bupati Tulang Bawang Hj. Winarti SE MH dalam sambutannya mengucapkan terimakasih atas kehadiran awak media dalam agenda acara silaturahmi pada awal Tahun 2019.
                
                “Selain itu juga, saya ucapkan terimakasih karena telah mengawal program pembangunan di Kabupaten Tulang Bawang dan dapat turut memahami kendala yang dihadapi Pemerintah,” kata Bupati Hj. Winarti.
                
                “Seperti halnya pembangunan Tugu di Terminal Kota Menggala, kita sudah merencanakan dari pertama dilantik jadi Bupati, dari awal ingin dibuat tempat yang spektakuler se-Lampung, tempat demokrasi dan tempat icon yang indah, namun berkendala karena pembebasan lahan dan hal lainnya, sehingga dari pada bermasalah maka kita tunda,” imbuh Ibu Bupati.
                
                Meski demikian, sambung Bunda Winarti, karena ini mimpi semua yang sama, tapi ada hal-hal secara teknis, maka akan tetap dibangun, dengan berkoordinasi dengan tokoh-tokoh adat untuk menambah ornamen, dengan memanfaatkan lahan yang ada.
                
                “Lalu mengenai koordinasi dengan Kominfo, bantu saya, dan saya akan bantu juga, tapi dengan sesuai regulasi, saya tidak akan pernah lupa, sebab media yang membesarkan saya. Maka sampaikan salam hormat saya kepada pimpinan yang ada di tingkat Provinsi dan Pusat, saya mengucapkan terimakasih banyak atas dukungan selama ini,” pesan Bupati Winarti.
                
                Diakhir pesannya, Bupati Bergerak Melayani Warga (BMW) ini, menyampaikan agar program baru yakni Ekonomi kreatif Mandiri Wartawan dapat dijalankan dengan baik. “Tetapi sebelum memulai, kita carikan formulasi yang benar, kita kaji agar tidak bermasalah dan bisa benar-benar bermanfaat,” tukasnya.
                
                Usai kegiatan, awak media melakukan makan bersama dan Bupati melanjutkan agendanya, yakni menghadiri Pengajian Akbar yang digelar oleh Sekolah Tinggi Agama Islam (STAI) Tulang Bawang, Kabupaten Tulang Bawang Barat (Tubaba), yang dihadiri penceramah Ustadz Abdul Somad LC MA. Diakhir acara ini, Bupati Winarti memberikan cindera mata sebagai khas kepada Ustadz kondang asal Riau tersebut.
                
                 ',
                'img' => '1555579507image_6483441-11.jpg',
                'caption' => '',
                'metakey' => 'Media',
                'metadesc' => 'Media',
                'tanggal' => '2019-01-30',
                'view' => 3,
                'tag' => 'tokoh',
                'parent' => 0,
                'created_at' => '2019-01-30 17:40:08',
                'updated_at' => '2019-01-30 17:40:08',   
            ],
        ]);
    }
}