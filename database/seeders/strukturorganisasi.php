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
            'judul' => '',
            'tahun_ajaran' => '',
            'foto_struktur' =>'',
            'foto_sidestruktur' =>''
        ]);
    }
}
