<?php

namespace App\Http\Livewire\Alumnos;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Models\Actividades;

class ActividadTema extends Component
{
    public $actividadTema, $cursoid;

    public function render()
    {
        $this->getActividadTema();
        return view('livewire.alumnos.actividad-tema');
    }

    public function getActividadTema(){
        $this->actividadTema = DB::table('temas')
        ->join('actividadtemas', 'temas.idTema','=','actividadtemas.temas_id')
        ->where('actividadtemas.curso_id', $this->cursoid)
        ->select('temas.*', 'actividadtemas.*')
        ->get();
    }

}
