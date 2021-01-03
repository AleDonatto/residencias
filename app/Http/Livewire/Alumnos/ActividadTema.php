<?php

namespace App\Http\Livewire\Alumnos;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ActividadTema extends Component
{
    public $activdadTema, $cursoid;
    public function render()
    {
        $this->getActividadTema();
        return view('livewire.alumnos.actividad-tema');
    }

    public function getActividadTema(){
        $this->actividadTema = DB::table('temas')
        ->join('actividadtemas', 'temas.idTema','=','actividadtemas.temas_id')
        ->where('actividadtemas.curso_id', $this->cursoid)
        ->select('actividadtemas.*','temas.*')
        ->get();
    }
}
