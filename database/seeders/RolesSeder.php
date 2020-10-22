<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $docente = Role::create(['name' => 'Docente']);

        $docente->givePermissionTo([
            'datos.store',
            'datos.update',
            'user.update',
            'curso.update',
            'materia.update'
        ]);

        $alumno = Role::create(['name' => 'Alumno']);

        $alumno->givePermissionTo([
            'datos.store',
            'datos.update',
            'user.update',
        ]);
    }
}
