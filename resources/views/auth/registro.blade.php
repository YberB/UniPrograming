@extends('layouts.app')

@section('titulo')
Registro de Usuarios
@endsection

@section('contenido')

<div class="md:flex mt-5">
<div class="md:w-1/2 p-9">
    <img class="rounded-lg" src="{{asset('img/registrar.jpg')}}" alt="Imagen de Registro">
</div>
<div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl" style="border-top: 3px solid #00FF00;">
<form action="{{ route('registro') }}" method="post">
    @csrf
    <div class="mb-5">
        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombres</label>
        <input id="name" name="name" placeholder="Nombre" type="text" class=" border p-3 w-full rounded-lg bg-blue-100 border-green-400">
        @error('name')
        <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="code" class="mb-2 block uppercase text-gray-500 font-bold">Identificación</label>
        <input id="code" name="code" placeholder="Identificación" type="text" class=" border p-3 w-full rounded-lg bg-blue-100 border-green-400">
        @error('code')
        <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
        <input id="email" name="email" placeholder="email" type="email" class=" border p-3 w-full rounded-lg bg-blue-100 border-green-400">
        @error('email')
        <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>

    <div class="mb-5">
        <label for="fechaN" class="mb-2 block uppercase text-gray-500 font-bold">Fecha de Nacimiento</label>
        <input id="fechaN" name="fechaN" placeholder="Fecha de Nacimiento" type="date" class=" border p-3 w-full rounded-lg bg-blue-100 border-green-400">
        @error('fechaN')
        <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>

    <div class="mb-5">
    <label for="rol" class="mb-2 block uppercase text-gray-500 font-bold">Tipo de Usuario</label>
    <select id="rol" name="rol" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
        <option value="Estudiante">Estudiante</option>
        <option value="Docente">Docente</option>
        <option value="Administrador">Administrador</option>
    </select>
    @error('rol')
    <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
    @enderror
    </div>
    <div class="mb-5">
        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
        <input id="password" name="password" placeholder="Contraseña" type="password" class=" border p-3 w-full rounded-lg bg-blue-100 border-green-400">
        @error('password')
        <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Confirmar</label>
        <input id="password_confirmation" name="password_confirmation" placeholder="Confirmar Contraseña" type="password" class=" border p-3 w-full rounded-lg bg-blue-100 border-green-400">
        @error('password_confirmation')
        <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <input type="submit" value="Registrar" class="bg-sky-700  hover:bg-green-600 w-full p-3 text-white rounded-lg uppercase" >
</form>

@if (session('success'))
    <div class="alert alert-success text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">
        {{ session('error') }}
    </div>
@endif
</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("name").focus();
    });
</script>

@endsection