<?php

namespace App\Http\Livewire\Docentes;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Actividades;

class FormActividades extends Component
{
    use WithFileUploads;
    public $curso, $tema;
    public $nombreActividad, $descripcionActividad, $fechaInicio, $fechaLimite, $recurso, $puntuacion=0;
    public $showfile = true;

    protected $rules = [
        'nombreActividad' => 'required|string',
        'descripcionActividad' => 'required|string',
        'fechaInicio' => 'required|date',
        'fechaLimite' => 'required|date',
        'puntuacion' => 'required|integer|min:0|max:100'
    ]; 

    protected $messages = [
        'nombreActividad.required' => 'Este campo es requerido.',
        'descripcionActividad.required' => 'Este campo es requerido.',
        'fechaInicio.required' => 'Este campo es requerido.',
        'fechaLimite.required' => 'Este campo es requerido.',
        'puntuacion.required' => 'Este campo es requerido',
        'puntuacion.min' => 'El valor minimo es 0',
        'puntuacion.max' => 'El valor maximo es 100'
    ];

    public function render()
    {
        return view('livewire.docentes.form-actividades');
    }

    public function actividadStore(){

        $this->validate();

        if($this->recurso == null ){

            $actividad = new Actividades;
            $actividad->nombreActividad = $this->nombreActividad;
            $actividad->descripcionActividad = $this->descripcionActividad;
            $actividad->recursos = ''; 
            $actividad->fechainicio = $this->fechaInicio;
            $actividad->fechalimite = $this->fechaLimite;
            $actividad->temas_id = $this->tema;
            $actividad->curso_id = $this->curso;
            $actividad->save();

            session()->flash('message', 'La actividad fue agregada.');

            return redirect()->route('cursos_docentes.show',$this->curso);

        }
        $this->validate([
            'recurso' => 'max:25600', // 25MB Max
            'recurso.max' => 'Tamaño maximo de archivo es de 25MB.'
        ]);

        $actividad = new Actividades;
        $actividad->nombreActividad = $this->nombreActividad;
        $actividad->descripcionActividad = $this->descripcionActividad;
        $actividad->recursos = $this->recurso->store('public'); 
        $actividad->fechainicio = $this->fechaInicio;
        $actividad->fechalimite = $this->fechaLimite;
        $actividad->temas_id = $this->tema;
        $actividad->curso_id = $this->curso;
        $actividad->save();

        session()->flash('message', 'La actividad fue agregada.');

        return redirect()->route('cursos_docentes.show',$this->curso);
    }

}
