<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('blogs')->insert([
            'judul' => 'PERTEMUAN LANJUTAN PROJECT BERSAMA “SAVING ENERGY GOLF CART” BERSAMA PT. GOLF TAMAN DAYU',
            'kategori' => '1',
            'deskripsi' => 'Sukorejo, 23 November 2022 Pertemuan lanjutan antara SMK Negeri 1 Sukorejo dengan PT. Golf Taman Dayu dilaksanakan di Ruang Kepala Sekolah. Bapak Diat Pradityo selaku GA & IR Executive PT. Golf Taman Dayu memaparkan secara teknis alur pelaksanaan projek saving energy golf cart. Projek bersama ini diharuskan selesai dalam kurun waktu 2 bulan terhitung mulai 28',
            'foto' => 'golf.png',
            'created_at' => '2022-12-01 04:31:58',
            'updated_at' => '2022-12-01 04:31:58'
          ]);
          DB::table('blogs')->insert([
            'judul' => 'PENANDATANGANAN MOU KERJASAMA ANTARA SMK NEGERI 1 SUKOREJO DENGAN SAVE THE CHILDREN',
            'kategori' => '2',
            'deskripsi' => 'Senin, 21 November 2022 SMK Negeri 1 Sukorejo melakukan penandatanganan MOU kerjasama dengan Yayasan Save The Children. Yayasan Save the Children Indonesia merupakan salah satu bagian dari masyarakat dunia yang berada dan bekerja di Indonesia sejak tahun 1976. Selama kurun waktu tersebut berbagai program yang bertujuan sebagai upaya pemenuhan hak – hak anak telah diberikan',
            'foto' => 'mou.png',
            'created_at' => '2022-12-01 04:33:58',
            'updated_at' => '2022-12-01 04:33:58'
          ]);
          DB::table('blogs')->insert([
            'judul' => 'KUNJUNGAN INDUSTRI JURUSAN TEKNIK KENDARAAN RINGAN KE PT. TENTREM SEJAHTERA',
            'kategori' => '1',
            'deskripsi' => 'SMK Negeri 1 Sukorejo mengawali bulan November dengan melakukan Kunjungan Industri ke PT. Tentrem Sejahtera. Kunjungan industri menjadi agenda rutin SMK Negeri 1 Sukorejo dengan tujuan untuk membuka wawasan peserta didik tentang dunia industri. Selain itu, kunjungan industri juga menjadi bekal peserta didik sebelum melaksanakan Praktik Kerja Lapangan (PKL). Kunjungan ini diikuti oleh 100 peserta',
            'foto' => 'tentrem.png',
            'created_at' => '2022-12-01 04:40:58',
            'updated_at' => '2022-12-01 04:40:58'
          ]);
    }
}
