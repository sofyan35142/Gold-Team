<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sekolahadiwiyata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolahadiwiyata')->insert([
            'judul' => 'Sekolah Adiwiyata',
            'foto_adiwiyata' => 'adiwiyatalogo.png',
            'deskripsi' => '<h4>Sekolah Adiwiyata dan Pendidikan Karakter</h4><p>Adiwiyata bermakna sebagai tempat yang baik dan ideal, di mana dapat diperoleh segala ilmu pe­nge­tahuan dan berbagai norma, serta etika yang dapat menjadi dasar manusia untuk menuju terciptanya ke­se­jahteraan hidup dalam menuju cita-cita pembangunan yang berkelanjutan.</p><p>Dengan demikian, se­ko­lah Adiwiyata merupakan tempat me­wujudkan war­­ga se­k­olah yang bertanggung jawab dalam upa­ya Perlindungan dan Pengelolaan Lingkungan Hi­dup (PPLH) melalui tata kelola sekolah yang baik untuk men­dukung pembangunan yang berkelanjutan di Indonesia.</p><p>Sekolah adiwiyata dan pendidikan karakter bukan merupakan hal yang baru. Pada tahun 2018 Kementerian Lingkungan Hidup dan Kehutanan memberikan penghargaan adiwiyata kepada 396 sekolah adiwiyata.</p><p>Program sekolah adiwiyata harus selaras dengan prinsip edukatif, partisipatif, dan berkelanjutan. Penerapan sekolah adiwiyata juga perlu dijalankan secara bersama untuk mencapai bonum commune.</p><p>Aktivitas sekolah adiwiyata dapat berupa langkah-langkah awal seperti stop penggunaan sampah plastik, penanaman pohon (satu anak satu pohon), penataan taman kelas, kerajinan tangan berbahan dasar bahan alami, aksi pungut sampah plastik dan mengajak masyarakat bijak terhadap sampah. Semuanya dimulai dari para pendidik, tenaga pendidik, dan peserta didik. Bermula dari diri, berlanjut di kelas, dan dijadikan budaya sekolah.</p><p>Jika sebatas konsepsi, maka sekolah adiwiyata dan pendidikan karakter gagal. Sekolah adiwiyata dan pendidikan karakter perlu diwujudnyatakan dalam bentuk tindakan/aksi nyata di sekolah. Sekolah adiwiyata merupakan sekolah berjiwa cinta lingkungan hidup. Sekolah adiwiyata berkaitan langsung dengan perhatian kita kepada pelestarian lingkungan hidup yang diterapkan melalui penerapan pendidikan karakter berkelanjutan.</p><p>Melalui kegiatan sekolah adiwiyata kita berupaya menciptakan genarasi berkarakter. Generasi yang peduli lingkungan hidup. Insan yang senang dengan lingkungan yang sehat, bebas sampah plastik, indah, hijau, dan berdampak pada ekosistem akademik yang damai. Generasi yang mampu mewujudkan lingkungan hidup yang homeostatis (stabil dan seimbang)</p>',
        ]);
    }
}
