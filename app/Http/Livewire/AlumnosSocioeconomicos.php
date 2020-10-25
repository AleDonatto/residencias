<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumnos;
use App\Models\Alumnos_datos;


class AlumnosSocioeconomicos extends Component
{

    public $alumno_id,$lugNac,$fechaNac,$genero,$estado_civil,$direccion,$colonia,$cp,$ciudad,$telefono,$curp,$num_seguro,
    $tipo_sangre,$alergias,$medicamentos_alergicos,$complicaciones_medicas,$contacto1,$direccion_contact,$colonia1,$tel_contact,
    $contacto2,$direccion_contact2,$colonia2,$tel_contact2,$empresa,$domicilio_empresa,$colonia_empresa,$ciudad_empresa,$puesto,$antiguedad,
    $nombre_jefe,$turno, $message;
    
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
        'direccion_contact2' => 'required|string',
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
        $this->obtenerDatos();
        return view('livewire.alumnos-socioeconomicos');
    }

    public function update(){
        $this->validate();

        Alumnos_datos::where('alumno_id', $this->alumno_id)
        ->update([
            'lugNac' => $this->lugNac,
            'fechaNac' => $this->fechaNac,
            'genero' => $this->genero,
            'estado_civil' => $this->estado_civil,
            'direccion' => $this->direccion,
            'colonia' => $this->colonia, 
            'ciudad' => $this->ciudad,
            'telefono' => $this->telefono,
            'cp' => $this->cp,
            'curp' => $this->curp,
            'num_seguro' => $this->num_seguro,
            'tipo_sangre' => $this->tipo_sangre,
            'alergias' => $this->alergias,
            'medicamentos_alergicos' => $this->medicamentos_alergicos,
            'complicaciones_medicas' => $this->complicaciones_medicas,
            'contacto1' => $this->contacto1,
            'direccion_contact' => $this->direccion_contact,
            'colonia1' => $this->colonia1,
            'tel_contact' => $this->tel_contact,
            'contacto2' => $this->contacto2,
            'direccion_contact2' => $this->direccion_contact2,
            'colonia2' => $this->colonia2,
            'tel_contact2' => $this->tel_contact2,
            'empresa' => $this->empresa,
            'domicilio_empresa' => $this->domicilio_empresa,
            'colonia_empresa' => $this->colonia_empresa,
            'ciudad_empresa' => $this->ciudad_empresa,
            'puesto' => $this->puesto,
            'antiguedad' => $this->antiguedad,
            'nombre_jefe' => $this->nombre_jefe,
            'turno' => $this->turno
        ]);
    
        return $this->message = 'Guardado';  
    }

    public function obtenerDatos(){
        $idAlumno = Alumnos::where('user_id', Auth::user()->id )->first();
        $datosAlumno = Alumnos_datos::where('alumno_id', $idAlumno->idAlumno)->get();

        foreach($datosAlumno as $item){
            $this->lugNac = $item->lugNac;
            $this->fechaNac = $item->fechaNac;
            $this->genero = $item->genero;
            $this->estado_civil = $item->estado_civil;
            $this->direccion = $item->direccion;
            $this->colonia = $item->colonia;
            $this->ciudad = $item->ciudad;
            $this->telefono = $item->telefono;
            $this->cp = $item->cp;
            $this->curp = $item->curp;
            $this->num_seguro = $item->num_seguro;
            $this->tipo_sangre = $item->tipo_sangre;
            $this->alergias = $item->alergias;
            $this->medicamentos_alergicos = $item->medicamentos_alergicos;
            $this->complicaciones_medicas = $item->complicaciones_medicas;
            $this->contacto1 = $item->contacto1;
            $this->direccion_contact = $item->direccion_contact;
            $this->colonia1 = $item->colonia1;
            $this->tel_contact = $item->tel_contact;
            $this->contacto2 = $item->contacto2;
            $this->direccion_contact2 = $item->direccion_contact2;
            $this->colonia2 = $item->colonia2;
            $this->tel_contact2 = $item->tel_contact2;
            $this->empresa = $item->empresa;
            $this->domicilio_empresa = $item->domicilio_empresa;
            $this->colonia_empresa = $item->colonia_empresa;
            $this->ciudad_empresa= $item->ciudad_empresa;
            $this->puesto = $item->puesto;
            $this->antiguedad = $item->antiguedad;
            $this->nombre_jefe = $item->nombre_jefe;
            $this->turno = $item->turno;     
        }

   
    }

}
