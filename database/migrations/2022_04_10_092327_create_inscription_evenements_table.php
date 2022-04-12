<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscription_evenements', function (Blueprint $table) {

            $table->foreignId('idMembre')->references('id')->on('membres')->onDelete('cascade')->primary();
            $table->foreignId('idEvenement')->references('id')->on('evenements')->onDelete('cascade')->primary();


            $table->boolean('reglement effectue');
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
        Schema::dropIfExists('inscription_evenements');
    }
}
