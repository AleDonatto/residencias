<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_alumnos', function (Blueprint $table) {
            $table->unsignedBigInteger('alumno_id');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('telefono');
            $table->string('cp');
            $table->string('contac_emerg');
            $table->foreign('alumno_id')->references('idAlumno')->on('alumnos');  
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
        Schema::dropIfExists('datos_alumnos');
    }
}
