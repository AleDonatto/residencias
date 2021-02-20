<?php

namespace App\Http\Livewire\Docentes;

use Livewire\Component;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Docente;
use App\Models\CalActividad;
use Illuminate\Support\Facades\Storage;

class CalificarActividades extends Component
{
    public $cursoId;
    public $listTareas, $idActivdad, $listAlumnosTareas;

    public function render()
    {
        $this->getTareas();
        return view('livewire.docentes.calificar-actividades');
    }

    public function getTareas(){
        $this->listTareas = DB::table('actividadtemas')
        ->join('temas', 'actividadtemas.temas_id', '=', 'temas.idTema')
        ->select('temas.indice', 'temas.nombreTema', 'actividadtemas.*')
        ->where('actividadtemas.curso_id', $this->cursoId )
        ->get();
    }

    public function getListAlumnos(){

    }

}
