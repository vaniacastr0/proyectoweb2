<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagenes')->insert([
            ['titulo'=>'hola','archivo'=>'Propuesta.pdf','baneada'=>True,'motivo_ban'=>'blabla','cuenta_user'=>'vania@gmail.com'],
        ]);
    }
}
