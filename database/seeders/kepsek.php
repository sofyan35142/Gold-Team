<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kepsek extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kepseks')->insert([
            'nama' => 'RUDI TRISANTOSO, S.Pd, M.Pd',
            'sambutan' => 'Selamat datang di Website kami di Sekolah Menengah Kejuruan Telkom Bandung. Website ini kami tujukan untuk seluruh guru, karyawan dan siswa serta masyarakat umum agar dapat mengakses seluruh informasi tentang profil, aktifitas/kegiatan serta fasilitas sekolah secara berkala dan update. Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan website ini lebih lanjut. Kami berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur sesuai dengan motto sekolah kita. 𝑺𝑴𝑲 𝑻𝒆𝒍𝒌𝒐𝒎 𝑩𝒂𝒏𝒅𝒖𝒏𝒈 𝑺𝒆𝒌𝒐𝒍𝒂𝒉𝒏𝒚𝒂 𝑺𝒂𝒏𝒈 𝑱𝒖𝒂𝒓𝒂, 𝑷𝑹𝑰𝑴𝑨𝑺𝑬𝑹𝑼 𝑺𝒆𝒎𝒖𝒂 𝑷𝒓𝒊𝒎𝒂, 𝑺𝒆𝒎𝒖𝒂 𝑺𝒆𝒓𝒖, 𝑴𝒂𝒌𝒊𝒏 𝑷𝒓𝒊𝒎𝒂 𝒅𝒂𝒏 𝑴𝒂𝒌𝒊𝒏 𝑺𝒆𝒓𝒖 𝒅𝒂𝒍𝒂𝒎 𝑲𝒂𝒓𝒂𝒌𝒕𝒆𝒓, 𝑷𝒓𝒆𝒔𝒕𝒂𝒔𝒊 𝒅𝒂𝒏 𝑳𝒂𝒚𝒂𝒏𝒂𝒏 Pada akhirnya, mari kita bekerja dan berkarya dengan keikhlasan yang tulus demi suksesnya masa depan anak-anak didik kita.',
            'foto' => 'rudi.png',
        ]);
    }
}
