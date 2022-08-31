<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->bigInteger('Carnet')->nullable();
            $table->string('Celular')->nullable();
            $table->unsignedBigInteger('id_cargo');
            $table->unsignedBigInteger('id_organizacionsocial');
            $table->timestamps();
            

            $table->foreign('id_cargo')
                  ->references('id')
                  ->on('cargos');       

            $table->foreign('id_organizacionsocial') 
                  ->references('id')
                  ->on('organizacionsocials');

              });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representantes');
    }
}
