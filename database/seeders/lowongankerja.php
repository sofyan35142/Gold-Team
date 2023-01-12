<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class lowongankerja extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lowongankerja')->insert([
            'judul' => 'LOWONGAN KERJA INDOMARET',
            'deskripsi' => '<p>Kabar gembira bagi para pencari ker#ja. PT Indomarco Prismatama, beroperasi sebagai Indomaret, adalah jaringan pengecer waralaba di Indonesia. Kembali membuka kesempatan kerja untuk lulusanSMK.</p><p>Bagi alumni SMK Negeri 1 Sukorejo yang berminat dapat segera mendaftarkan diri <a href="http://127.0.0.1:8000/BKK/detail-lowongan#">DISINI.</a> Berkas lamaran kerja dikumpulkan di Ruang BKK SMKN 1 Sukorejo paling akhir tanggal 19 Agustus 2022 Pukul 09.00 WIB</p>',
            'status' => 'masih ada',
            'foto' => 'lowongan5.jpg',
            'created_at' => now(),
        ]);

        DB::table('lowongankerja')->insert([
            'judul' => 'Lowongan Kerja PT. ADM',
            'deskripsi' => '<p>PT. ASTRA DAIHATSU MOTOR (PT. ADM)
            adalah perusahaan multi nasional yang bergerak dalam produksi mobil merk daihatsu saat
            ini membuka lowongan pekerjaan sebagai Operator dengan kriteria sebagaimana tercantum
            dalam brosur.

            Bagi yang berminat bisa langsung mengisi link pendaftaran DISINI
            Pendaftaran ditutup pada
            Tanggal : 09 November 2022
            Pukul : 10.00 WIB</p>',
            'status' => 'masih ada',
            'foto' => 'lowongan1.jpg',
            'created_at' => now(),
        ]);

        DB::table('lowongankerja')->insert([
            'judul' => 'Lowongan Kerja PT. Karya Idaman Bersama
            (KIB)',
            'deskripsi' => '<p>INFO LOWONGAN KERJA BKK SMKN 1 SUKOREJO
            Sukorejo, 12 September 2022
            PT. Karya Idaman Bersama membuka lowongan pekerjaan, dengan kriteria sebagai berikut :
            Persyaratan :
            1. Alumni SMK Negeri 1 Sukorejo
            2. Semua Jurusan
            3. Perempuan
            4. Usia Max. 22 tahun
            5. TB : Min. 155 cm (BB ideal)
            6. Tidak berkacamata
            7. Tidak buta waŕna
            8. Sudah Vaksin min sudah Dosis 2
            9. Surat sehat
            10. Berpenampilan Menarik</p>',
            'status' => 'selesai',
            'foto' => 'lowongan6.jpg',
            'created_at' => now(),
        ]);
    }
}
