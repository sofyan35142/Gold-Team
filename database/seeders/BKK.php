<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BKK extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bkks')->insert([
            'judul' => 'Bursa Kerja Khusus',
            'sub_judul1' => 'Motto Dan Logo Bursa Kerja Khusus',
            'foto1' => 'logobkk.png',
            'deskripsi' => '<p><strong>MAKNA LOGO :</strong></p><ol><li>Gambar gigi roda berwarna biru melambangkan hubungan kerjasama antara BKK dengan IDUKA, Management sekolah, alumni dan instansi terkait yang penuh energi, kuat dan semangat</li><li>Gambar siswa meraih bintang melambangkan upaya BKK dalam mewujudkan mimpi Penerus Negeri yang berbudi luhur dan bertakwa kepada Tuhan Yang Maha Esa</li><li>Gambar bola dunia berwarna orange melambangkan bahwa lulusan memiliki daya saing tinggi di era revolusi industri 4.0</li></ol>',
            'sub_judul2' => 'Motto Dan Logo Bursa Kerja Khusus',
            'foto2' => 'gedungbkk1.png',
            'foto3' => 'gedungbkk2.png',
            'foto4' => 'gedungbkk3.png',
            'foto5' => 'Ruang BKK Tampak Dalam 1.JPG',
            'judul_sidebar' => 'Galeri BKK',
            'foto6' => 'bkk.jpg',
        ]);
    }
}
