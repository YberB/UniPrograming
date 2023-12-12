@extends('layouts.app')

@section('titulo')
Login InOut
@endsection

@section('contenido')

<div class="md:flex mb-20 w-full flex items-center">
    <div class="md:w-1/2 p-9">
        <img class="rounded-lg" src="{{asset('img/registrar.jpg')}}" alt="Imagen de Registro">
    </div>
    <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl" style="border-top: 3px solid #00FF00;">
    <form action="{{ route('login') }}" method="POST" novalidate>
        @csrf

    @if (session('mensaje'))
        <p class="text-white text-center my-2 p-2 bg-red-500 rounded-lg text-sm">{{session('mensaje')}}</p>
    @endif

        <div class="mb-5">
            <label for="code" class="mb-2 block uppercase text-gray-500 font-bold">Código de Usuario</label>
            <input id="code" name="code" placeholder="Código de Usuario" type="tetx" class=" border p-3 w-full rounded-lg bg-blue-100 border-green-400">
            @error('code')
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
            <input type="checkbox" name="remember"><label class="text-gray-500 text-sm p-2" for="">Mantener sesión abierta</label>
        </div>
        <input type="submit" value="Ingresar" class="bg-sky-700  hover:bg-green-600 w-full p-3 text-white rounded-lg uppercase" >
    </form>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("code").focus();
    });
</script>

@endsection