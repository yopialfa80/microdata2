<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('pages')->insert([

            [
                'slug' => 'mars-tulang-bawang',
                'judul' => 'Mars Tulang Bawang',
                'content' => '<p><p><b><span style="font-size: 0.8125rem;">Cipt&nbsp; :&nbsp; Ny. Hj. RA. Sri Suharwati Asnawi, S.Ag  Tempo Di Gracia</span></b></p><p><b style="font-size: 0.8125rem;">Arr&nbsp;&nbsp; :&nbsp; Yitno Widi Praworo &amp; Romo Petrus Subowo, SCJ</b></p><p><b><br></b></p><p><span style="font-size: 0.8125rem;">C =do 4/4&nbsp; &nbsp;&nbsp;</span></p><p>Menjulang tinggi megah perkasa di jalan Cemara </p><p> Tempat pusat Pemerintahan Kabupaten </p><p>Tulang Bawang  Marilah semua bergerak dalam pembangunan  &nbsp; </p><p><br></p><p> Mengabdi Negara membangun daerah </p><p>Tulang Bawang tercinta  Sai Bumi Nengah Nyapur selogannya </p><p>Gambaran  Budaya kita, sejak dulu kala jadi perhatian  &nbsp;</p><p><br></p><p> </p><p> Pusat Perdagangan pusat Pendidikan jadikan semua semangat kerja </p><p> Bagi kemajuannya Sai Bumi Nengah Nyapur selogannya </p><p> Kabupaten Tulang Bawang Pasti Jaya.</p></p>',
                'keyword' => '',
                'description' => '',
                'status' => 'publish',
            ],
            [
                'slug' => 'potensi-daerah',
                'judul' => 'Potensi Daerah',
                'content' => '<p><p></p><p style="text-align: justify;"><strong style="text-align: justify;">A. Sumber Daya Alam dan Lingkungan Hidup</strong></p> <p style="text-align: justify;">Pengoptimalisasi pembangunan sumber daya alam dan lingkungan hidup di Kabupaten Tulang Bawang secara profesional, dilakukan agar mendapatkan hasil yang lebih maksimal bagi Pendapatan Asli Daerah (PAD), tanpa mengabaikan pelestarian lingkungan hidup, serta partisipasi masyarakat dalam memelihara kelestarian dan mutu lingkungan hidup.</p><p style="text-align: justify;"><br></p> <p style="text-align: justify;"><strong>B. Sumber Daya Manusia</strong></p> <p style="text-align: justify;">Sumber Daya Manusia yang berkualitas sangat diperlukan bagi pengembangan wilayah Tulang Bawang di masa yang akan datang. Jumlah penduduk Kabupaten Tulang Bawang yang lebih kurang sekitar 250 ribu jiwa, menjadi sebuah potensi besar jika dapat terus dikembangkan dan ditingkatkan kualitasnya, untuk memberikan kontribusi yang maksimal bagi pembangunan daerah.</p> <p style="text-align: justify;">Untuk itu melalui Dinas Pendidikan, pemerintah daerah telah berupaya meningkatkan sarana dan prasarana pendidikan masyarakat sekaligus peningkatan SDM Tulang Bawang. Langkah nyata yang dilakukan Pemerintah Kabupaten Tuiang Bawang dalam rangka meningkatkan mutu SDM yang berkualitas dan profesional adalah melalui kursus-kursus ketrampilan seperti otomotif menjahit, elektronik, sulaman, anyaman. Selain itu mulai dilakukannya kerjasama dengan sekolah-sekolah kejuruan, untuk melatih masyarakat yang putus sekolah dengan ilmu tepat guna, seperti Sekolah Menengah Pertanian, yang melakukan penggemukan sapi potong dengan harapan masyarakat dapat mandiri dan berjiwa wiraswasta.</p> <p style="text-align: justify;">Fasilitas pendidikan di Kabupaten Tulang Bawang pun berkembang cukup pesat, mulai dari jenjang TK, SD, SMP, SMA/SMK hingga perguruan tinggi.</p><p style="text-align: justify;"><br></p> <p style="text-align: justify;"><strong>C. Sumber Daya Air</strong></p> <p style="text-align: justify;">Secara historis sungai-sungai Tulang Bawang merupakan denyut nadi perekonomian di daerah Tulang Bawang. Dengan 2 sungai besar yaitu Way Tulang Bawang dan Way Mesuji, disamping sungai-sungai lainnya, seperti Way Pidada, Way Kanan, Way Kiri dll, ditambah potensi laut yang ada di daerah Rawajitu dan Gedung Meneng, jika dikelola dengan optimal dan profesional sangat menjanjikan sebagai salah satu aset untuk pembangunan daerah sekaligus peningkatan kesejahteraan masyarakat.</p> <p style="text-align: justify;">Sumber daya air yang ada di Kabupaten Tulang Bawang, disamping dipergunakan untuk budidaya perikanan, juga dijadikan sumber penting bagi pengairan di daerah pertanian, serta dijadikan prasarana transportasi maupun pariwisata.</p><p style="text-align: justify;"><br></p> <p style="text-align: justify;"><strong>D. Sarana Prasarana Wilayah</strong></p> <p style="text-align: justify;">Untuk memenuhi kebutuhan berbagai fasilitas umum, dalam beberapa tahun terakhir telah dibangun dan dioperasionalkan berbagai fasilitas yang diperlukan di Kabupaten Tulang Bawang. Adapun secara fisik berbagai fasilitas umum tersebut, diantaranya mulai dari jalan, terminal, rumah sakit, perkantoran, pasar, taman makam pahlawan sampai dengan universitas, sekolah unggulan dan berbagai fasilitas lainnya, yang kesemuanya diharapkan dapat bermanfaat bagi seluruh masyarakat yang berada di Kabupaten Tulang Bawang.</p> <p style="text-align: justify;">Dengan tanpa mengabaikan wilayah lain, khusus untuk meningkatkan pembangunan di Kota Menggala sebagai ibukota Kabupaten, berbagai upaya juga dilakukan, seperti perawatan priodik jalan-jalan kota, pemasangan lampu jalan, pembuatan taman kota, menjaga kebersihan kota dan lain-lain, yang diharapkan dapat memperindah Kota Menggala, agar dapat menampakkan ciri khasnya sebagai Ibukota Kabupaten, sekaligus untuk mendukung dipertahankannya prestasi Sertifikat Piagam Adipura di Tahun 2011 dan Piala Adipura di tahun 2012 ditahun-tahun berikutnya.</p> <p style="text-align: justify;">Disamping itu untuk mendukung pembangunan daerah, khususnya di kawasan transmigrasi, salah satu mega program yang menjadi pilot project secara nasional adalah pelaksanaan program pembangunan Kota Terpadu Mandiri (KTM) di wilayah Mesuji, yang juga merupakan program unggulan dari Departemen Tenaga Kerja dan Transmigrasi RI.</p> <p style="text-align: justify;">Meskipun wilayah KTM tersebut saat ini telah masuk Kabupaten Mesuji, namun Kabupaten Tulang Bawang memiliki andil yang cukup besar dalam mendukung keberhasilannya hingga tahun 2009. Setelah sukses dengan KTM Mesuji, bahkan kini Pemerintah Kabupaten Tulang Bawang juga merencanakan akan mengglirkan program KTM yang ke-2, yaitu yang akan dibangun dengan memanfaatkan wilayah Sungai Luar dan Pacing Kecamatan Menggala.</p><p></p></p>',
                'keyword' => '',
                'description' => '',
                'status' => 'publish',
            ],
            [
                'slug' => 'letak-geografis',
                'judul' => 'Letak Geografis',
                'content' => '<p></p><p></p><ol> 	<li style="">Kabupaten Tulang Bawang setelah dimekarkanmemiliki luas wilayah ± 4.385,84 Km<font face="Georgia" size="2">2. Terletak antar 3°50’- 4°40’ LS dan 104°58’- 105°52’ BT </font></li> 	<li style="">Kabupaten Tulang Bawang terletak dibagian hilir dari 2 (dua) sungai besar yaitu Way Tulang Bawang dan Way Mesuji </li> 	<li style="">Hampir sebagian besar wilayah kabupaten Tulang Bawang merupakan daerah dataran dan rawa serta alluvial. Dengan jenis tanah penyusun terdiri dari aluvial, regosol, andosol, podsolik coklat, latosol dan podsolik merah kuning </li> 	<li style="">Kabupaten Tulang Bawang pintu gerbang jalur lintas timur menuju dan keluar dari Propinsi Lampung, yang berbatasan dengan Kabupaten Ogan Komering Ilir (OKI) Propinsi Sumatera Selatan, serta Laut Jawa. Infrastruktur Transportasi darat didukung Jalur Lintas Timur dan Jalur Lintas Pantai Timur yang memperpendek jalur ekonomi barang dan jasa ke Pulau Jawa dan dari Pulau Jawa ke Pulau Sumatera. </li> 	<li style="">Berdasarkan Peraturan Daerah Nomor 7 tahun 2005, secara administrasi Kabupaten Tulang Bawang terdiri dari 24 Kecamatan. Namun setelah wilayahnya dimekarkan pada tahun 2008 yang disyahkan melalui UU No 49 Tahun 2008 dan UU No 50 Tahun 2008, menjadi 3 Kabupaten yaitu Kabupaten Induk Kabupaten Tulang Bawang dan dua Kabupaten baru, Kabupaten Tulang Bawang Barat dan Mesuji otomatis jumlah Kecamatan di Kabupaten Tulang Bawang berkurang menjadi 15 Kecamatan, 4 Kelurahan dan 148 Kampung</li> </ol><p></p><p></p>',
                'keyword' => '',
                'description' => '',
                'status' => 'publish',
            ],
            [
                'slug' => 'sejarah-tulang-bawang',
                'judul' => 'Sejarah Tulang Bawang',
                'content' => '<p><p></p><p></p><h4 style="text-align: justify;"><strong>Sejarah Singkat Kabupaten Tulang Bawang</strong></h4><h4 style="text-align: justify;"><strong><br></strong></h4><b>Masa Pra Kemerdekaan RI</b><p></p><p></p><p style="text-align: justify;">Dalam sejarah kebudayaan dan perdagangan di Nusantara, Tulang Bawang digambarkan merupakan salah satu kerajaan tertua di Indonesia, disamping kerajaan Melayu, Sriwijaya, Kutai, dan Tarumanegara. Meskipun belum banyak catatan sejarah yang mengungkapkan keberadaan kerajaan ini, namun catatan Cina kuno menyebutkan pada pertengahan abad ke-4 seorang pejiarah Agama Budha yang bernama Fa-Hien, pernah singgah di sebuah kerajaan yang makmur dan berjaya, <strong>To-Lang Po-Hwang</strong> (Tulang Bawang) di pedalaman <strong>Chrqse</strong> (pulau emas Sumatera). Sampai saat ini belum ada yang bisa memastikan pusat kerajaan Tulang Bawang, namun ahli sejarah Dr. J. W. Naarding memperkirakan pusat kerajaan ini terletak di hulu Way Tulang Bawang (antara <strong>Menggala dan Pagardewa</strong>) kurang lebih dalam radius 20 km dari pusat kota Menggala.</p>
                <p style="text-align: justify;">Seiring dengan makin berkembangnya kerajaan <em>Che-Li-Po Chie</em> (Sriwijaya), nama dan kebesaran Tulang Bawang sedikit demi sedikit semakin pudar. Akhirnya sulit sekali mendapatkan catatan sejarah mengenai perkembangan kerajaan ini.</p>
                <p style="text-align: justify;">Ketika Islam mulai masuk ke bumi Nusantara sekitar abad ke-15, Menggala dan alur sungai Tulang Bawang yang kembali marak dengan aneka komoditi, mulai kembali di kenal Eropa. Menggala dengan komoditi andalannya Lada Hitam, menawarkan harga yang jauh lebih murah dibandingkan dengan komoditi sejenis yang didapat VOC dari Bandar Banten. Perdagangan yang terus berkembang, menyebabkan denyut nadi Sungai Tulang Bawang semakin kencang, dan pada masa itu kota Menggala dijadikan dermaga<strong> "BOOM</strong>", tempat bersandarnya kapal-kapal dari berbagai pelosok Nusantara, termasuk Singapura.</p>
                <p style="text-align: justify;">Perkembangan politik Pemerintahan Belanda yang terus berubah, membawa dampak dengan ditetapkanya Lampung berada dibawah pengawasan langsung Gubernur Jenderal Herman Wiliam Deandles mulai tanggal 22 November 1808. Hal ini berimbas pada penataan sistem pemerintahan adat yang merupakan salah satu upaya Belanda untuk mendapatkan simpati masyarakat.</p>
                <p style="text-align: justify;">Pemerintahan adat mulai ditata sedemikian rupa, sehingga terbentuk Pemerintahan Marga yang dipimpin oleh Kepala Marga (<strong>Kebuayan</strong>). Wilayah Tulang Bawang sendiri dibagi dalam 3 kebuayan, yaitu <strong>Buay Bulan, Buay Tegamoan</strong> dan <strong>Buay Umpu</strong> (tahun 1914, menyusul dibentuk <strong>Buay Aji</strong>).</p>
                <p style="text-align: justify;">Sistem <strong>Pemerintahan Marga</strong> tidak berjalan lama, dan pada <strong>tahun 1864</strong> sesuai dengan Keputusan Kesiden Lampung No. 362/12 tanggal 31 Mei 1864, dibentuk sistem <strong>Pemerintahan Pesirah</strong>. Sejak itu pembangunan berbagai fasilitas untuk kepentingan kolonial Belanda mulai dilakukan termasukdi Kabupaten Tulang Bawang.</p>
                <p style="text-align: justify;">Pada zaman pendudukan Jepang, tidak banyak perubahan yang terjadi di daerah yang dijuluki <strong>"Sai Bumi Nengah Nyappur”</strong> ini. Dan akhirnya sesudah Proklamasi kemerdekaan RI, saat Lampung ditetapkan sebagai daerah <strong>Keresidenan</strong> dalam wilayah Propinsi Sumatera Selatan, Tulang Bawang dijadikan wilayah <strong>Kewedanaan</strong>. </p><p style="text-align: justify;"><b><br></b></p><p style="text-align: justify;"><b>Masa Kemerdekaan RI</b></p>
                <p style="text-align: justify;">Sejalan dengan perkembangan Negara RI, maka setelah Lampung memisahkan diri dari Propinsi Sumatera Selatan, dengan membentuk Propinsi Lampung, maka status Menggala juga ditetapkan sebagai kecamatan di bawah naungan Kabupaten Lampung Utara.</p>
                <p style="text-align: justify;">Proses berdirinya Tulang Bawang tidak begitu saja terjadi. Diawali dari rencana sesepuh dan tokoh masyarakat bersama pemerintah yang sejak tahun 1972 merencanakan mengembangkan Propinsi Lampung menjadi 10 Kabupaten/Kota, maka pada tahun 1981, Pemerintah Propinsi membentuk 8 Lembaga Pembantu Bupati, yang salah satunya adalah Pembantu Bupati Lampung Utara Wilayah Menggala, berdasarkan Keputusan Menteri Dalam Negeri No. 821.26/502 tanggal 8 Juni 1981 tentang Pembentukan Wilayah Kerja Pembantu Bupati Lampung Selatan, Lampung Tengah, dan Lampung Utara Wilayah Propinsi Lampung.</p>
                <p style="text-align: justify;">Dalam kurun waktu dari tahun 1981 sampai dengan 1997, telah terjadi pergantian Pejabat Pembantu Bupati selama beberapa masa bakti, yang dijabat oleh:</p>
                
                <ol>
                    <li>Drs. Hi. M. Yusup Nur (masa bhakti 1981 s.d: 1985).</li>
                    <li>Kardinal, BA (masa bhakti 1985 s.d. 1989)</li>
                    <li>Drs. Hi. Somali Saleh (masa bhakti 1989 s.d. 1993)</li>
                    <li>Drs. Rukhyat Kusumayudha (masa bhakti 1993 s.d. 1994)</li>
                    <li>Drs. Tamanuri (masa bhakti 1994 s.d. 1996)</li>
                    <li>Hi. Santori Hasan, SH. (masa bhakti 1996 s.d. 1997)</li>
                </ol>
                <p style="text-align: justify;">Pada tahun 1997, dibentuklah Sekretariat Persiapan Kabupaten Tulang Bawang, dengan Sekretaris merangkap Pembantu Bupati Lampung Utara Wilayah Menggala Hi. Santori Hasan, SH. Selanjutnya untuk memuluskan pembentukan kabupaten, ditunjuklah Hi. Santori Hasan, SH sebagai Pelaksana Tugas (Plt) Bupati Tulang Bawang sejak tanggal <strong>20 Maret</strong> sampai dengan 9 Desember 1997 melalui <strong>Surat Keputusan Gubernur No. 821.2/II/09/97 tanggal 14 Januari 1997</strong> tentang Penunjukan Plt Bupati Kabupaten Tingkat II Persiapan Tulang Bawang .</p>
                <p style="text-align: justify;">Melalui serangkaian proses yang cukup melelahkan, akhirnya Kabupaten Tulang Bawang lahir, dan diresmikan keberadaannya oleh Menteri Dalam Negeri pada tanggal <strong>20 Maret 1997</strong>, sebagai tindak lanjut ditetapkan <strong>UU No. 2 Tahun 1997</strong> tentang pembentukan daerah tingkat II Tulang Bawang dan Kabupaten Daerah Tingkat II Tanggamus. Dimana untuk selanjutnya pada tanggal 24 Nopember 1997 terpilihlah Hi. Santori Hasan, SH sebagai Bupati Tulang Bawang pertama, untuk periode tahun 1997-2002, yang dilantik pada tanggal 9 Desember 1997.</p>
                <p style="text-align: justify;">Melalui proses pemilihan Bupati Tulang Bawang pada tanggal 12 Nopermber 2002 terpilihlah Dr. Abdurachman Sarbini, dan AA. Syofandi sebagai Bupati dan Wakil Bupati Tulang Bawang untuk periode 2002-2007, yang dilantik pada tanggal 9 Desember 2002. Kemudian melalui proses Pemilihan Kepala Daerah (Pilkada) langsung oleh masyarakat yang pertama kali dilaksanakan pada tahun 2007, Dr. Abdurachman Sarbini kembali terpilih sebagai Bupati Tulang Bawang periode 2007-2012, berpasangan dengan Drs. Agus Mardihartono, MM, sebagai Wakil Bupati, yang dilantik pada tanggal 9 Desember 2007.</p>
                <p style="text-align: justify;">Sementara itu sejak berdirinya Kabupaten Tulang Bawang, Dewan Perwakilan Rakyat Daerah (DPRD) Kabupaten Tulang Bawang juga mengalami proses pergantian pucuk pimpinan. Pada periode 1997-1999, Ketua DPRD dijabat Abadi SP, pada periode 1999-2004 Ketua DPRD dijabat Samsul Hadi, dan periode 2004-2009 Ketua DPRD dijabat Lamijiono, S.Pd, MM, yang kemudian sebelum masa bhaktinya berakhir digantikan oleh Herman Artha.</p>
                <p style="text-align: justify;">Pada tanggal 18 Agustus 2009, anggota DPRD Kabupaten Tulang Bawang periode 2004-2009 secara resmi mengakhiri masa jabatannya, yang kemudian melalui mekanisme yang berlaku digantikan oleh Anggota DPRD periode berikutnya yaitu 2009-2014, yang merupakan hasil Pemilu Legislatif 9 April 2009. Sedangkan Ketua DPRD masa bhakti 2009-2014 adalah Winarti, SE yang dilantik pada tanggal 19 Oktober 2009.</p>
                <p style="text-align: justify;">Pada Periode selanjutnya melalui pemilihan Bupati &amp; Wakil Bupati Tulang Bawang periode 2012-2017 terpilihlah Ir. Hi. Hanan A. Rozak, MS sebagai Bupati Tulang Bawang berpasangan dengan Heri Wardoyo SH, sebagai Wakil Bupati yang dilantik pada tanggal 17 Desember 2012. Pada Tanggal 15 Februari 2017, Tulang Bawang kembali melakukan pemilihan umum Bupati Tulang Bawang yang dimmenangkan oleh pasangan Bupati Hj. Winarti S.E., M.H dan Wakil Bupati Hendriwansyah Periode 2017-2022. Dilantik oleh Gubernur Lampung M. Ridho Ficardo, S.Pi., M.Si. pada Senin, (18/12/2017).</p>
                c. Tulang Bawang Kini dan Masa Datang.
                <p style="text-align: justify;">Kabupaten Tulang Bawang yang pada awal berdirinya memiliki luas wilayah 7.770,84 km² atau 22% dari wilayah Lampung, merupakan kabupaten terbesar di Propinsi Lampung. Menyadari luas wilayah dan besarnya tantangan pembangunan Kabupaten Tulang Bawang, maka dengan dukungan Pemerintah Provinsi Lampung, DPRD Provinsi Lampung, DPRD Tulang Bawang, Tokoh Masyarakat, Tokoh adat dan seluruh masyarakat Kabupaten Tulang Bawang Pemerintah Kabupaten Tulang Bawang mengambil sebuah terobosan besar dengan memekarkan Kabupaten Tulang Bawang menjadi 3 Kabupaten yaitu, Kabupaten Tulang Bawang, Tulang Bawang Barat dan Kabupaten Mesuji.</p>
                <p style="text-align: justify;">Dalam proses realisasi dua daerah otonomi baru itu pula, catatan menariknya adalah, sangat langka dan jarang sekali terjadi secara nasional, adanya upaya keras dan inisiatif dari kabupaten induk seperti yang dilakukan oleh Kabupaten Tulang Bawang.</p>
                <p style="text-align: justify;">Beberapa pertimbangan dilakukannya pemekaran dua daerah otonomi baru, diantaranya untuk menciptakan percepatan pembangunan daerah, mengefektifkan pelayanan publik, memperpendek rentang kendali pemerintahan, sekaligus dapat mempercepat kesejahteraan masyarakat, baik di dua kabupaten baru hasil pemekaran, maupun di kabupaten induk.</p>
                <p style="text-align: justify;">Sedangkan dalam prosesnya, pemekaran Kabupaten Tulang Bawang Barat dan Mesuji akhirnya dapat diwujudkan, yaitu dengan disahkannya UU Nomor 49 Tahun 2008 tentang Pembentukan Kabupaten Mesuji dan UU Nomor 50 Tahun 2008 tentang Pembentukan Kabupaten Tulang Bawang Barat, tanggal 26 November 2008, yang kemudian diresmikan pendefinitifannya tanggal 3 april 2009, yang ditandai dengan dilantiknya kedua Penjabat (Pj) Bupati di dua daerah otonomi baru tersebut oleh Menteri Dalam Negeri Mardiyanto.</p>
                <p style="text-align: justify;">Setelah wilayahnya dimekarkan, kini Kabupaten Tulang Bawang memiliki luas wilayah 4385.84 km² dengan 15 kecamatan, 4 kelurahan dan 148 kampung. Namun meskipun luas wilayahnya berkurang pasca dimekarkannya dua daerah otonomi baru, Kabupaten Tulang Bawang masih tetap memiliki beragam potensi yang menjanjikan guna meningkatkan kemajuannya.</p><p></p><p></p></p>',
                'keyword' => '',
                'description' => '',
                'status' => 'publish',
            ],
            [
                'slug' => 'selayang-pandang',
                'judul' => 'Selayang Pandang',
                'content' => '<p><h4 style="text-align: justify;"><strong>Selayang Pandang</strong></h4><h4 style="text-align: justify;"><strong><br></strong></h4><p style="text-align: justify;">Pada saat terbentuknya/berdirinya Kabupaten Tulang Bawang pada tanggal<strong> 20 Maret 1997</strong> yang disahkan melalui Undang-Undang Nomor 2 Tahun 1997 tentang Pembentukan Kabupaten Daerah Tingkat II Tulang Bawang dan Kabupaten Daerah Tingkat II Tanggamus (Lembaran Negara Republik Indonesia Tahun 1997 Nomor 2, Tambahan Lembaran Negara Republik Indonesia Nomor 3667) wilayah Kabupaten Tulang Bawang pada saat itu memiliki wilayah terluas,<strong> 22%</strong> dari wilayah Propinsi Lampung.</p> <p style="text-align: justify;">Dengan menyadari besarnya tantangan dan upaya percepatan pembangunan serta memperpendek rentang kendali pelayanan publik di wilayah<strong> Sai Bumi Nengah Nyapur</strong> ini, maka segenap elemen masyarakat dan sepenuhnya didukung oleh Pemerintah Kabupaten Tulang Bawang, Pada tahun 2008 Kabupaten Tulang Bawang ini dimekarkan menjadi 3 (tiga) wilayah daerah otonom baru (DOB) dengan Undang-Undang Nomor : 49 Tahun 2008 Tentang Pembentukan Daerah Otonomi Kabupaten Mesuji dan Undang-Undang Nomor : 50 Tahun 2008 Tentang Pembentukan Daerah Otonom Kabupaten Tulang Bawang Barat.</p> <p style="text-align: justify;">Setelah wilayah ini dimekarkan, saat ini Kabupaten Tulang Bawang memiliki luas wilayah <strong>± 4.385,84 Km2,</strong> yang tersebar dalam 15 wilayah Pemerintahan Kecamatan, 4 Kelurahan dan 148 Kampung. Walaupun wilayah ini telah dimekarkan, Kabupaten Tulang Bawang tetap memiliki beragam potensi sumber daya alam dan keragaman budaya yang sangat potensial untuk dikembangkan dalam upaya mencapai kesejahteraan segenap lapisan masyarakat.</p> <p style="text-align: justify;">Kabupaten Tulang Bawang hanya berjarak sekitar <strong>120 Km</strong> Ibukota Propinsi Lampung, Bandar Lampung. Sedangkan dari Jakarta dengan menggunakan transportasi udara ± 45 menit dari Bandara Soekarno Hatta menuju Bandara Raden Intan II (Branti) dilanjutkan dengan 2 jam jalan darat menuju kota Menggala Kabupaten Tulang Bawang. Bagi yang ingin menggunakan transportasi darat jarak dari Jakarta ke Menggala dapat ditempuh ± 8 jam melewati Pelabuhan Laut Merak Bakauheni.</p><p style="text-align: justify;"><br></p><b>Geografis</b><p></p><p></p><ul> 	<li>Kabupaten Tulang Bawang dengan Ibukota Menggala, berjarak kurang lebih 120 km dari Ibukota Propinsi.</li> 	<li>Batas-batas wilayah Kabupaten adalah sebagai berikut: <ul> 	<li>Sebelah Utara&nbsp; &nbsp; : Kabupaten Mesuji</li> 	<li>Sebelah Selatan: Kabupaten Lampung Tengah</li> 	<li>Sebelah Timur&nbsp; &nbsp;: Laut Jawa</li> 	<li>Sebelah Barat&nbsp; &nbsp; : Kabupaten Tulang Bawang Barat</li></ul></li></ul><p></p><p><b><br></b></p><p><b>Topografi</b></p><p></p><p>Secara topografi daerah Tulang Bawang dibagi menjadi 4 bagian: </p><ul> 	<li>Daerah daratan, ini merupakan daerah terluas yang dimanfaatkan untuk pertanian.</li> 	<li>Daerah rawa, terdapat sepanjang Pantai Timur dengan ketinggian 0-1 m, yang merupakan daerah rawa pasang surut.</li> 	<li>Daerah<strong> River Basin</strong>, terdapat dua River Basin yang utama yaitu River Basin Tulang Bawang, dan River Basin sungai-­sungai kecil lainnya.</li> 	<li>Daerah <strong>Alluvial</strong>, meliputi pantai sebelah timur yang merupakan bagian hilir (down steem dari sungai-sungai besar yaitu Tulang Bawang, dan Mesuji) dimanfaatkan untuk pelabuhan.</li></ul><p></p><p><b><br></b></p><p><b>Iklim</b></p><p></p><p></p><p style="text-align: justify;"><strong>Hujan</strong> Daerah Kabupaten Tulang Bawang beriklim Tropis, dengan musim hujan dan musim kemarau berganti sepanjang tahun. Temperatur rata-rata 31° C. Curah hujan rata-rata 2.000 – 2.500 mm/tahun.</p> <p style="text-align: justify;"><strong>Angin</strong> Iklim<strong> Tropis Humod</strong> dengan angin laut lembab bertiup dari Samudera Indonesia dan Laut Jawa, dari arah Barat dan Barat Laut terjadi pada bulan November - Maret. Selama bulan Juli - Agustus, angin bertiup dari Timur dan Tenggara. Kecepatan angin rata-rata 5,83 km/jam.</p> <p style="text-align: justify;"><strong>Tanah</strong> Secara garis besar Tanah di Tulang Bawang dibagi 6, antara lain <strong>Aluvial, Regosol, Andosol, Podsolik, Coklat, Latosol, dan Padsolik Merah Kuning (PMK)</strong>.</p> <strong>Air</strong> Selain sumber air tanah, sumber air lainnya adalah sumber air permukaan berupa sungai dan laut.  <strong> Mineral</strong> Jenis mineral potensial dan strategis di Tulang Bawang adalah: <ul> 	<li><strong>Pasir Kuarsa</strong>, terdapat disekitar Menggala dan Gedung Meneng.</li> 	<li><strong>Minyak Bumi</strong>, terdapat pada lapisan Palembang yang terakumulasi sebagai lanjutan dari endapan Minyak Bumi di daerah Palembang; terpusat di sekitar Menggala.</li> 	<li><strong>Batu Bara</strong>, depositnya terdapat pada lapisan sedimen formasi endosit, yaitu bagian Hulu Way Tulang Bawang.</li></ul><p></p><p></p><p></p></p>',
                'keyword' => '',
                'description' => '',
                'status' => 'publish',
            ],
        ]);
    }
}