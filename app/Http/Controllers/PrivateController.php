<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{
    //

    public function perfil_completo_alumno(){
        return view('alumnos.datos_socioecon');
    }

    public function perfil_completo_docente(){
        return view('docente.datos_socioecon');
    }
    
}
