@extends('layouts.app')

@section('titulo')
Registro de Matrículas
@endsection

@section('contenido')

<div class="md:flex mt-5">
    <div class="md:w-1/2 p-9">
        <img class="rounded-lg" src="{{ asset('img/registrar.jpg') }}" alt="Imagen de Registro">
            @if (session('success'))
            <div class="alert alert-success text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 pr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                </svg>
            {{ session('success') }}
            </div>
            @endif
    </div>
    <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl" style="border-top: 3px solid #00FF00;">
        <form action="{{ route('registroMatriculas') }}" method="post">
            @csrf

            <div class="mb-5">
            <select id="user_id" class="form-control" name="user_id" required autofocus>
                <option value="" selected disabled>Seleccione usuario</option>
                @foreach($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombres }}</option>
                @endforeach
            </select>
                 @error('user_id')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
            <select id="curso" class="form-control" name="curso" required autofocus>
                <option value="" selected disabled>Seleccione curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                @endforeach
            </select>
                 @error('curso')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label for="calificacion" class="mb-2 block uppercase text-gray-500 font-bold">Calificación</label>
                <input id="calificacion" name="calificacion" placeholder="Calificación" type="text" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                @error('calificacion')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>
           
            <div class="mb-5">
                <label for="fechaM" class="mb-2 block uppercase text-gray-500 font-bold">Fecha de Matrícula</label>
                <input id="fechaM" name="fechaM" placeholder="Fecha de Matrícula" type="date" class="border p-3 w-full rounded-lg bg-blue-100 border-green-400">
                @error('fechaM')
                <p class="text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" value="Registrar" class="bg-sky-700 hover:bg-green-600 w-full p-3 text-white rounded-lg uppercase">
        </form>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("calificacion").focus();
    });
</script>

@endsection
