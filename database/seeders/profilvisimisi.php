<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class profilvisimisi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profilvisimisi')->insert([
            'visimisi' => 'Visi Misi',
            'descvisimisiprofil' => '<h3>TUJUAN</h3><h4>Tujuan Umum</h4><ol><li>Meningkatkan keimanan dan ketaqwaan peserta didik kepada Tuhan Yang Maha Esa.</li><li>Mengembangkan potensi peserta didik agar menjadi warga negara yang berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, demokratis, dan bertanggung jawab.</li><li>Mengembangkan potensi peserta didik agar memiliki wawasan kebangsaan, memahami dan menghargai keanekaragaman budaya bangsa Indonesia.</li><li>Mengembangkan potensi peserta didik agar memiliki kepedulian terhadap lingkungan hidup, dengan secara aktif turut memelihara dan melestarikan lingkungan hidup, serta memanfaatkan sumber daya alam dengan efektif dan efisien.</li><li>Sekolah mampu mengalokasikan anggaran minimal sebesar 20% untuk membiayai kegiatan sekolah adiwiyata.</li></ol><h4>Tujuan Khusus</h4><ol><li>Meningkatkan keimanan dan ketaqwaan peserta didik kepada Tuhan Yang Maha Esa.</li><li>Mengembangkan potensi peserta didik agar menjadi warga negara yang berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, demokratis, dan bertanggung jawab.</li><li>Mengembangkan potensi peserta didik agar memiliki wawasan kebangsaan, memahami dan menghargai keanekaragaman budaya bangsa Indonesia.</li><li>Mengembangkan potensi peserta didik agar memiliki kepedulian terhadap lingkungan hidup, dengan secara aktif turut memelihara dan melestarikan lingkungan hidup, serta memanfaatkan sumber daya alam dengan efektif dan efisien.</li><li>Sekolah mampu mengalokasikan anggaran minimal sebesar 20% untuk membiayai kegiatan sekolah adiwiyata.</li></ol>',
            'foto_side' => 'visimisi.png',
        ]);
    }
}
