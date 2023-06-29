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
            $table->string('user')->primary();
            $table->string('password');
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->smallInteger('perfil_id');
            
            $table->foreign('perfil_id')->references('id')->on('perfiles');
            //$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
};
