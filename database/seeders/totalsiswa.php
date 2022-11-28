<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class totalsiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('totalsiswas')->insert([
            'judul' => 'Siswa Kami Lebih dari 1000+',
            'laki_laki' => '600',
            'perempuan' => '600',
            'total_siswa' => '1200',
            'guru' => '98'
        ]);
    }
}
