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
            $table->string('lugNac',50);
            $table->date('fechaNac');
            $table->enum('genero',['Masculino','Femenino']);
            $table->string('estado_civil',50);
            $table->string('direccion',50);
            $table->string('colonia',50);
            $table->string('ciudad',50);
            $table->string('cp',10);
            $table->string('telefono',10);
            $table->string('curp',25);
            $table->string('num_seguro',15);
            $table->enum('tipo_sangre',['O+','O-','A+','A-','B+','B-','AB+','AB-']);
            $table->string('alergias');
            $table->string('medicamentos_alergicos');
            $table->string('complicaciones_medicas');
            $table->string('contacto1',100);
            $table->string('direccion_contact',50);
            $table->string('colonia1',50);
            $table->string('tel_contact',10);
            $table->string('contacto2',100);
            $table->string('direccion_contact2',50);
            $table->string('colonia2',50);
            $table->string('tel_contact2',10);
            $table->string('empresa',100);
            $table->string('domicilio_empresa',70);
            $table->string('colonia_empresa',50);
            $table->string('ciudad_empresa',50);
            $table->string('puesto',50);
            $table->string('antiguedad',50);
            $table->string('nombre_jefe',50);
            $table->string('turno',50);
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
