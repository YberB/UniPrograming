<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MatriculasController;
use App\Http\Controllers\RegisterMatriculasController;
use App\Http\Controllers\RegisterCursosController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/registro', [RegisterController::class, "index"])->name('registro');
Route::post('/registro', [RegisterController::class, "store"]);

Route::get('/registroMatriculas', [RegisterMatriculasController::class, "index"])->name('registroMatriculas');
Route::post('/registroMatriculas', [RegisterMatriculasController::class, "store"]);

Route::get('/registroCursos', [RegisterCursosController::class, "index"])->name('registroCursos');
Route::post('/registroCursos', [RegisterCursosController::class, "store"]);

Route::get('/login', [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, "store"]);

Route::get('/dashboard', [PostController::class, "index"])->name('post.index');

Route::post('/logout', [LogoutController::class, "store"])->name('logout');

Route::get('/mostrar-formulario-matriculas', [MatriculasController::class, 'mostrarFormularioMatriculas'])->name('mostrarFormularioMatriculas');

Route::get('/cursos', [CursosController::class, "index"])->name('cursos');
Route::get('/usuarios', [UsuariosController::class, "index"])->name('usuarios');
Route::get('/matriculas', [MatriculasController::class, "index"])->name('matriculas');

