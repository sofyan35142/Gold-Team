<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class jurusan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusans')->insert([
            'jurusan' => 'TEKNIK KENDARAAN RINGAN (TKR)',
            'deskripsi' => '<p><strong>Teknik Kendaraan Ringan</strong> adalah sebuah ilmu yang mempelajari kompetisi keahlian bidang teknik otomotif yang menekankan pada bidang jasa perbaikan kendaraan ringan (mobil). Tujuan kompetensi keahlian Teknik Kendaraan Ringan adalah untuk membekali peserta didik dengan keterampilan, pengetahuan, dan sikap pada dunia otomotif.</p><p>Tujuan Khusus&nbsp;<strong>Teknik Kenderaan Ringan&nbsp;</strong>:<br>Program Keahlian Teknik Otomotif Kompetensi Teknik Kendaraan Ringan sebagai bagian dari pendidikan menengah, bertujuan menyiapkan siswa / tamatan:</p><ol><li>Untuk memasuki lapangan kerja mekanik otomotif serta mengembangkan sikap profesional dalam bidang Teknik Kenderaan Ringan.</li><li>Menyiapkan siswa agar mampu memilih karir, mampu berkompetisi dan mampu mengembangkan diri dalam lingkup keahlian teknik otomotif, khususnya teknik Kenderaan Ringan</li><li>Menyiapkan siswa untuk mengisi tenaga kerja tingkat menengah yang mandiri (bekerja untuk dirinya sendiri) dan untuk mengisi kebutuhan dunia kerja yang berkaitan dengan teknik Kenderaan Ringan.</li><li>Menyiapkan tamatan agar menjadi warga Negara yang produktif, adaptif dan kreatif khususnya yang berkaitan dengan teknik Kenderaan Ringan.</li></ol><p>Lulusan kompetensi keahlian Teknik Kendaraan Ringan (TKR) dibekali dengan ilmu pengetahuan dan keterampilan dalam perawatan dan perbaikan motor otomotif, perawatan dan perbaikan sistem pemindah tenaga otomotif,&nbsp; perawatan dan perbaikan chasis dan suspense otomotif, perawatan dan perbaikan system kelistrikan otomotif serta dibekali kemampuan dalam berwirausaha sesuai dengan perkembangan kebutuhan masyarakat, dunia industri.</p>',
            'foto' => 'tkr.png',
        ]);
        DB::table('jurusans')->insert([
            'jurusan' => 'TEKNIK ELEKTRONIKA INDUSTRI (TEI)',
            'deskripsi' => '<p><strong>Teknik Elektronik Industri (TEI) </strong>adalah bidang yang fokus mempelajari tentang komponen listrik serta berbagai macam peralatan semi konduktor. Teknik Elektronika Industri digolongkan ke dalam bagian teknik listrik atau teknik elektro. Ada beberapa hal yang dipelajari oleh kompetensi Teknik Elektronika Industri, yaitu mulai dari elektronika umum (rekayasa elektronika), mikrokontroller, mikroprocessor, pneumatic, PLC, programming berbasis komputer, dan lain sebagainya terkait perangkat industri yang memiliki hubungan atau bekerja dengan sistem elektronik. Selain itu, peluang kerja lulusan Teknik Elektronika Industri SMKN 1 Sukorejo bisa dikatakan sangat luas, mengingat ketrampilan yang diajarkan juga kompleks. Secara umum, output lulusan kompetensi TEI SMKN 1 Sukorejo rata-rata sangat mudah mencari pekerjaan. Tentu jenis pekerjaan terkait dengan elektronika industri pada posisi teknisi elektronika industri, instrumentasi, atau teknisi kontrol.</p>',
            'foto' => 'tei.png',
        ]);
        DB::table('jurusans')->insert([
            'jurusan' => 'REKAYASA PERANGKAT LUNAK (RPL)',
            'deskripsi' => '<p>Program Keahlian Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer. Lulusan RPL dewasa ini sangat dibutuhkan untuk menjawab banyaknya kebutuhan industri bagi ketersediaan tenaga Teknisi dalam bidang pengembangan software. Beberapa ruang lingkup pekerjaan di bidang RPL adalah Software Developer, Game Development, Software Tester, Software Engineering , Software Analis dan Integrator, Konsultan IT dan Programmer.</p><p><strong>Keunggulan Jurusan RPL</strong></p><ol><li>Mampu bekerja di berbagai bidang karena sudah dibekali dengan berbagai ilmu dan pengetahuan pada bidang teknologi.</li><li>Mampu membuat aplikasi&nbsp;<i>desktop</i>,&nbsp;<i>web</i>&nbsp;dan&nbsp;<i>mobile</i>.</li><li>Pekerjaan yang relatif mudah dan santai, dapat dikerjakan dimanapun dan kapanpun menggunakan koneksi tentunya.</li><li>Lebih terdepan karena jurusan RPL lebih mengerti dan mendalami berbagai teknologi.</li><li>Mampu memasang sebuah PC.</li><li>Mengerti akan fungsi dari komputer</li></ol>',
            'foto' => 'rpl.png',
        ]);
        DB::table('jurusans')->insert([
            'jurusan' => 'TEKNIK KIMIA INDUSTRI (TKI)',
            'deskripsi' => '<p>Program keahlian yang mempelajasi pemprosesan bahan mentah menjadi berupa barang setengah jadi ataupun barang jadi (produk) seperti : minyak bumi dan gas bumi, gas bio, detergen, cairan anti kuman, planstik, kertas, kecantikan, obat-obatan, makanan instan, dll. Lulusan Teknik Kimia Industri berpeluang kerja antara lain : Di Industri Kimia (Sebagai Analisis Laboratorium dan Operator Peralatan Industri Kimia); Industri Pangan (Indofood, Unilever, Makanan Instan dll); Industri Kesehatan dan Kecantikan : (Industri Obat-obatan, detergen, sabun, pasta gigi, dll); Pertambangan : Pertamina, Pabrik Pengolahan Oli, dan Gas; Industri Selter Industri Pupuk dan Peptisida, Dll.</p><p><strong>VISI DAN MISI</strong></p><p><strong>Visi</strong><br>Terwujudnya tamatan yang berimtaq kepada Tuhan Yang Maha Esa. Berbudi Pekerti Luhur, Mandiri, Berdaya saing tinggi, berperilaku profesional dan berwawasan lingkungan dalam menyongsong era globalisasi</p><p><strong>Misi</strong><br>1. Menyiapkan tenaga kerja terampil berkualitas dan profesional sesuai dengan standart kompetensi industri<br>2. Membekali peserta didik dengan pengetahuan, ketrampilan dan atitude agar kompeten dan mampu secara mandiri baik di dunia industri maupun di jenjang pendidikan yang lebih tinggi<br>3. Menghasilkan tamatan yang memiliki kemampuan yang berkualitas dan mampu bersaing di dunia kerja maupun mampu bekerja mandiri</p>',
            'foto' => 'tki.png',
        ]);
        DB::table('jurusans')->insert([
            'jurusan' => 'TEKNIK AUDIO VIDEO (TAV)',
            'deskripsi' => '<p>Jurusan Teknik Audio Video (TAV), merupakan salah satu diantara lima jurusan yang ada di SMKN 1 Sukorejo yang mendidik dan membekali siswa-siswinya terampil dan profesional dibidang audio video, pembuatan perangkat audio, mengoperasikan sound sistem, memahami multi media perekaman baik suara maupun gambar sampai proses editing dan siap untuk dipublikasikan atau sebagai movie dokumenter. Terampil dan memahami bidang pertelevisian, sistem pengoperasian, perawatan dan perbaikan, juga pemahaman proses siaran Televisi. Menguasai program-program komputer yang menunjang proses Teknik Audio Video.</p><p><strong>VISI DAN MISI</strong></p><p><strong>Visi</strong><br>Terbentuknya Sumber Daya Manusia yang Profesional dalam Bidang Teknologi serta unggul dalam IPTEK dan IMTAK</p><p><strong>Misi</strong><br>1. Mempersiapkan lulusan yang kreatif dan produktif dalam bidang elektronika guna memasuki dunia usaha<br>2. Mempersiapkan lulusan dalam mengisi lowongan kerja.</p>',
            'foto' => 'tav.png',
        ]);
    }
}
