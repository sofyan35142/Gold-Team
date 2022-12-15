<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class strukturbkk extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('strukturbkk')->insert([
            'foto_struktur' => 'struktur-organisasiHD.jpg',
            'isi_artikel' => '<h4><strong>A. PENASEHAT</strong></h4><ul><li>Memberikan bimbingan dan arahan bagi kemajuan dan perkembangan BKK SMK NEGERI 1 SUKOREJO</li></ul><h4><strong>B. PENANGGUNG JAWAB</strong></h4><ul><li>Bertanggung jawab dalam kegiatan BKK</li><li>Memberikan pengarahan terhadap kegiatan BKK</li><li>Memotivasi tugas-tugas BKK</li></ul><h4><strong>C. WAKA HUMAS</strong></h4><ul><li>Mengambil tindakan terhadap permasalahan yang timbul dalam pelaksanaan kegiatan BKK</li><li>Bertanggung jawab kepada kepala sekolah dalam pelaksanaan program BKK</li></ul><h4><strong>D. KETUA</strong></h4><ul><li>Menyusun program BKK dan melaporkan kegiatan BKK</li><li>Bertanggungjawab atas aktivitas BKK kepada WAKA HUMAS</li><li>Mengkoordinir pelaksanaan BKK</li><li>Mendistribusikan tugas kepada petugas-petugas yang bersangkutan</li><li>Memonitor kegiatan yang dilakukan oleh petugas-petugas</li><li>Menjalin kerjasama dengan Dunia Usaha/Dunia Industri.</li></ul><h4><strong>E. SEKRETARIS</strong></h4><ul><li>Mendaftar dan mendata lowongan kerja yang diterima BKK</li><li>Menerima informasi kesempatan kerja dari disnaker, Perusahaan, atau instansi lainnya yang berhubungan dengan ketenagakerjaan</li><li>Menyiapkan/menyediakan format-format yang diperlukan</li><li>Merekapitulasi hasil pendaftaran secara rutin dan berkala</li><li>Menangani surat Masuk / Keluar.</li><li>Membuat arsip surat masuk/keluar</li><li>Menyusun laporan untuk Disnaker</li></ul><h4><strong>F. BENDAHARA</strong></h4><ul><li>Membuat buku kas umum dan harian</li><li>Menertibkan administrasi keuangan</li><li>Menyusun laporan keuangan</li></ul><h4><strong>G. KEWIRAUSAHAAN</strong></h4><ul><li>Mengadakan pelatihan penanaman jiwa kewirausahaan kepada peserta didik</li><li>Mengadakan program pendampingan kegiatan wirausaha peserta didik</li><li>Mengadakan event pameran hasil produk kewirausahaan peserta didik</li><li>Turut serta mempromosikan dan memasarkan produk kewirausahaan</li></ul><h4><strong>G. KEWIRAUSAHAAN</strong></h4><ul><li>Mengadakan pelatihan penanaman jiwa kewirausahaan kepada peserta didik</li><li>Mengadakan program pendampingan kegiatan wirausaha peserta didik</li><li>Mengadakan event pameran hasil produk kewirausahaan peserta didik</li><li>Turut serta mempromosikan dan memasarkan produk kewirausahaan</li></ul><h4><strong>H. PETUGAS INFORMASI PASAR KINERJA (IPK) &amp; PENEMPATAN TENAGA KERJA</strong></h4><ul><li>Mendata/supervisi ke perusahaan untuk memperoleh lowongan pekerjaan</li><li>Mendata pengguna tenaga kerja</li><li>Melakukan penawaran mengenai persediaan tenaga kerja</li><li>Mengantarkan calon tenaga kerja tes di sekolah atau perusahaan</li><li>Mengantarkan calon tenaga kerja saat sudah diterima kerja</li><li>Melaporkan hasil penempatan lulusan</li><li>Menjalin kerjasama dengan Dunia Usaha/Dunia Industri</li></ul><h4><strong>I. PETUGAS BIMBINGAN DAN ANALISIS JABATAN</strong></h4><ul><li>Mengklasifikasikan kemampuan pencari kerja sesuai dengan bakat dan minatnya</li><li>Memberikan motivasi secara khusus tentang Ketenagakerjaan</li><li>Memberikan pelayanan bagi siswa dan alumni yang membutuhkan bimbingan jabatan</li></ul><h4><strong>J. KETUA IKATAN ALUMNI</strong></h4><ul><li>Menjembatani hubungan antara alumni dengan BKK</li><li>Membantu penyebaran informasi lapangan kerja kepada alumni</li><li>Memberikan sosialisasi dan pelatihan wirausaha dan kesiapan kerja kepada peserta didik</li><li>Memberikan sumbangsih saran dan pendapat untuk perkembangan BKK pada khususnya dan Sekolah pada umumnya</li></ul>',
            'nama_member' => 'RUDI TRISANTOSO, S.Pd, M.Pd+JOKO SISWANTO, S.T., M.Pd+TUTIK+Kasipah, S.T',
            'foto_member' => 'rudi.jpg,joko.jpeg,tutik.jpg,kasipah.jpg',
        ]);
    }
}
