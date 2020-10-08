<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Alumnos;
use App\Models\Docente;

class PagesController extends Controller
{
    //

    public function counter(){
        return view('alumnos.prueba');
    }

    public function app_login(Request $request){

        return $request;
    }

    //registro de alumnos 
    public function app_register(Request $request){

        $validation = $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'matricula' => 'required|integer',
            'email' => 'required|email',
            'password' => 'required|string',
            'password_confirmation' => 'required|string',
            'direccion' => 'required|string',
            'carrera' => 'required|string',
            'semestre' => 'required|string'
        ]);

        if($request->password != $request->password_confirmation){
            $mesanje = 'Las contraseñas no coinciden';
            return back()->with(compact('mensaje'));
        }else{

            $usuario = new User;
            $usuario->name = $request->name;
            $usuario->lastname = $request->lastname;
            $usuario->matricula = $request->matricula;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->direccion = $request->direccion;
            $usuario->tipo_user = 1;
            $usuario->save();

            $iduser = User::where('email', $request->email)->first(); 

            $alumno = new Alumnos;
            $alumno->nombre = $request->name;
            $alumno->apellidos = $request->lastname;
            $alumno->nControl = $request->matricula;
            $alumno->carrera = $request->carrera;
            $alumno->semestre = $request->semestre;
            $alumno->user_id = $iduser->id;
            $alumno->save();
            
            $credentials = $request->only('matricula', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            }else{
                return back();
            }
        }
    }

    public function app_register_docente(Request $request){

        $validation = $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'matricula' => 'required|integer',
            'email' => 'required|email',
            'password' => 'required|string',
            'password_confirmation' => 'required|string'
        ]);

        if($request->password != $request->password_confirmation){
            $mesanje = 'Las contraseñas no coinciden';
            return back()->with(compact('mensaje'));
        }else{

            $usuario = new User;
            $usuario->name = $request->name;
            $usuario->lastname = $request->lastname;
            $usuario->matricula = $request->matricula;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password);
            $usuario->direccion = $request->direccion;
            $usuario->tipo_user = 2;
            $usuario->save();

            $iduser = User::where('email', $request->email)->first();

            $docente = new Docente;
            $docente->matricula = $request->matricula;
            $docente->nombre = $request->name;
            $docente->apellidos = $request->lastname;
            $docente->user_id = $iduser->id;
            $docente->save();
            
            $credentials = $request->only('matricula', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            }else{
                return back();
            }
        }
    }

    public function invitado(){
        return view('invitado');    
    }

}
