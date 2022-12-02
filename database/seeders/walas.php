<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class walas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walas')->insert([
            'nama_walas' => 'Linawati ,s.pd',
            'kelas' => 'XII RPL 2',
            'laki_laki' => '16',
            'perempuan' => '20',
            'jumlah' => '36',
            'foto' => 'aida.jpeg'
        ]);
        DB::table('walas')->insert([
            'nama_walas' => 'Afif',
            'kelas' => 'XII RPL 1',
            'laki_laki' => '16',
            'perempuan' => '20',
            'jumlah' => '36',
            'foto' => 'aida.jpeg'
        ]);
        DB::table('walas')->insert([
            'nama_walas' => 'Zulham Munsif',
            'kelas' => 'XI RPL 2',
            'laki_laki' => '12',
            'perempuan' => '24',
            'jumlah' => '36',
            'foto' => 'aida.jpeg'
        ]);
    }
}
