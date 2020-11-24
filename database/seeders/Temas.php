<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Temas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('temas')->insert([
            'indice' => '1',
            'nombreTema' => 'Diseño Algoritmico',
            'materia_id' => 1,
        ]);

        DB::table('temas')->insert([
            'indice' => '2',
            'nombreTema' => 'Introduccion a la Programacion',
            'materia_id' => 1,
        ]);

        DB::table('temas')->insert([
            'indice' => '3',
            'nombreTema' => 'Control de Flujo',
            'materia_id' => 1,
        ]);

        DB::table('temas')->insert([
            'indice' => '4',
            'nombreTema' => 'Organizacion de Datos',
            'materia_id' => 1,
        ]);

        DB::table('temas')->insert([
            'indice' => '5',
            'nombreTema' => 'Modularidad',
            'materia_id' => 1,
        ]);
    }
}
