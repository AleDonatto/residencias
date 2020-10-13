<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlumnosSocioeconomicos extends Component
{
    public $idAlumno, $direccion, $colonia, $telefono, $contacto; 
    public function render()
    {
        return view('livewire.alumnos-socioeconomicos');
    }
}
