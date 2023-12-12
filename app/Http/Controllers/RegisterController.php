<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view ('auth.registro');
    }
    public function store(Request $request){
        /* dd($request); se usa para tener un console log*/

        $request->request->add(['code' => Str::slug($request->code)]);

      $this->validate($request, [
        'name' => 'required|max:30',
        'code' => 'required|unique:users|min:3|max:30',
        'email' => 'required|email|unique:users,email|max:50',
        'fechaN' => 'required|date',
        'rol' => 'required|in:Estudiante,Docente,Administrador',
        'password' => 'required|confirmed|min:6'
        ]);

        try {
          User::create([
              'name' => $request->name,
              'code' => $request->code,
              'email' => $request->email,
              'fechaN' => $request->fechaN,
              'rol' => $request->rol,
              'password' => Hash::make($request->password)
          ]);
          session()->flash('success', 'Usuario registrado con éxito.');

      } catch (\Exception $e) {
        
          session()->flash('error', 'Ha ocurrido un error al registrar el usuario.');
          return redirect()->back()->withInput();
      }
       
     /*  auth()->attempt([
        'email' => $request->email,
        'password' => $request->password
        ]); */
        
        auth()->attempt($request->only('code','password'));
          
    
      return redirect()->route('post.index')->with('bienvenida', '¡Tu registro ha sido exitoso ');
    }
}
 