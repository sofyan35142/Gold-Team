<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
