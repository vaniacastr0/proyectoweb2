<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->string('User',20)->primary();
            $table->string('Password',100);
            $table->string('Nombre',20);
            $table->string('Apellido',20);
            $table->integer('Perfil_Id');
            
            $table->foreign('Perfil_Id')->references('Id')->on('Perfiles');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Usuarios');
    }
};
