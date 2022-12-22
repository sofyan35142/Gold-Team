<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class guru extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'nama' => 'RUDI TRISANTOSO, S.Pd, M.Pd',
            'nip' => '197101241995121001',
            'tempat_lahir' => 'Pasuruan	',
            'tgl_lahir' => '	2022-12-29',
            'tmt_awal' => '	2022-12-29',
            'status' => 'PNS',
            'gol_ruangan' => 'IV/b – Pembina Tingkat I',
            'jabatan' => 'KEPALA SEKOLAH',
            'foto' => 'rudi.png'
        ]);
        DB::table('gurus')->insert([
            'nama' => 'ASNAH YUNIARTI, S.Pd',
            'nip' => '197308062006042012',
            'tempat_lahir' => 'Pasuruan	',
            'tgl_lahir' => '	2022-12-29',
            'tmt_awal' => '	2022-12-29',
            'status' => 'PNS',
            'gol_ruangan' => 'III/d',
            'jabatan' => 'WAKA SARANA DAN PRASARANA',
            'foto' => 'asnah.jpg'
        ]);
        DB::table('gurus')->insert([
            'nama' => 'ELLYA MAGHFIRLI, S.Pd',
            'nip' => '197307091998032007',
            'tempat_lahir' => 'Malang',
            'tgl_lahir' => '	2022-12-29',
            'tmt_awal' => '	2022-12-29',
            'status' => 'PNS',
            'gol_ruangan' => 'IV/a',
            'jabatan' => 'WAKA KESISWAAN',
            'foto' => 'elly.jpg'
        ]);
    }
}
