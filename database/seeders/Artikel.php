<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Artikel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikels')->insert([
            'judul' => 'Artikel Ilmiah',
            'deskripsi' => '<h2><strong>PEMANFAATAN VMWARE WORKSTATION UNTUK MENINGKATKAN KEMAMPUAN PESERTA DIDIK KELAS X RPL DALAM MELAKUKAN PRAKTIKUM INSTALASI SISTEM OPERASI DI SMK NEGERI 1 SUKOREJO</strong></h2><p>Oleh: Arif Kurniawan</p><p>NIM. 203153772637</p><p><br>&nbsp;</p><h4>ABSTRAK</h4><p><br>&nbsp;</p><p>Penelitian ini bertujuan untuk: (1) mengetahui penggunaan VMware Workstation sebagai media pembelajaran guna meningkatkan kemampuan siswa dalam melakukan instalasi sistem operasi; (2) mengetahui kemampuan siswa dalam melakukan instalasi sistem operasi baik dalam aspek kognitif, afektif maupun psikomotorik, setelah menggunakan media pembelajaran VMware Workstation dalam pembelajaran.<br><br>Penelitian ini merupakan jenis penelitian tindakan kelas yang menggunakan media pembelajaran VMware Workstation sebagai alat bantu untuk meningkatkan kemampuan siswa. Penelitian tindakan kelas ini dilakukan dengan 4 tahap yaitu perencanaan, tindakan, observasi dan refleksi. Sasaran penelitian ini adalah siswa kelas X RPL SMK Negeri 1 Sukorejo Pasuruan dengan jumlah 13 siswa. Penelitian dilaksanakan dengan sistematika 2 siklus, dimana tiap siklus. Variabel yang diteliti yaitu kemampuan siswa dalam melakukan instalasi sistem operasi baik dalam aspek kognitif, afektif maupun psikomotorik. Aspek kognitif diamati melalui hasil tes tertulis yang dilaksanakan tiap akhir siklus. Aspek afektif dan psikomotorik diamati melalui pengamatan menggunakan lembar observasi. Data dianalisis secara deskriptif dengan perhitungan sederhana.<br><br>Hasil penelitian menunjukan: (1) rata-rata presentase ketuntasan aspek kognitif mengalami peningkatan sebesar 29,48% dari siklus I dengan rata-rata ketuntasan sebesar 53,85% dan siklus II sebesar 83,33%; (2) rata-rata aspek afektif mengalami peningkatan sebesar 10,26% dari siklus I dengan rata-rata 70,51% dan siklus II sebesar 80,77%; (3) rata-rata aspek psikomotorik mengalami peningkatan sebesar 8,76% dari siklus I dengan rata-rata 76,56% dan siklus II sebesar 85,32%. Berdasarkan hasil yang diperoleh, kemampuan siswa mengalami peningkatan baik dari aspek kognitif, afektif maupun psikomotorik, sehingga penggunaan media pembelajaran VMware Workstation sebagai upaya meningkatkan kemampuan siswa dalam melakukan instalasi sistem operasi berhasil. Kata kunci: media pembelajaran, VMware Workstation, sistem operasi</p>',
            'link' => 'https://smkn1sukorejo.sch.id/wp-content/uploads/2020/11/Abstraksi-1.pdf',
            'linkyoutube' => 'https://www.youtube.com/embed/GFzf9j7_nw0?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0',
            'foto' => 'download-1915753_1280.png',

        ]);
    }
}
