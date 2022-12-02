<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sekolahrujukan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolahrujukan')->insert([
            'foto_head' => 'wssosialisasi.jpg',
            'isiartikel' => '<p><strong>Sekolah Adiwiyata dan Pendidikan Karakter</strong></p><p>Pengembangan SMK rujukan sebagai upaya mendukung peningkatan mutu pembelajaran di SMK serta pemenuhan kebutuhan sarana prasarana pendidikan yang diperlukan dalam pelaksanaan kegiatan pembelajaran di SMK. Pengembangan Sekolah Rujukan (Program Peningkatan Pembelajaran) di SMK adalah agar sekolah mampu:</p><p>1.Menyelaraskan kurikulum Kompetensi Keahlian yang lulusannya paling banyak dibutuhkan oleh DUDI pasangan di daerah setempat. Diharapkan Kompetensi Keahlian ini dapat menjadi Kompetensi Keahlian unggulan, sehingga dapat menjadi kebanggaan wilayah atau Kompetensi Keahlian Prioritas.</p><p>2.Meningkatkan pengalaman kerja nyata guru di DUDI untuk digunakan sebagai acuan dan atau diterapkan dan dikembangkan di sekolah.</p><p>3.Mengimplementasikan Gerakan Literasi di Sekolah (GLS).</p><p>4.Mengembangkan Penguatan Pengembangan Karakter (PPK).</p><p>5.Mengimplementasikan pembelajaran RI 4.0.</p><p>6.Meningkatkan mutu penilaian.</p><p>7.Menjadi acuan SMK lain dalam peningkatan mutu pembelajaran.</p>',
        ]);
    }
}
