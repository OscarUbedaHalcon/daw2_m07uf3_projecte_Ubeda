<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('id');
	    $table->string('Dni_client');
            $table->string('Nom_cognoms');
            $table->string('Edat');
            $table->string('Telefon');
            $table->string('Adreca');
            $table->string('Ciutat');
            $table->string('Pais');
            $table->string('Email');
            $table->string('Numero_permis_conduccio');
            $table->string('Punts_permis_conduccio');
            $table->string('Tipus_targeta');
            $table->string('Numero_targeta');
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
        Schema::dropIfExists('clients');
    }
}
