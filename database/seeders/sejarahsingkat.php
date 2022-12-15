<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sejarahsingkat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarahsingkats')->insert([
            'judul' => 'Sejarah Singkat',
            'isi_artikel' => '<p>SMK Negeri 1 Sukorejo merupakan sekolah kejuruan yang berdiri di kecamatan Sukorejo pada tahun 2004, berdasarkan Keputusan Bupati Pasuruan nomor : 1633/581/HKI/424.022/2003. Lembaga yang memiliki Nomor Pokok Sekolah Nasional (NPSN) : 20519147 tersebut awalnya membuka dua kompetensi keahlian, yaitu Teknik Kendaraan Ringan (TKR) dan Teknik Elektronika Industri (TEI). Kepala SMK Negeri 1 Sukorejo yang pertama adalah Drs. Herdjumanto. Beliau merupakan kepala sekolah yang handal dan pekerja keras, sehingga dengan dibantu beberapa orang guru, bisa mengelola lembaga ini menjadi lebih meningkat dan maju, baik dari segi kualitas pembelajaran maupun kuantitas siswa yang bisa diterima di sekolah tersebut.</p><p>Kepemimpinan Bapak Herdjumanto berakhir pada tahun 2013, tepatnya 23 Mei 2013. Beliau digantikan oleh Drs. Imam Mahmudi, M.MPd. Pada Era kepemimpinan beliau, pada tahun pelajaran 2014/2015 ada penambahan 2 kompetensi keahlian, yaitu Rekayasa Perangkat Lunak (RPL) dan Kimia Industri (KI). Dengan penambahan kedua kompetensi keahlian ini SMK Negeri 1 Sukorejo semakin berkembang, khususnya gedung dan sarana prasarana serta kuantitas peserta didiknya. Semakin besar jumlah peserta didik semakin banyak pula tenaga pendidik yang dibutuhkan. Alasan dibukanya dua jurusan ini adalah untuk mempersiapkan sekaligus memenuhi permintaan DUDI tempat peserta didik melakukan Prakerin, ternyata banyak perusahaan yang memerlukan jurusan tersebut. Pada tahun pelajaran 2015/2016 SMK Negeri 1 Sukorejo membuka satu kompetensi keahlian baru lagi, yaitu Teknik Audio Vidio (TAV). Pada tahun 2018, melalui berbagai inovasi dan kreativitas guru yang dilakukan dan juga semua warga sekolah akhirnya SMK Negeri 1 Sukorejo memenuhi persyaratan dari Direktorat Pembinaan SMK untuk memperoleh predikat “SMK Rujukan”.</p><p>Pada awal tahun 2019 SMK Negeri 1 Sukorejo memiliki Kepala Sekolah yang baru, yaitu Bapak Rudi Trisantoso, S.Pd., M.Pd. Pada tahun 2019 sekolah ini semakin sering ditempati perekrutan tenaga kerja dari berbagai DUDI. Disamping itu pada tahun 2019 itu pula sekolah ini mendapat tambahan predikat sebagai “SMK Pengampu” dari Dinas Pendidikan Provinsi Jawa Timur. Saat ini jumlah siswa di SMK Negeri 1 Sukorejo sebanyak 1.108 siswa dengan rombongan belajar sebanyak 33 rombel. Adapun sarana pembelajaran yang ada sebanyak 27 kelas ruang teori dan 9 ruang untuk praktek. Sedangkan sumberdaya yang ada sebanyak 54 orang guru dan 25 orang karyawan. Berdasarkan keputusan Badan Akreditasi Nasional Sekolah/Madrasah nomor : 032/BAN-SM/SK/2019 tahun 2019 dinyatakan bahwa SMK Negeri 1 Sukorejo “Terakreditasi A”.</p>',
            "judul_fotoside" => "foto Bagian Sekolah",
            "foto_side" => '["header.jpg","taman.jpg","labkimia1.jpg"]'
        ]);
    }
}
