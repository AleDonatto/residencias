<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asignatura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id('idMateria');
            $table->string('nombreMateria');
            $table->string('semestre',10);
            $table->string('planEstudio');
            $table->string('claveMateria');
            $table->enum('academia',['ISC','LA','IBQ','IGE','IEM','CP','ARQ']);
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
        Schema::dropIfExists('asignatura');
    }
}
