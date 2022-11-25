<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class strukturorganisasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('strukturorganisasi')->insert([
            'judul' => 'STRUKTUR ORGANISASI SMK NEGERI 1 SUKOREJO',
            'tahun_ajaran' => 'TAHUN AJARAN 2021/2022',
            'foto_struktur' => 'strukturorganisasi.jpg',
            'foto_sidestruktur' => '["rudi.jpg","titik.jpg","ellya.jpg","asnah.jpg","joko.jpeg"]'
        ]);
    }
}


