<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumnos_datos;
use App\Models\Alumnos;
use App\Models\User;

class DatosAlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validation = $request->validate([
            'direccion' => 'required|string',
            'colonia' => 'required|string',
            'telefono' => 'required|string',
            'codigo_postal' => 'required|string',
            'curp' => 'required|string',
            'ssn' => 'required|string',
            'tipo_sangre' => 'required|string',
            'alergias' => 'required|string',
            'alergias_medicamento' => 'required|string',
            'complicaciones_medicas' => 'required|string',
            'contacto_Emergencia' => 'required|string',
            'telefono_contacto' => 'required|string',
            'telefono_contacto2' => 'required|string',
            'parentesco' => 'required|string'
        ]);

        $idUser = Auth::id();
        $idAlumno = Alumnos::where('user_id', $idUser )->first();

        
        $datos = new Alumnos_datos;
        $datos->docente_id = $idAlumno->idAlumno;
        $datos->direccion = $request->direccion;
        $datos->colonia = $request->colonia;
        $datos->ciudad = $request->ciudad;
        $datos->telefono = $request->telefono;
        $datos->cp = $request->codigo_postal;
        $datos->curp = $request->curp;
        $datos->num_seguro = $request->ssn;
        $datos->tipo_sangre = $request->tipo_sangre;
        $datos->alergias = $request->alergias;
        $datos->medicamentos_alergicos = $request->alergias_medicamento;
        $datos->complicaciones_medicas = $request->complicaciones_medicas;
        $datos->contac_emerg = $request->contacto_Emergencia;
        $datos->tel_contact = $request->telefono_contacto;
        $datos->tel2_contact = $request->telefono_contacto2;
        $datos->parentesco = $request->parentesco;
        $datos->save();

        $actualizauser = User::where('id', $idUser )
        ->update(['perfil_completo' => true]);

        return redirect()->intended('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
