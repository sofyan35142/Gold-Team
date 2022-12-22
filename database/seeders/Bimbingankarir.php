<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bimbingankarir extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bimbingankarirs')->insert([
            'foto' => 'wasap.png',
            'judul' => 'FORUM TANYA JAWAB BIMBINGAN KERJA',
            'link' => 'https://api.whatsapp.com/send?phone=6285234792445&amp;text=Assalamualaikum.%20Saya%20ingin%20menanyakan%20beberapa%20hal%20terkait%20bimbingan%20kerja.%20Mohon%20bantuannya!',
            
        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'bkk.png',
            'judul' => 'APLIKASI BURSA KERJA KHUSUS',
            'link' => 'https://drive.google.com/drive/folders/1SB4HRZcIBUyOxQR4S_EWWjGsRUxQfVt9',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'bkk.png',
            'judul' => 'MEDIA SOSIAL BURSA KERJA KHUSUS',
            'link' => 'https://drive.google.com/file/d/1F_fppzqqTRQ94xNSBB_7QLc8alvjghiw/view?usp=share_link',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'alumni.jpg',
            'judul' => 'TESTIMONI ALUMNI SMKN 1 SUKOREJO',
            'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSeWsmECSRWrxLI766NLusaeIuar7bqwvLYs0pSfzJ-mrDaUzA/viewform',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'ortu1.png',
            'judul' => 'SURVEY KEPUASAN ORANG TUA',
            'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSexD6fbqWjwBFmWGlba5YDwJvEUa5G1YURe5h58jqNfPWmeuw/viewform',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'lamaran.png',
            'judul' => 'CONTOH SURAT LAMARAN PEKERJAAN',
            'link' => 'https://youtu.be/3c3NUW9CvCI',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'cv.png',
            'judul' => 'CONTOH CURRICULUM VITAE (CV)',
            'link' => 'https://drive.google.com/file/d/14TpVoowAlZXtgObCiCvrO-5akHuROTQ2/view?usp=sharing',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'wawan copy.png',
            'judul' => 'TIPS DAN TRIK BERWAWANCARA',
            'link' => 'https://youtu.be/-B3IAX6PVRY',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'wira1.png',
            'judul' => 'TATA CARA MEMBUKA USAHA BARU',
            'link' => 'https://youtu.be/irym62G4le4',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'Apa-itu-Wirausaha_-Pengertian-dan-Kelebihannya-1024x536.png',
            'judul' => 'PROSEDUR PENDIRIAN USAHA',
            'link' => 'https://youtu.be/oNAR5p0wrvg',

        ]);
        DB::table('bimbingankarirs')->insert([
            'foto' => 'kuliah.png',
            'judul' => 'FORUM TANYA JAWAB BERKULIAH',
            'link' => 'https://api.whatsapp.com/send?phone=6285748293833&amp;text=Assalamualaikum.%20Saya%20ingin%20menanyakan%20beberapa%20hal%20terkait%20bimbingan%20kuliah.%20Mohon%20bantuannya!',

        ]);
    }
}
