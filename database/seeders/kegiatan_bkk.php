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
            'foto' => 'detailbkk1.jpg,detailbkk2.jpg,detailbkk3.jpg,detailbkk4.jpg,detailbkk5.jpg,',
        ]);
    }
}
