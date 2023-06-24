<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuentasSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuentas')->insert([
            ['User'=>'vania@gmail.com','Password'=>'123','Nombre'=>'Vania','Apellido'=>'Castro','Perfil_Id'=>'1'],
            ['User'=>'thomas@gmail.com','Password'=>'567','Nombre'=>'Thomas','Apellido'=>'Cordova','Perfil_Id'=>'2'],
        ]);
    }
}
