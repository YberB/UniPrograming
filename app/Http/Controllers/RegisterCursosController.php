<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class RegisterCursosController extends Controller
{
    public function index(){
        return view ('auth.registroCursos');
    }
    public function create()
    {
        $docentes = User::where('rol', 'Docente')->get();
        return view('cursos.create', ['docentes' => $docentes]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:3',
            'codigo' => 'required|min:3|max:60',
            'docente_id' => 'required|exists:users,id',
        ]);

        Curso::create([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'docente_id' => $request->docente_id,
        ]);
          return redirect()->route('cursos')->with('success', 'El curso se ha registrado con éxito.');
      }
}
