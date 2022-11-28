<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dharma extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dharmas')->insert([
            'nama' => 'Nur Aida, S.Pd / Ny. Rudi Trisantoso, S.Pd., M.Pd',
            'jabatan' => 'KETUA',
            'tempat_lahir' => 'Pasuruan	',
            'tgl_lahir' => '16-Mei-1970',
            'alamat' => 'Perumahan Landungsari indah blok I-20 RT 3 RW 6 Landungsari-Dau, Kab. Malang',
            'foto' => 'aida.jpeg'
        ]);
        DB::table('dharmas')->insert([
            'nama' => '	Luluk Kusuma Herminingsih, S.Pd',
            'jabatan' => 'WAKIL KETUA',
            'tempat_lahir' => 'Pasuruan	',
            'tgl_lahir' => '06-Feb-1968',
            'alamat' => 'Jaqi RT 008 RW 002 Candiwates Prigen, Kab. Pasuruan',
            'foto' => 'luluk.jpg'
        ]);
        DB::table('dharmas')->insert([
            'nama' => '	Asnah Yuniarti, S.Pd',
            'jabatan' => 'SEKRETARIS',
            'tempat_lahir' => 'Pasuruan	',
            'tgl_lahir' => '06-Ags-1973',
            'alamat' => 'Dusun Sendi RT 01/RW 23 Sumbergedang Pandaan Pasuruan',
            'foto' => 'asnah.jpg'
        ]);
    }
}
