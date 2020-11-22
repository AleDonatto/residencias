<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\CargaAcademica;

class SolicitudInscripcionAlumno extends Component
{
    public $curso, $solicitudes;
    public $alumnoId, $cursoId;
    
    public function render()
    {
        $this->getsId();

        return view('livewire.solicitud-inscripcion-alumno');
    }

    public function getsId(){
        $this->alumnoId = Auth::id(); 
    }

    public function sentSolicitud(){
        
        $solicitud = new CargaAcademica;
        $solicitud->alumno_id = $this->alumnoId;
        $solicitud->curso_id = $this->cursoId;
        $solicitud->status = 0;
        $solicitud->save();

        return redirect()->route('dashboard');
    } 
}
