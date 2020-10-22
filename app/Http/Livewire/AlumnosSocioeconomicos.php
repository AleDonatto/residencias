<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumnos;
use App\Models\Alumnos_datos;


class AlumnosSocioeconomicos extends Component
{

    public $alumno_id,$lugNac,$fechaNac,$genero,$estado_civil,$direccion,$colonia,$cp,$ciudad,$telefono,$curp,$num_seguro,
    $tipo_sangre,$alergias,$medicamentos_alergicos,$complicaciones_medicas,$contacto1,$direccion_contac,$colonia1,$tel_contact,
    $contacto2,$direccion2,$colonia2,$tel_contact2,$empresa,$domicilio_empresa,$colonia_empresa,$ciudad_empresa,$puesto,$antiguedad,
    $nombre_jefe,$turno;
    
    protected $rules = [
        'lugNac' => 'required|string',
        'fechaNac' => 'required|string',
        'genero' => 'required|string',
        'estado_civil' => 'required|string',
        'direccion' => 'required|string',
        'colonia' => 'required|string',
        'cp' => 'required|string',
        'ciudad' => 'required|string',
        'telefono' => 'required|string',
        'curp' => 'required|string',
        'num_seguro' => 'required|string',
        'tipo_sangre' => 'required|string',
        'alergias' => 'required|string',
        'medicamentos_alergicos' => 'required|string',
        'complicaciones_medicas' => 'required|string',
        'contacto1' => 'required|string',
        'direccion_contact' => 'required|string',
        'colonia1' => 'required|string',
        'tel_contact' => 'required|string',
        'contacto2' => 'required|string',
        'direccion2' => 'required|string',
        'colonia2' => 'required|string',
        'tel_contact2' => 'required|string',
        'empresa'=> 'required|string',
        'domicilio_empresa' => 'required|string',
        'colonia_empresa' => 'required|string',
        'ciudad_empresa' => 'required|string',
        'puesto' => 'required|string',
        'antiguedad' => 'required|string',
        'nombre_jefe' => 'required|string',
        'turno' => 'required|string'
    ];

    public function render()
    {
        return view('livewire.alumnos-socioeconomicos');
    }

    public function store(){
        $direccion = $this->direccion;
        $colonia = $this->colonia;
    }

    public function obtenerDatos(){
        
    }

}
