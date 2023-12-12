@extends('layouts.app')

@section('titulo')
Usuarios UniPrograming
@endsection

@section('contenido')

@if(Auth::user()->rol === 'administrador')

    <h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de usuarios</h1>

    <table class="w-full border border-collapse">
        <thead>
            <tr class="bg-gray-300">
                <th class="border p-2">ID</th>
                <th class="border p-2">Nombres</th>
                <th class="border p-2">Identificación</th>
                <th class="border p-2">Correo</th>
                <th class="border p-2">Fecha Nacimiento</th>
                <th class="border p-2">Rol</th>
                <th class="border p-2">Materia</th>
           
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr class="hover:bg-gray-200 cursor-pointer">
                    <td class="border pl-2 text-center">{{ $usuario->id }}</td>
                    <td class="border p-2 text-center">{{ $usuario->name }}</td>
                    <td class="border p-2 text-center">{{ $usuario->code }}</td>
                    <td class="border p-2 text-center">{{ $usuario->email }}</td>
                    <td class="border p-2 text-center">{{ $usuario->fechaN }}</td>
                    <td class="border p-2 text-center">{{ $usuario->rol }}</td>
                    <td class="border p-2 text-center">{{ optional($usuario->matriculas->first())->curso }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endif

@if(Auth::user()->rol === 'docente')

    <h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de estudiantes</h1>

    <table class="w-full border border-collapse">
        <thead>
            <tr class="bg-gray-300">
                <th class="border p-2">ID</th>
                <th class="border p-2">Nombres</th>
                <th class="border p-2">Identificación</th>
                <th class="border p-2">Correo</th>
                <th class="border p-2">Fecha Nacimiento</th>
                <th class="border p-2">Materia que estudia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                @if($usuario->rol === 'estudiante')
                    <tr class="hover:bg-gray-200 cursor-pointer">
                        <td class="border pl-2 text-center">{{ $usuario->id }}</td>
                        <td class="border p-2 text-center">{{ $usuario->name }}</td>
                        <td class="border p-2 text-center">{{ $usuario->code }}</td>
                        <td class="border p-2 text-center">{{ $usuario->email }}</td>
                        <td class="border p-2 text-center">{{ $usuario->fechaN }}</td>
                        <td class="border p-2 text-center">{{ optional($usuario->matriculas->first())->curso }}</td>

                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

@endif

@if(Auth::user()->rol === 'estudiante')

    <h1 class="text-4xl text-center font-bold mb-4 text-gray-500">Lista de docentes</h1>

    <table class="w-full border border-collapse">
        <thead>
            <tr class="bg-gray-300">
                <th class="border p-2">ID</th>
                <th class="border p-2">Nombres</th>
                <th class="border p-2">Identificación</th>
                <th class="border p-2">Correo</th>
                <th class="border p-2">Materia que enseña</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                @if($usuario->rol === 'docente')
                    <tr class="hover:bg-gray-200 cursor-pointer">
                        <td class="border pl-2 text-center">{{ $usuario->id }}</td>
                        <td class="border p-2 text-center">{{ $usuario->name }}</td>
                        <td class="border p-2 text-center">{{ $usuario->code }}</td>
                        <td class="border p-2 text-center">{{ $usuario->email }}</td>
                        <td class="border p-2 text-center">{{ optional($usuario->matriculas->first())->curso }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

@endif

@endsection
