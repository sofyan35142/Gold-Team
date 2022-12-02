`<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jmlpemegang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jmlpemegangs')->insert([
            'judul' => 'Jumlah Pemegang Sertifikat',
            'deskripsi' => '<p>-<br>&nbsp;</p>',
            'jml' => 'Tabel-LSP.jpg',
            'foto' => 'lsp.jpg',

        ]);
    }
}
