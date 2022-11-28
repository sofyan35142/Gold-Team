<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class alumni extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnis')->insert([
            'nama' => 'Sulton',
            'pekerjaan' => 'mabes polri',
            'deskripsi' => 'Kurikulum yang sangat UP-TO-DATE dan menyesuaikan kebutuhan pasar industri membuat lulusan SMKN 1 SUKOREJO dapat bersaing dan diandalkan perusahaan',
            'foto' => '1.jpg',
        ]);
        DB::table('alumnis')->insert([
            'nama' => 'Zuham Munsif',
            'pekerjaan' => 'guru',
            'deskripsi' => 'Saya bangga dan senang pernah menutut ilmu di SMKN 1 SUKOREJO, kurikulum yang sangat baik dan dapat bersaing diindustri.',
            'foto' => 'pakmun2.jpeg',
        ]);
        DB::table('alumnis')->insert([
            'nama' => 'hamba allah',
            'pekerjaan' => 'tni',
            'deskripsi' => 'Saya bangga menjadi bagian dari SMKN 1 SUKOREJO. karena selalu mendukung dalam memberikan fasilitas dan kemudahan dalam menunjang pembelajaran serta menerapkan attitude yang baik.',
            'foto' => 'pakmun3.jpeg',
        ]);
    }
}
