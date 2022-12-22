<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class umkm_pasangan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('umkm_pasangan')->insert([
            'nama_umkm' => 'UKM SUKOREJO SMART UD GADING MAS',
            'bidang' => 'Produk Makanan',
            'alamat' => 'Karangsono, Sukorejo',
            'pemilik' => 'joe biden',
        ]);
        DB::table('umkm_pasangan')->insert([
            'nama_umkm' => 'fingercraftgallery',
            'bidang' => 'toko kerajinan tangan',
            'alamat' => 'Jl urip sumohardjo 297 rt3/rw3 kel.pandaan . Kec.pandaan',
            'pemilik' => 'Puput Surya Dewi',
        ]);
        DB::table('umkm_pasangan')->insert([
            'nama_umkm' => 'Lava broms',
            'bidang' => 'Online Shop',
            'alamat' => 'karangtengah karangrejo purwosari pasuruan',
            'pemilik' => 'Muchammad Agus Ubaidillah',
        ]);
    }
}
