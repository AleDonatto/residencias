<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Docente;
use App\Models\Cursos;

class CursosDocente extends Component
{
    //public $cursos;
    private $year,$mes,$periodo;

    public function render()
    {
        $idDocente = Docente::where('user_id', Auth::user()->id )->first();

        $year = date('Y');
        $mes = date('m');

        if($mes < 6){
            $periodo = 'Enero-Junio';
        }else if($mes > 6){
            $periodo = 'Agosto-Diciembre';
        }else{
            $periodo = 'Verano';
        }


        
        $cursos = DB::table('curso')
        ->join('periodo','curso.periodo_id','=','idPeriodo')
        ->where('docente_id',$idDocente->idDocente)
        ->where('periodo.year', $year)
        ->where('periodo.periodo', $periodo)
        ->select('curso.*', 'periodo.periodo')
        ->get();

        return view('livewire.cursos-docente')->with(compact('cursos'));
    }
}
