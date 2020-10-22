<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permisos = [
            'datos.store',
            'datos.update',
            'user.update',
            'materia.update',
            'curso.update'
        ];

        foreach ($permisos as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
