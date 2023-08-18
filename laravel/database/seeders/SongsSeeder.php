<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
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
            'artist'=>'Disco Dub Band',
            'album' => 'Late Nigth Tales:Franz Fredinando',
            'created_at' => Carbon::createFromFormat('d M Y', '24 jun 2023')->format('Y-m-d'),
            'duracion' => '4:06',
            'image'=> asset('images/image1'),
        ]);

        DB::table('songs')->insert([
            'titulo' => 'Una Lluna a LAigua',
            'artist'=>'Txarango',
            'album' => 'El Cor de la Terra',
            'created_at' => Carbon::createFromFormat('d M Y', '17 ene 2023')->format('Y-m-d'),
            'duracion' => '3:37',
            'image'=> asset('images/image1'),
        ]);

        DB::table('songs')->insert([
            'titulo' => 'The Air is GErring Slippery',
            'artist'=>'Primus',
            'album' => 'Pork Soda',
            'created_at' =>Carbon::createFromFormat('d M Y', '10 oct 2022')->format('Y-m-d'),
            'duracion' => '2:31',
            'image'=> asset('images/image1'),
        ]);

        DB::table('songs')->insert([
            'titulo' => 'When You Gonna Learn?',
            'artist'=>'Jamiroqual',
            'album' => 'Emergency on Planet Earth',
            'created_at' => Carbon::createFromFormat('d M Y', '27 feb 2019')->format('Y-m-d'),
            'duracion' => '3:50',
            'image'=> asset('images/image1'),
        ]);

        DB::table('songs')->insert([
            'titulo' => 'April 29, 1992(Miami)',
            'artist'=>'Sublime',
            'album' => 'Sublime',
            'created_at' => Carbon::createFromFormat('d M Y', '28 feb 2017')->format('Y-m-d'),
            'duracion' => '3:53',
            'image'=> asset('images/image1'),
        ]);

        DB::table('songs')->insert([
            'titulo' => 'Not This Time',
            'artist'=>'Hausenine',
            'album' => 'Not This Time',
            'created_at' => Carbon::createFromFormat('d M Y', '2 jul 2022')->format('Y-m-d'),
            'duracion' => '2:29',
            'image'=> asset('images/image1'),
        ]);
    }
}
