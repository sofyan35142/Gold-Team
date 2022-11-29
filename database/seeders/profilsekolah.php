<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class profilsekolah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profilsekolah')->insert([
            'foto_sekolah' => 'fotosekolah.jpg',
            'nama_sekolah' => '	SMK Negeri 1 Sukorejo',
            'npsn' => 20519147,
            'desa' => '	Sukorejo',
            'kecamatan' => 'Sukorejo',
            'daerah' => 'Kabupaten Pasuruan',
            'provinsi' => '	Jawa Timur',
            'kode_pos' => 67161,
            'alamat' => 'Jl. Sumbergareng Desa Sukorejo Kecamatan Sukorejo,
            Kabupaten Pasuruan, Jawa Timur 67161',
            'no_telp' => 03436752037,
            'email' => 'smkn_sukorejo@yahoo.com',
            'kegiatan_pembelajaran' => 'Secara Daring (selama 5 hari)',
            'waktu_penyelenggaraan' => 'Pagi',
            'jarak_ke_pusat_kecamatan' => 2,
            'jarak_ke_pusat_daerah' => 10,
            'tahun_berdiri' => 2004,
            'penerbit_SK' => 'bupati',
            'sk_pendirian_sekolah' => '1633/581/HK/424.022/2003',
            'status_sekolah' => 'Negeri / Terakreditasi',
            'kurikulum' => '2013 (revisi 2017)',
            'status_bos' => 'Bersedia Menerima',
            'sumber_listrik' => 'PLN',
            'akses_internet' => 'ada',
        ]);
    }
}
