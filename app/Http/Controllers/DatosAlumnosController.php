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
            'contacto_Emergencia' => 'required|string'
        ]);

        $idUser = Auth::id();
        $idAlumno = Alumnos::where('user_id', $idUser )->first();

        $datosAlumno = new Alumnos_datos;
        $datosAlumno->alumno_id = $idAlumno->user_id;
        $datosAlumno->direccion = $request->direccion;
        $datosAlumno->colonia = $request->colonia;
        $datosAlumno->telefono = $request->telefono;
        $datosAlumno->cp = $request->codigo_postal;
        $datosAlumno->contac_emerg = $request->contacto_Emergencia;
        $datosAlumno->save();

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
