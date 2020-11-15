<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivateController extends Controller
{
    //
    //alumnos
    public function perfil_completo_alumno(){
        return view('alumnos.datos_socioecon');
    }

    public function horario_alumno(){
        return view('alumnos.miHorario');
    }
    
    //vista de descripcion del curso para el alumno
    public function descripcionCursoAlumno($id){
        return view('alumnos.descripcionCurso');
    }

    //docentes
    public function perfil_completo_docente(){
        return view('docente.datos_socioecon');
    }

    public function horario_docente(){
        return view('docente.miHorario');
    }

    
}
