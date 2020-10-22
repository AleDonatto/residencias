<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Docente;
use App\Models\Docente_datos;

class DatosSocieconomicos extends Component
{
    public $idDatos, $direccion, $colonia, $ciudad, $telefono, $cp, $curp, $numSeguro, $tipo_sangre;
    public $alergias, $medAlergias, $compliMedicas, $contacto, $tel1, $tel2, $parentesco, $message;

    protected $rules = [
        'direccion' => 'required|string',
        'colonia' => 'required|string',
        'ciudad' => 'required|string',
        'telefono' => 'required|string',
        'cp' => 'required|string',
        'curp' => 'required|string',
        'numSeguro' => 'required|string',
        'tipo_sangre' => 'required|string',
        'alergias' => 'required|string',
        'medAlergias' => 'required|string',
        'compliMedicas' => 'required|string',
        'contacto' => 'required|string',
        'parentesco' => 'required|string',
        'tel1' => 'required|string',
        'tel2' => 'required|string'
    ];

    public function render()
    {
        $this->obtenerDatos();

        return view('livewire.datos-socieconomicos');
    }

    public function update(){

        $this->validate();
        
        Docente_datos::where('docente_id', $this->idDatos)
        ->update([
            'direccion' => $this->direccion,
            'colonia' => $this->colonia,
            'ciudad' => $this->ciudad,
            'telefono' => $this->telefono,
            'cp' => $this->cp,
            'curp' => $this->curp,
            'num_seguro' => $this->numSeguro,
            'tipo_sangre' => $this->tipo_sangre,
            'alergias' => $this->alergias,
            'medicamentos_alergicos' => $this->medAlergias,
            'complicaciones_medicas' => $this->compliMedicas,
            'contac_emerg' => $this->contacto,
            'tel_contact' => $this->tel2,
            'tel2_contact' => $this->tel2,
            'parentesco' => $this->parentesco
        ]);
    
        return $this->message = 'Guardado';  
    }

    public function obtenerDatos(){
        $idDocente = Docente::where('user_id', Auth::user()->id )->first();
        $datosDocente = Docente_datos::where('docente_id', $idDocente->idDocente)->get();

        ///$this->data = $datosDocente;

        foreach($datosDocente as $item){
            $this->idDatos = $item->docente_id;
            $this->direccion = $item->direccion;
            $this->colonia = $item->colonia;
            $this->ciudad = $item->ciudad;
            $this->telefono = $item->telefono;
            $this->cp = $item->cp;
            $this->curp = $item->curp;
            $this->numSeguro = $item->num_seguro;
            $this->tipo_sangre = $item->tipo_sangre;
            $this->alergias = $item->alergias;
            $this->medAlergias = $item->medicamentos_alergicos;
            $this->compliMedicas = $item->complicaciones_medicas;
            $this->contacto = $item->contac_emerg;
            $this->tel1 = $item->tel_contact;
            $this->tel2 = $item->tel2_contact;
            $this->parentesco = $item->parentesco;   
        }
    }

}
