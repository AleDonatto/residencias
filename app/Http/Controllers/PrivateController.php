<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{
    //

    public function perfil_completo_alumno(){
        return view('alumnos.datos_socioecon');
    }
    
}
