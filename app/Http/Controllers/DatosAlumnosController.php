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
            'lugar_nacimiento' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required|string',
            'estado_civil' => 'required|string',
            'colonia' => 'required|string',
            'ciudad'=> 'required|string',
            'telefono' => 'required|string',
            'codigo_postal' => 'required|string',
            'curp' => 'required|string',
            'ssn' => 'required|string',
            'tipo_sangre' => 'required|string',
            'alergias' => 'required|string',
            'alergias_medicamento' => 'required|string',
            'complicaciones_medicas' => 'required|string',
            'nombre_madre' => 'required|string',
            'domicilio_madre' => 'required|string',
            'colonia_madre' => 'required|string',
            'telefono_madre' => 'required|string',
            'nombre_padre' => 'required|string',
            'domicilio_padre' => 'required|string',
            'colonia_padre' => 'required|string',
            'telefono_padre' => 'required|string',
            'empresa' => 'required|string',
            'domicilio_empresa' => 'required|string',
            'colonia_empresa' => 'required|string',
            'ciudad_empresa' => 'required|string',
            'puesto_empresa' => 'required|string',
            'antiguedad' => 'required|string',
            'jefe_inmediato' => 'required|string',
            'turno' => 'required|string'
        ]);

        $idUser = Auth::id();
        $idAlumno = Alumnos::where('user_id', $idUser )->first();

        $datos = new Alumnos_datos;
        $datos->alumno_id = $idAlumno->idAlumno;
        $datos->lugNac = $request->lugar_nacimiento;
        $datos->fechaNac = $request->fecha_nacimiento;
        $datos->genero = $request->genero;
        $datos->estado_civil = $request->estado_civil;
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
        $datos->contacto1 = $request->nombre_madre;
        $datos->direccion_contact = $request->domicilio_madre;
        $datos->colonia1 = $request->colonia_madre;
        $datos->tel_contact = $request->telefono_madre;
        $datos->contacto2 = $request->nombre_padre;
        $datos->direccion_contact2 = $request->domicilio_padre;
        $datos->colonia2 = $request->colonia_padre;
        $datos->tel_contact2 = $request->telefono_padre;
        $datos->empresa = $request->empresa;
        $datos->domicilio_empresa = $request->domicilio_empresa;
        $datos->colonia_empresa = $request->colonia_empresa;
        $datos->ciudad_empresa = $request->ciudad_empresa;
        $datos->puesto = $request->puesto_empresa;
        $datos->antiguedad = $request->antiguedad;
        $datos->nombre_jefe = $request->jefe_inmediato;
        $datos->turno = $request->turno;
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
