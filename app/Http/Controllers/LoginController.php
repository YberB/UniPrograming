<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
    /*     dd($request->remember); */
        $this->validate($request, [
            'code' => 'required',
            'password' => 'required'
            ]);

    if (!auth()->attempt($request->only('code','password'),$request->remember)){
            return back()->with('mensaje','Credenciales incorrectas');
    }
    return redirect()->route('post.index')->with('bienvenida', '¡Bienvenido de nuevo!  ');
    }
}

