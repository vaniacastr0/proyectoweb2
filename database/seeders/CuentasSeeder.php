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
            ['user'=>'vania@gmail.com','password'=> Hash::make('1234'),'nombre'=>'Vania','apellido'=>'castro','perfil_id'=>1],
            ['user'=>'thomas@gmail.com','password'=> Hash::make('4567'),'nombre'=>'Thomas','apellido'=>'cordova','perfil_id'=>2],
        ]);
    }
}
