<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cursos;
use App\Models\CargaAcademica;

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
    public function allCursos(){
        return view('alumnos.allCursos');
    }

    public function descripcionCursoAlumno($id){
        $curso = DB::table('curso')
        ->join('docente', 'curso.docente_id', '=' , 'docente.idDocente')
        ->join('materias', 'curso.materia_id', '=', 'materias.idMateria')
        ->join('users', 'docente.user_id', '=', 'users.id')
        ->select('curso.*', 'materias.nombreMateria', 'users.name', 'users.lastname')
        ->where('curso.idCurso',$id)
        ->get();

        $solicitud = DB::table('carga_academica')
        ->where('curso_id', $id)
        ->where('alumno_id', Auth::id())
        ->count();

        $cursoId = $id;

        return view('alumnos.descripcionCurso')->with(compact('curso','solicitud','cursoId'));
    }

    public function sendSolicitud(Request $request){
        $solicitud = new CargaAcademica;
        $solicitud->alumno_id = $request->alumno;
        $solicitud->curso_id = $request->curso;
        $solicitud->status = 0;
        $solicitud->save();

        $alerta = array(
            'message' => 'Se envio tu solicitud de inscripcion al grupo',
            'type' => 'success'
        );

        return redirect()->route('dashboard')->with($alerta);
    }

    //docentes
    public function perfil_completo_docente(){
        return view('docente.datos_socioecon');
    }

    public function horario_docente(){
        return view('docente.miHorario');
    }

    
}
