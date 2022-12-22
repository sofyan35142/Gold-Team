<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sponsor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsors')->insert([
           'foto' => 'dutaputri.jpg'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'maspion.jpg'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'rapid.png'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'alfan.jpeg'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'humma.png'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'yamindo.png'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'pranata.jpg'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'tuna.png'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'astra.png'
        ]);
        DB::table('sponsors')->insert([
           'foto' => 'agung.png'
        ]);

    }
}
