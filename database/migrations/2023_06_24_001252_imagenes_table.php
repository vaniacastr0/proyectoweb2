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
        Schema::create('imagenes', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->string('Titulo',20);
            $table->string('Archivo',100);
            $table->boolean('Baneada')->default(false);
            $table->text('Motivo_ban')->nullable();
            $table->string('Cuenta_User',20);
            
            $table->foreign('Cuenta_User')->references('User')->on('Cuentas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
