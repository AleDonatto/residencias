<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cursos;
use App\Models\CargaAcademica;
use App\Models\Alumnos;

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

        $alumnos = Alumnos::where('user_id', Auth::id())->first();

        $solicitud = DB::table('carga_academica')
        ->where('curso_id', $id)
        ->where('alumno_id', $alumnos->idAlumno)
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

    public function viewActividadAlumno($id){

        return view('alumnos.viewActividad')->with(compact('id'));
    }

    /* fin metodos de alumnos */

    //docentes
    public function perfil_completo_docente(){
        return view('docente.datos_socioecon');
    }

    public function horario_docente(){
        return view('docente.miHorario');
    }

    public function formActividadesTemaCurso($curso, $tema){
        //return view('docente.addActividadTema')->with(compact('curso', 'tema'));
        return view('docente.addActividadTema', ['curso' => $curso, 'tema' => $tema ]);
    }

    public function descripcionAlumno($curso, $alumno){
        return view('docente.descripcionAlumno', ['curso' => $curso,'idalumno' => $alumno ]);
    } 

    public function calActividades(){
        return view('docente.calActividades');
    }
    /** fin metodos docentes **/

    
}
