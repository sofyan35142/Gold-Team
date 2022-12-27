<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class slider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'foto1' => 'slider-03.png',
            'foto2' => 'slider-02.png',
            'foto3' => 'smk.jpg',
        ]);
    }
}
