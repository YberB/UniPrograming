@extends('layouts.app')

@section('titulo')
Matrículas UniPrograming
@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de Matrículas</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">Código</th>
            <th class="border p-2">Estudiante</th>
            <th class="border p-2">Materia</th>
            <th class="border p-2">Calificación</th>
            <th class="border p-2">Fecha de Matrícula</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matriculas as $matricula)
            <tr class="hover:bg-gray-200 cursor-pointer">
                <td class="border pl-2 text-center">{{ $matricula->codigo }}</td>
                <td class="border p-2 text-center">{{ $matricula->user_id }}</td>
                <td class="border p-2 text-center">{{ $matricula->curso }}</td>
                <td class="border p-2 text-center">{{ $matricula->calificacion }}</td>
                <td class="border p-2 text-center">{{ $matricula->fechaC }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
