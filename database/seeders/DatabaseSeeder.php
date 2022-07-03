<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Kategori;
use \App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Kategori::create(
            [
            'kategori' => 'Wisata Alam',
            ],
            [
                'kategori' => 'Wisata Kuliner',
            ],
    
        );

        Kategori::create(
        [
            'kategori_id'=>1,
            'judul'=>'Bekantan, Hewan endemik asal kalimantan',
            'content'=>'Bekantan yang memiliki nama latin Nasalis Lavatus dan merupakan hewan langka yang memiliki Ciri hidung yang berukuran besar dan bulu berwarna cokelat kemerahan serta dapat mengeluarkan ekspresi.',
            'picture'=>'https://source.unsplash.com/4ojU96fHWZs'
        ],
        [

            'kategori_id'=>1,
            'judul'=>'Bekantan, Hewan endemik asal kalimantan',
            'content'=>'Bekantan yang memiliki nama latin Nasalis Lavatus dan merupakan hewan langka yang memiliki Ciri hidung yang berukuran besar dan bulu berwarna cokelat kemerahan serta dapat mengeluarkan ekspresi.',
            'picture'=>'https://cookpad.com/id/resep/8863144-iwak-samupakasam-banjar'
        ],
    
        );


    }
}
