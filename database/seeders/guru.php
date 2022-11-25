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
            'nip' => '19710124 199512 1 001',
            'tempat_lahir' => 'Pasuruan	',
            'tgl_lahir' => '24-Jan-1971',
            'tmt_awal' => '16-Jan-2019',
            'status' => 'PNS',
            'gol_ruangan' => 'IV/b – Pembina Tingkat I',
            'jabatan' => 'KEPALA SEKOLAH',
            'foto' => 'rudi.png'
        ]);
        DB::table('gurus')->insert([
            'nama' => 'ASNAH YUNIARTI, S.Pd',
            'nip' => '19730806 200604 2 012',
            'tempat_lahir' => 'Pasuruan	',
            'tgl_lahir' => '06-Ags-1973',
            'tmt_awal' => '02-Jan-2007',
            'status' => 'PNS',
            'gol_ruangan' => 'III/d',
            'jabatan' => 'WAKA SARANA DAN PRASARANA',
            'foto' => 'asnah.jpg'
        ]);
        DB::table('gurus')->insert([
            'nama' => 'ELLYA MAGHFIRLI, S.Pd',
            'nip' => '19730709 199803 2 007',
            'tempat_lahir' => 'Malang',
            'tgl_lahir' => '09-Jul-1973',
            'tmt_awal' => '01-Jan-2005',
            'status' => 'PNS',
            'gol_ruangan' => 'IV/a',
            'jabatan' => 'WAKA KESISWAAN',
            'foto' => 'elly.jpg'
        ]);
    }
}
