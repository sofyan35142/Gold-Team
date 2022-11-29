<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tempatujikom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempatujikoms')->insert([
            'judul' => 'Visi dan Misi LSP',
            'deskripsi' => '<h2><strong>Tempat Uji Kompetensi</strong></h2><h3><strong>DATA TEMPAT UJI KOMPETENSI (TUK) SEWAKTU LSP SMKN 1 SUKOREJO</strong></h3><ol><li>Tempat Uji Kompetensi (TUK) REKAYASA PERANGKAT LUNAK (RPL)<br>Kode TUK : TUK-365-004- KKNI-RPL<br>Jenis TUK : Sewaktu</li><li>Tempat Uji Kompetensi (TUK) TEKNIK ELEKTRONIKA INDUSTRI (TEI)<br>Kode TUK : TUK-365-002-KKNI-TEI<br>Jenis TUK : Sewaktu</li><li>Tempat Uji Kompetensi (TUK) TEKNIK AUDIO VIDE0 (TAV)<br>Kode TUK : TUK-365-003-KKNI-TAV<br>Jenis TUK : Sewaktu</li><li>Tempat Uji Kompetensi (TUK) TEKNIK KENDARAAN RINGAN (TKR)<br>Kode TUK : TUK-365-001-KKNI-TKR<br>Jenis TUK : Sewaktu</li><li>Tempat Uji Kompetensi (TUK) KIMIA INDUSTRI (KI)<br>Kode TUK : TUK-365-005- KKNI-KIMIA INDUSTRI<br>Jenis TUK : Sewaktu<br>&nbsp;</li></ol>',
            'foto' => 'komp1.png',
            'foto1' => 'komp2.png',

        ]);
    }
}
