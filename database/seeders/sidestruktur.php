<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sidestruktur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('sidestrukturorganisasi')->insert([
                'nama' => 'RUDI TRISANTOSO, S.Pd, M.Pd',
                'foto_struktur' => 'rudi.jpg',
            ]);
            DB::table('sidestrukturorganisasi')->insert([
                'nama' => 'TITIK CHOMZAH, S.Pd',
                'foto_struktur' => 'titik.jpg',
            ]);
            DB::table('sidestrukturorganisasi')->insert([
                'nama' => 'ELLYA MAGHFIRLI, S.Pd',
                'foto_struktur' => 'ellya.jpg',
            ]);
            DB::table('sidestrukturorganisasi')->insert([
                'nama' => 'ASNAH YUNIARTI, S.Pd',
                'foto_struktur' => 'asnah.jpg',
            ]);
            DB::table('sidestrukturorganisasi')->insert([
                'nama' => 'JOKO SISWANTO, S.T., M.Pd',
                'foto_struktur' => 'joko.jpeg',
            ]);
    }
}
