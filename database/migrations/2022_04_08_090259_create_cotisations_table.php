<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotisations', function (Blueprint $table) {
            $table->id('N°reçu');
            $table->date('dateReglement');
            $table->decimal('montant', 6, 2);
            $table->string('typeCotisation');

            $table->foreignId('membre_id')
            ->references('id')
            ->on('membres')
            ->onDelete('cascade');


        

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
        Schema::dropIfExists('cotisations');
    }
}
