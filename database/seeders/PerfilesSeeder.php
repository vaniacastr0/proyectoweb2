<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfiles')->insert([
            ['Id'=>'1','Nombre' => 'Administrador'],
            ['Id'=>'2','Nombre' => 'Artista'],
        ]);
    }
}
