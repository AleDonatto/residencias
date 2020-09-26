<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PagesController extends Controller
{
    //

    public function counter(){
        return view('alumnos.prueba');
    }

    public function app_login(Request $request){

        return $request;
    }

    public function app_register(Request $request){

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
            $usuario->tipo_user = 1;
            $usuario->save();
            
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
            $usuario->tipo_user = 2;
            $usuario->save();
            
            $credentials = $request->only('matricula', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            }else{
                return back();
            }
        }
    }

}
