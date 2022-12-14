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
            'sambutan' => 'Selamat datang di Website kami di Sekolah Menengah Kejuruan Telkom Bandung. Website ini kami tujukan untuk seluruh guru, karyawan dan siswa serta masyarakat umum agar dapat mengakses seluruh informasi tentang profil, aktifitas/kegiatan serta fasilitas sekolah secara berkala dan update. Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan website ini lebih lanjut. Kami berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur sesuai dengan motto sekolah kita. πΊπ΄π² π»πππππ π©ππππππ πΊπππππππππ πΊπππ π±ππππ, π·πΉπ°π΄π¨πΊπ¬πΉπΌ πΊππππ π·ππππ, πΊππππ πΊπππ, π΄ππππ π·ππππ πππ π΄ππππ πΊπππ πππππ π²πππππππ, π·πππππππ πππ π³ππππππ Pada akhirnya, mari kita bekerja dan berkarya dengan keikhlasan yang tulus demi suksesnya masa depan anak-anak didik kita.',
            'foto' => 'rudi.png',
        ]);
    }
}
