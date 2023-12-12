<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\User;

class MatriculasController extends Controller
{
    public function index() {
        $matriculas = Matricula::all();
        return view('matriculas', ['matriculas' => $matriculas]);
    }
    
    public function mostrarFormularioMatriculas()
    {
    $estudiantes = User::where('rol', 'estudiante')->get(); 

    return view('registro_matriculas', ['estudiantes' => $estudiantes]);
    }
}
