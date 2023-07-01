<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;

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
            ['user'=>'vania','password'=> Hash::make('1234'),'nombre'=>'Vania','apellido'=>'Castro','perfil_id'=>1],
            ['user'=>'thomas','password'=> Hash::make('4567'),'nombre'=>'Thomas','apellido'=>'Cordova','perfil_id'=>1],
            ['user'=>'tonia','password'=> Hash::make('7890'),'nombre'=>'Tonia','apellido'=>'Costro','perfil_id'=>1],
        ]);
    }
}
