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
        ]);
        DB::table('lowongankerja')->insert([
            'judul' => 'LOWONGAN KERJA – PT. SHINWA NONWOVENS
            INDONESIA',
            'deskripsi' => '<p>INFO BKK SMKN 1 SUKOREJO
            09 September 2022

            PT. SHINWA NONWOVENS INDONESIA
            (JL. Kraton Industri Raya No.6-8, Pasuruan Industrial Estate Rembang 67151 Curah Dukuh
            Jawa Timur) Membuka lowongan pekerjaan untuk bagian QC.

            Persyaratan :
            1. Alumni SMK Negeri 1 Sukorejo
            2. Laki – Laki
            3. Jurusan Kimia Industri
            4. Usia maksimal 20 tahun
            5. Diutamakan yang sudah vaksin booster
            6. Penempatan di PIER
            7. Disiplin dan Cekatan
            8. Sanggup bekerja sistem Shift</p>',
            'status' => 'selesai',
            'foto' => 'lowongan2.jpg',
        ]);
        // DB::table('lowongankerja')->insert([
        //     'judul' => '',
        //     'deskripsi' => '',
        //     'status' => '',
        //     'foto' => '',
        // ]);
        DB::table('lowongankerja')->insert([
            'judul' => 'LOWONGAN KERJA CIMORY DAIRY LAND
            PRIGEN',
            'deskripsi' => '<p>INFO BKK SMK NEGERI 1 SUKOREJO
            Cimory Dairy Land Prigen membutuhkan karyawan dengan kriteria:
            1. Alumni SMKN 1 Sukorejo
            2. Laki-laki dan perempuan
            3. Tinggi dan berat badan ideal (diutamakan Laki-laki 160 perempuan 155)
            4. Jujur dan bertanggung jawab


            Bagi yang berminat langsung ikut tes :
            Hari : Minggu, 4 September 2022
            Jam : 09.00 WIB
            Tempat: Aula SMKN 1 Sukorejo


            Syarat :
            1. Berpakaian rapi.
            2. Membawa alat tulis
            3. Membawa CV dan surat lamaran dilampiri
            Fotokopi KTP</p>',
            'status' => 'masih ada',
            'foto' => 'lowongan3.jpg',
        ]);
        DB::table('lowongankerja')->insert([
            'judul' => 'LOWONGAN KERJA PT. JATIM AUTOCOMP
            INDONESIA (PT. JAI)',
            'deskripsi' => '<p>PT. Jatim Autocomp Indonesia memberikan kesempatan kerja untuk alumni
            SMK Negeri 1 Sukorejo. Apabila kalian berminat dan memenuhi syarat yang tercantum dapat
            langsung datang ke SMK Negeri 1 Sukorejo pada salah satu sesi yang tercantum dalam
            brosur.

            Persiapkan diri kalian sebaik mungkin untuk menjadi bagian dari PT. Jatim Autocomp
            Indonesia (PT. JAI)

        </p>',
            'status' => 'selesai',
            'foto' => 'lowongan4.jpg',
        ]);
    }
}
