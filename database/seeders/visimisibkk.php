<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class visimisibkk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisibkk')->insert([
            'visi' => '<ul><li>Terwujudnya Tingkat Keterserapan Tamatan Yang Tinggi Baik Di Dunia Industri Maupun Wirausaha.</li></ul>',
            'misi' => '<ul><li>Mengadakan pelatihan softskill, kesiapan kerja, dan enterpreneur serta finansial literasi baik dari pihak internal maupun eksternal</li><li>Melakukan kerjasama yang intensif dengan manajemen sekolah, BK, dan alumni.</li><li>Menjalin kerjasama yang baik dengan IDUKA dan UMKM.</li><li>Melakukan maping rencana peserta didik dan tracer study.</li><li>Menyediakan berbagai informasi peluang kerja dan wirausaha melalui platform digital.</li><li>Menjalin komunikasi yang baik dengan Dinas Tenaga Kerja, Dinas Perindustrian, BLK dan APINDO.</li></ul>',
            'ruanganbkk' => 'ruangbkk.png',
        ]);
    }
}
