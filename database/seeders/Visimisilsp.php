<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Visimisilsp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisilsps')->insert([
            'judul' => 'Visi dan Misi LSP',
            'deskripsi' => '<h3><strong>VISI LSP SMKN 1 SUKOREJO</strong></h3><p>Terwujudnya Sumber Daya Manusia (SDM) yang kompeten, dan profesional dibidangnya sehingga mampu menghasilkan tenaga kerja yang berdaya saing global, unggul, terpercaya, berakhlak mulia, serta berwawasan lingkungan hidup.</p><h3><strong>MISI LSP SMKN 1 SUKOREJO</strong></h3><ol><li>Menyelenggarakan dan menyediakan pelatihan penguji (asesor) kompetensi yang bekerja sama dengan Master Asesor BNSP secara Profesional.</li><li>Memberikan pelayanan dan pengujian bagi peserta (asesi) secara profesional</li><li>Meningkatkan kualitas, dan persyaratan unit-unit kompetensi sesuai dengan peraturan perundang-undangan yang berlaku.</li><li>Meningkatkan kualitas, kuantitas dan legalitas penguji (asesor) kompetensi yang lebih handal dan Kompeten</li><li>Memelihara dan mengembangkan skema-skema sertifikasi bidang : &nbsp;</li></ol><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;a. Teknik Kendaraan Ringan (TKR),</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;b. Teknik Elektronika Industri (TEI),</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;c. Kimia Industri (KI),</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;d. Rekayasa Perangkat Lunak (RPL)</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;e. Teknik Audio Video (TAV)</p><h2><strong>SASARAN MUTU LSP SMKN 1 SUKOREJO</strong></h2><ol><li>Tercapainya sertifikasi dibidang Teknik Kendaraan Ringan (TKR), Teknik Elektronika Industri (TEI), Kimia Industri (KI), Teknik Audio Video (TAV) dan Teknik Rekayasa Perangkat Lunak (RPL)</li><li>Mendorong tersedianya tenaga kerja yang kompeten, profesional dan kompetitif bidang Teknik Kendaraan Ringan (TKR), Teknik Elektronika Industri (TEI), Kimia Industri (KI), Teknik Audio Video (TAV) dan Rekayasa Perangkat Lunak (RPL).</li></ol>',
            'foto' => 'lsp.jpg',
        
        ]);
    }
}
