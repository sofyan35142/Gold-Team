<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class keunggulan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keunggulans')->insert([
            'judul' => 'Lingkungan Nyaman',
            'deskripsi' => 'Berada dilingkungan Aman, Nyaman, dan Kondusif.',
            'foto' => 'paskib.jpg',
        ]);
        DB::table('keunggulans')->insert([
            'judul' => 'Fasilitas Lengkap',
            'deskripsi' => 'Kami Memiliki Fasilitas Sarana yang Lengkap untuk Menunjang proses pembelajaran.',
            'foto' => 'paskib.jpg',
        ]);
        DB::table('keunggulans')->insert([
            'judul' => 'Lulusan Berkualitas',
            'deskripsi' => 'Kami Mencetak lulusan berkualitas sesuai kebutuhan industri dengan program teaching factory.',
            'foto' => 'paskib.jpg',
        ]);
        DB::table('keunggulans')->insert([
            'judul' => 'Pengajar Kopenten',
            'deskripsi' => 'Guru yang up-to-date dengan perkembangan industri.',
            'foto' => 'paskib.jpg',
        ]);
    }
}
