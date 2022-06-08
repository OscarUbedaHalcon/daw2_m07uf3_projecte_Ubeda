<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id('id');
	    $table->string('Matricula_auto');
            $table->string('Numero_bastidor');
            $table->string('Marca');
            $table->string('Model');
            $table->string('Color');
            $table->string('Nombre_places');
            $table->string('Nombre_portes');
            $table->string('Grandaria_maleter');
            $table->string('Tipus_combustible');
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
        Schema::dropIfExists('autos');
    }
}
