<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class videoprofil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videoprofils')->insert([
            'Judul' => 'Video Profil Sketsu',
            'link' => '1',
            'deskripsi' => 'Video srofil sekolah memperkenalkan kepada kalian hal-hal berkaitan dengan Kejurusan, lingkungan sekolah , fasilitas umum sekolah, fasilitas pembelajaran (kelas,lab,dll), ruang belajar, kegiatan siswa, dan masih banyak lagi. Biar kalian tidak penasaran apa saja yang ada di dalam SMK NEGERI 1 SUKOREJO, segera tonton video profilnya. Jangan Sampai Tidak Ditonton Nanti Menyesal.',
            'foto' => 'video.png',
        ]);
    }
}
