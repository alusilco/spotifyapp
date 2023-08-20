<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert([
            'titulo' => 'Always Ascending',
            'artist' => 'Disco Dub Band',
            'album' => 'Late Nigth Tales:Franz Fredinando',
            'created_at' => '24 jun 2023',
            'duration' => '4:06',
            'image_path' => 'images/image1.png',
        ]);

        DB::table('songs')->insert([
            'titulo' => 'Una Lluna a LAigua',
            'artist' => 'Txarango',
            'album' => 'El Cor de la Terra',
            'created_at' => '17 ene 2023',
            'duration' => '3:37',
            'image_path' => 'images/image2.png',
        ]);

        DB::table('songs')->insert([
            'titulo' => 'The Air is GErring Slippery',
            'artist'=>'Primus',
            'album' => 'Pork Soda',
            'created_at' => '10 oct 2022',
            'duration' => '2:31',
            'image_path' => 'images/image3.png',
        ]);

        DB::table('songs')->insert([
            'titulo' => 'When You Gonna Learn?',
            'artist'=>'Jamiroqual',
            'album' => 'Emergency on Planet Earth',
            'created_at' => '27 feb 2019',
            'duration' => '3:50',
            'image_path' => 'images/image4.png',
        ]);

        DB::table('songs')->insert([
            'titulo' => 'April 29, 1992(Miami)',
            'artist'=>'Sublime',
            'album' => 'Sublime',
            'created_at' => '28 feb 2017',
            'duration' => '3:53',
            'image_path' => 'images/image5.png',
        ]);

        DB::table('songs')->insert([
            'titulo' => 'Not This Time',
            'artist'=>'Hausenine',
            'album' => 'Not This Time',
            'created_at' => '2 jul 2022',
            'duration' => '2:29',
            'image_path' => 'images/image6.png',
        ]);
    }
}
