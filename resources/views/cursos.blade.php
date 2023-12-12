@extends('layouts.app')

@section('titulo')
Cursos UniPrograming
@endsection

@section('contenido')

<h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de Cursos</h1>


<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">ID</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Código</th>
            <th class="border p-2">Docente</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $curso)
            <tr class="hover:bg-gray-200 cursor-pointer">
                <td class="border pl-2 text-center">{{ $curso->id }}</td>
                <td class="border p-2 text-center">{{ $curso->nombre }}</td>
                <td class="border p-2 text-center">{{ $curso->codigo }}</td>
                <td class="border p-2 text-center">{{ $curso->docente_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection