<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Actividadtemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividadtemas', function (Blueprint $table) {
            $table->id('idActividadTemas');
            $table->string('nombreActividad',50);
            $table->string('descripcionActividad', 200); 
            $table->string('recursos', 100);
            $table->date('fechainicio');
            $table->date('fechalimite');
            $table->unsignedBigInteger('temas_id');
            $table->unsignedBigInteger('curso_id');
            $table->foreign('temas_id')->references('idTema')->on('temas');
            $table->foreign('curso_id')->references('idCurso')->on('curso');
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
        Schema::dropIfExists('actividadtemas');
    }
}
