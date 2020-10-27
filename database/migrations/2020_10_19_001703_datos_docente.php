<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosDocente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_docente', function (Blueprint $table) {
            $table->unsignedBigInteger('docente_id');
            $table->string('lugarNac',50);
            $table->date('fechaNac');
            $table->enum('genero',['masculino','femenino']);
            $table->string('estado_civil',50);
            $table->string('direccion');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('telefono');
            $table->string('cp');
            $table->string('curp');
            $table->string('num_seguro');
            $table->string('tipo_sangre');
            $table->string('alergias');
            $table->string('medicamentos_alergicos');
            $table->string('complicaciones_medicas');
            $table->string('contacto_emerg');
            $table->string('tel_contacto');
            $table->string('parentesco');
            $table->string('contacto_emerg2');
            $table->string('tel_contacto2');
            $table->string('parentesco2');
            $table->foreign('docente_id')->references('idDocente')->on('docente'); 
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
        Schema::dropIfExists('datos_docente');
    }
}
