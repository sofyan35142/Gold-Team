<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kegiatan_bkk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'WORKSHOP TRACER STUDY DAN PROGRAM KESIAPAN KERJA BEKERJA SAMA DENGAN DINAS TENAGA KERJA KABUPATEN PASURUAN',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Implementasi Link and Match SMK Pusat Keunggulan – SMKN 1 Sukorejo',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Sosialisasi Penyesuaian Budaya Kerja dari PT. Astra Daihatsu',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Guru Tamu Kimia Industri dari PT. Mandiri Investama Sejati',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Strategi Menembus Dunia Kerja di Era Industri 4.0 – Bersama PT. Yanmar',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Strategi Menembus Dunia Kerja di Era Industri 4.0 – Bersama PT. Panverta',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Strategi Menembus Dunia Kerja di Era Industri 4.0 – Bersama PT. KIB',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Strategi Menembus Dunia Kerja di Era Industri 4.0 – Bersama PT. CJI',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Strategi Menembus Dunia Kerja di Era Industri 4.0 – Bersama PT. ATI',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Workshop Kesiapan Kerja Kelas 12 Tahun Ajaran 2020/2021 – Alumni Sketsu',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Workshop Kesiapan Kerja Kelas 12 Tahun Ajaran 2020/2021 – Waka Humas dan Alumni Sketsu',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
        DB::table('kegiatanbkk')->insert([
            'Judul' => 'Workshop Kesiapan Kerja Kelas 12 Tahun Ajaran 2020/2021 – BKK Sketsu',
            'foto' => '["detailbkk1.jpg","detailbkk2.jpg","detailbkk3.jpg","detailbkk4.jpg","detailbkk5.jpg"]',
        ]);
    }
}
