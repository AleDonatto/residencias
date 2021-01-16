<?php

namespace App\Http\Livewire\Docentes;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Actividades;


class ViewActividad extends Component
{
    use WithFileUploads;
    public $idactividad, $actividad;
    public $recursoOld;
    public $nombreActividad, $descripcion, $fechainicio, $fechafin, $tema_id, $curso_id, $recursoNew; 

    public function render()
    {
        $this->getActividad(); 
        return view('livewire.docentes.view-actividad');
    }

    public function getActividad(){
        $this->actividad = DB::table('actividadtemas')
        ->where('idActividadTemas', $this->idactividad)
        ->get();

        foreach ($this->actividad as $item) {
            # code...
            $this->nombreActividad = $item->nombreActividad;
            $this->descripcion = $item->descripcionActividad;
            $this->recursoOld = $item->recursos;
            $this->fechainicio = $item->fechainicio;
            $this->fechafin = $item->fechalimite;
            $this->tema_id = $item->temas_id;
            $this->curso_id = $item->curso_id;  
        }
    }

    public function getURLRecurso($recurso){
        //$extension = $this->recursoOld->file('public')->extension();
        //return Storage::download($recurso, 'document.'.$extension);
        return Storage::download($recurso);
    }

    public function updatedActividad(){
        if($this->recursoNew == null){
            Actividades::where('idActividadTemas', $this->idactividad)
            ->where('temas_id', $this->tema_id)
            ->where('curso_id', $this->curso_id)
            ->update([
                'nombreActividad' => $this->nombreActividad,
                'descripcionActividad' => $this->descripcion, 
                'fechainicio' => $this->fechainicio,
                'fechalimite' => $this->fechafin
            ]);

            session()->flash('message', 'Actividad modificada con exito!.');
        }else{

            $this->validate([
                'recursoNew' => 'max:25600', // 25MB Max
                'recursoNew.max' => 'Tamaño maximo de archivo es de 25MB.'
            ]);

            //$delete = Storage::delete($this->recursoOld);
            $delete = Storage::disk('local')->delete($this->recursoOld);

            Actividades::where('idActividadTemas', $this->idactividad)
            ->where('temas_id', $this->tema_id)
            ->where('curso_id', $this->curso_id)
            ->update([
                'nombreActividad' => $this->nombreActividad,
                'descripcionActividad' => $this->descripcion, 
                'recursos' => $this->recursoNew->store('public'),
                'fechainicio' => $this->fechainicio,
                'fechalimite' => $this->fechafin
            ]);
            $this->recursoNew = null;
            session()->flash('message', 'Actividad modificada con exito!.');
        }
        $this->getActividad();
    }

}
