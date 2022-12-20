<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Sosmed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sosmeds')->insert([
            'script_logo' => 'icont-facebook',
            'jenis_sosmed' => 'Facebook',
            'link' => 'https://www.facebook.com/pages/Smkn-1-Sukorejo/1644253285790355',
        ]);

        DB::table('sosmeds')->insert([
            'script_logo' => 'icont-instagram',
            'jenis_sosmed' => 'Instagram',
            'link' => 'https://instagram.com/sketsu_bisa?igshid=YmMyMTA2M2Y=',
        ]);
    }
}
