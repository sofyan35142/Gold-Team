<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kategoriblog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoriblogs')->insert([
            'kategori' => 'artikel guru',
        ]);

        DB::table('kategoriblogs')->insert([
            'kategori' => 'berita sekolah',
        ]);
        DB::table('kategoriblogs')->insert([
            'kategori' => 'adiwiyata',
        ]);
    }
}
