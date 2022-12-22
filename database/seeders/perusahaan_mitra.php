<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class perusahaan_mitra extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaan_mitra')->insert([
            'dudi' => 'PT.Ramagloria Sakti Tekstil Industri',
            'alamat' => 'Jl. Embong Trengguli No 22 Kaliasin, Genteng, Kota Surabaya',
            'nomor' => '421.5/045.051.09.4/2017',
            'masa_berlaku' => '5',
            'created_at' => now(),
        ]);
        DB::table('perusahaan_mitra')->insert([
            'dudi' => 'PT.Ramagloria Sakti Tekstil Industri',
            'alamat' => 'Jl. Embong Trengguli No 22 Kaliasin, Genteng, Kota Surabaya',
            'nomor' => '421.5/045.051.09.4/2017',
            'masa_berlaku' => '5',
            'created_at' => now(),
        ]);
        DB::table('perusahaan_mitra')->insert([
            'dudi' => 'PT.Ramagloria Sakti Tekstil Industri',
            'alamat' => 'Jl. Embong Trengguli No 22 Kaliasin, Genteng, Kota Surabaya',
            'nomor' => '421.5/045.051.09.4/2017',
            'masa_berlaku' => '5',
            'created_at' => now(),
        ]);
    }
}
