<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlumnosSocioeconomicos extends Component
{
    public $idAlumno, $direccion, $colonia, $telefono, $contacto, $cp;
    public $showToastr = false;

    public function render()
    {
        return view('livewire.alumnos-socioeconomicos');
    }

    public function store(){
        $direccion = $this->direccion;
        $colonia = $this->colonia;
    }

    public function showTostar(){
        $this->$showToastr = true;
    }
}
