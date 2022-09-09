<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre')->null();
            $table->string('Sigla')->nullable();
            $table->string('Piso')->nullable();
            $table->string('Ubicacion')->nullable();
            $table->unsignedBigInteger('id_cargo');
            $table->unsignedBigInteger('id_representante');
            $table->timestamps();

            $table->foreign('id_cargo')
                  ->references('id')
                  ->on('cargos');       

            $table->foreign('id_representante') 
                  ->references('id')
                  ->on('representantes');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
