<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ekstra extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ekstras')->insert([
            'judul' => 'PASKIBRA ',
            'nama' => 'Tio Hidayat',
            'deskripsi' => 'Paskibraka adalah singkatan dari Pasukan Pengibar Bendera Pusaka dengan tugas utamanya untuk mengibarkan dan menurunkan Bendera Pusaka (kini duplikat) dalam upacara peringatan Hari Kemerdekaan Republik Indonesia dan Proklamasi Kemerdekaan Republik Indonesia di tiga tempat, yakni tingkat kabupaten/kota, provinsi, dan nasional. Anggotanya berasal dari pelajar SMA/sederajat kelas 10 dan/atau 11.',
            'foto' => 'paskib.jpg',
            'foto_pembina' => 'paskib.jpg',
            'foto_kegiatan' => '["paskib.jpg"]'
        ]);
        DB::table('ekstras')->insert([
            'judul' => 'PRAMUKA ',
            'nama' => 'Faruk',
            'deskripsi' => 'Pramuka adalah singkatan dari Praja Muda Karana, yang artinya Orang Muda yang Suka Berkarya. Pramuka merupakan sebuah organisasi atau gerakan kepanduan (Boy Scout) yang menjadi wadah atau tempat dilakukannya proses pendidikan kepramukaan di Indonesia.
Jadi, pengertian Pramuka adalah semua anggota gerakan Pramuka Indonesia yang terdiri dari beberapa tingkatan, mulai dari Pramuka Siaga, Penggalang, Penegak, dan Pandega.',
            'foto' => 'pramuka.jpg',
            'foto_pembina' => 'pramuka.jpg',
            'foto_kegiatan' => '["paskib.jpg"]'
        ]);
        DB::table('ekstras')->insert([
            'judul' => 'PMR',
            'nama' => 'Dewi Indriyani',
            'deskripsi' => 'Palang Merah Remaja (disingkat PMR) adalah wadah pembinaan dan pengembangan anggota remaja PMI, yang selanjutnya disebut PMR.Terdapat di PMI kota atau kabupaten di seluruh Indonesia, dengan anggota lebih dari 5 juta orang, anggota PMR merupakan salah satu kekuatan PMI dalam melaksanakan kegiatan-kegiatan kemanusiaan dibidang kesehatan dan siaga bencana, mempromosikan prinsip-prinsip dasar gerakan palang merah dan bulan sabit merah internasional, serta mengembangkan kapasitas organisasi PMI.',
            'foto' => 'pmr.jpg',
            'foto_pembina' => 'pmr.jpg',
            'foto_kegiatan' => '["paskib.jpg"]'
        ]);
        DB::table('ekstras')->insert([
            'judul' => 'AL-BANJARI ',
            'nama' => 'Zulham Munsif',
            'deskripsi' => 'Hadrah atau biasa yang dikenal dengan al-banjari merupakan kegiatan membaca sholawat dengan diiringi alat musik terbang. Seni al banjari memiliki irama yang menghentak, rancak dan variatif. Kesenian ini seringkali digelar dalam acara-acara seperti maulid nabi atau hajatan semacam sunatan dan pernikahan.',
            'foto' => 'banjari.jpeg',
            'foto_pembina' => 'banjari.jpeg',
            'foto_kegiatan' => '["paskib.jpg"]'
        ]);
        DB::table('ekstras')->insert([
            'judul' => 'BOLA VOLI ',
            'nama' => 'Handoko',
            'deskripsi' => 'Permainan bola voli termasuk salah satu contoh dari cabang olahraga bola besar. Bisa dikatakan, permainan ini masuk ke dalam kategori pertandingan karena melibatkan dua tim yang saling berhadapan untuk mendapatkan hasil pertandingan. Cara memainkan bola voli adalah dengan memukul bola agar melewati bagian atas net yang ada di tengah lapangan. Agar mendapatkan skor, para pemain dalam satu tim harus mengarahkan bola ke area lawan, sehingga bola terjatuh di daerah pertahanan lawan.',
            'foto' => 'voli.png',
            'foto_pembina' => 'voli.png',
            'foto_kegiatan' => '["paskib.jpg"]'
        ]);
        DB::table('ekstras')->insert([
            'judul' => 'Silat ',
            'nama' => 'Andre Omega',
            'deskripsi' => 'Pencak silat atau dikenal silat adalah suatu seni bela diri tradisional Indonesia yang memperhatikan seni keindahan gerakan dalam setiap jurusnya. Tiap-tiap daerah di Indonesia mempunyai aliran pencak silat yang khas. Seni bela diri ini telah diakui oleh UNESCO sebagai warisan budaya Nusantara. Meski demikian, pencak silat juga dapat dijumpai di berbagai negara Asia, seperti di Malaysia, Brunei, Filipina, Singapura, hingga Thailand bagian selatan.',
            'foto' => 'silat.jpeg',
            'foto_pembina' => 'silat.jpeg',
            'foto_kegiatan' => '["paskib.jpg"]'
        ]);
    }
}
