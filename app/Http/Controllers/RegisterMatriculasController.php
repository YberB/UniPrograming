<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;

class RegisterMatriculasController extends Controller
{
    public function index(){
        return view ('auth.registroMatriculas');
    }
    public function create()
    {
        $users = User::all();
        return view('matriculas.create', ['users' => $users]);
    }
    public function store(Request $request){

        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'curso' => 'required|max:20',
            'calificacion' => 'nullable|numeric',
            'fechaM' => 'required|date',
        ]);

        Matricula::create([
            'user_id' => $request->user_id,
            'curso' => $request->curso,
            'calificacion' => $request->calificacion,
            'fechaM' => $request->fechaC,
        ]);

        return redirect()->route('matriculas')->with('success', 'La matrícula se ha registrado con éxito.');
    }
    
}
