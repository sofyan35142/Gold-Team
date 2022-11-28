<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LSP extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('l_s_p_s')->insert([
            'judul' => 'LSP',
            'deskripsi' => '<h3><strong>DETAIL / SEJARAH PEMBENTUKAN LSP SMKN 1 SUKOREJO</strong></h3><ol><li>Dibentuk berdasarkan :<br>&nbsp;Surat Keputusan Kepala SMK Negeri 1 Sukorejo Nomor : 421.5 /490/ 424.051.09.4 / 2015 tertanggal : 17 September 2015 Tentang Pembentukan Panitia Kerja Pendirian LSP SMKN 1 Sukorejo ,</li><li>Surat Keputusan Kepala SMK Negeri 1 Sukorejo Nomor : 421.5 /493/ 424.051.09.4 / 2015, tertanggal : 19 September 2015 Tentang Pembentukan Lembaga Sertifikasi Profesi SMKN 1 Sukorejo</li><li>Lisensi dari Badan Nasional Sertifikasi Profesi dengan Surat Keputusan Ketua BNSP Nomor KEP.0023/BNSP/I/2019 tentang Perpanjangan Lisensi dan Penambahan Ruang Lingkup Kepada Lembaga Sertifikasi Profesi SMKN 1 Sukorejo Kab. Pasuruan</li><li>Sertifikat Lisensi dari Badan Nasional Sertifikasi Profesi kepada Lembaga Sertifikasi Profesi SMKN 1 Sukorejo Kab. Pasuruan dengan Nomor : BNSP-LSP-363-ID</li></ol><h3><strong>PROFIL LSP</strong></h3><p>Nama LSP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : LSP SMKN 1 Sukorejo<br>Jenis LSP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : LSP Pihak Kesatu<br>Sub Jenis LSP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : LSP P1 SMK<br>No SK Kepala SMK&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 421.5/493/424.051.09.4/2015,&nbsp; Tanggal : 19/09/2015<br>No Sertifikat Lisensi&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; BNSP-LSP-365-ID<br>No SK LSP BNSP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: KEP.0023/BNSP/I/2019, Tanggal : 17 Januari 2019<br>Masa Berlaku&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 17/01/2019 sd. 17/01/2024</p><h3><strong>ALAMAT LSP</strong></h3><p>Propinsi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;: Jawa Timur<br>Kota/Kabupaten&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Pasuruan<br>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; : Jalan Sumbergareng Kecamatan Sukorejo Kabupaten Pasuruan Kode Pos 67161<br>Koordinat Lokasi&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: -7.72787320270721,112.71725831150889<br>No. Telepon Kantor LSP &nbsp; &nbsp; : 08113664004, 08155280457<br>No. Telpon Admin LSP&nbsp; &nbsp; &nbsp; &nbsp; : 085855014190<br>No. Fax Kantor LSP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : –<br>Email LSP (Aktif)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : lspsmkn1sukorejo@gmail.com<br>Website LSP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: smkn1sukorejo.sch.id&nbsp;&nbsp; <i><strong>(gabung dengan web SMK)</strong></i><br>Media Sosial&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;: https://web.facebook.com/sukorejo.sertifikasi.7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>No. NPWP LSP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; : 00.337.465.9-624.000 <i><strong>(gabung dengan web SMK)</strong></i><br>No. Rekening LSP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Bank BRI Cab Sukorejo No Rek. 6488-01-023265-53-8<br>a/n &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : LSP SMKN 1 SUKOREJO</p>',
            'papannama' => 'papan.jpg',
            'kantor' => 'kantorlsp.jpg',
            'denah' => 'layoutlsp.png',
            'link' => 'https://bnsp.go.id/detaillsp?id=91',
        ]);
    }
}
