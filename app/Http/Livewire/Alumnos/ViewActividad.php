<?php

namespace App\Http\Livewire\Alumnos;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ViewActividad extends Component
{
    use WithFileUploads;

    public $idactividad, $actividad;
    public $archivoActividad, $path;

    public function render()
    {
        $this->getActividad(); 
        return view('livewire.alumnos.view-actividad');
    }

    public function getActividad(){
        $this->actividad = DB::table('actividadtemas')
        ->where('idActividadTemas', $this->idactividad)
        ->get();

        foreach($this->actividad as $item){
            $this->path = $item->recursos;  
        }
    }

    public function storeActividad(Request $request){
        //$this->archivoActividad = $request->archivo; 
        $this->validate([
            'archivoActividad' => 'max:25600', // 25MB Max
            'archivoActividad.max' => 'Tamaño maximo de archivo es de 25MB.'
        ]);
    }

    public function downloadRecurso($recursos){
        //$this->name = $recursos;
        //return response()->download(storage_path($recursos));
        //return Storage::download($recursos);
        return Storage::download($recursos);
    }
}
