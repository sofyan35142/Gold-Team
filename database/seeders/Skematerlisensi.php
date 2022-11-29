<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Skematerlisensi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skematerlisensis')->insert([
            'judul' => 'Skema Terlisensi',
            'deskripsi' => '<h3><strong>RUANG LINGKUP SKEMA TERLISENSI :</strong></h3><p>SKEMA SERTIFIKASI KKNI LEVEL II PADA KOMPETENSI KEAHLIAN REKAYASA PERANGKAT LUNAK<br>Kode Skema : SKM/BNSP/00010/1/2020/33<br><br>Jenis Skema : KKNI<br><br>SKEMA SERTIFIKASI KKNI LEVEL II PADA KOMPETENSI KEAHLIAN TEKNIK ELEKTRONIKA INDUSTRI<br>Kode Skema : SKM/BNSP/00003/1/2020/1<br><br>Jenis Skema : KKNI<br><br>SKEMA SERTIFIKASI KKNI LEVEL II PADA KOMPETENSI KEAHLIAN TEKNIK AUDIO VIDEO<br>Kode Skema : SKM/BNSP/00003/1/2020/25<br><br>Jenis Skema : KKNI<br><br>SKEMA SERTIFIKASI KKNI LEVEL II PADA KOMPETENSI KEAHLIAN TEKNIK KENDARAAN RINGAN<br>Kode Skema : SKM/BNSP/00003/1/2020/59<br><br>Jenis Skema : KKNI<br><br>Skema Sertifikasi KKNI Level II Pada Kompetensi Keahlian Kimia Industri<br>Kode Skema : Dalam Proses Lisensi<br><br>Jenis Skema : KKNI</p>',
            'foto' => 'kegiatan lsp.jpeg',
        ]);
    }
}
