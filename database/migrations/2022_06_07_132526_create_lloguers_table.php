<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLloguersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lloguers', function (Blueprint $table) {
	    $table->id('id');
            $table->string('Dni_client');
            $table->foreign('Dni_client')->references('Dni_client')->on('Clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Matricula_auto');
            $table->foreign('Matricula_auto')->references('Matricula_auto')->on('Autos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Data_prestec');
            $table->string('Data_devolucio');
            $table->string('Lloc_devolucio');
            $table->string('Preu_dia');
            $table->string('Prestec_retorn_diposit_ple');
            $table->string('Tipus_assegunanca');
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
        Schema::dropIfExists('lloguers');
    }
}
