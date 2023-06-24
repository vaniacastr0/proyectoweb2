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
        Schema::create('perfiles', function (Blueprint $table) {
            $table->integer('Id')->autoIncrement();
            $table->string('Nombre',20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Perfiles');
    }
};
