@extends('layouts.app')

@section('titulo')
Dashboard
@endsection

@section('contenido')

@if (session('bienvenida'))
    <div class="alert alert-success flex justify-center items-center w-full md:w8/12 lg:w-6/12 md:flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 pr-2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
        </svg>
        {{ session('bienvenida') }} <p>..</p>
        <p class="font-bold uppercase">{{ auth()->user()->name }}</p>
    </div>
@endif


<div class="flex justify-center">
    <div class="flex justify-center items-center w-full md:w8/12 lg:w-6/12 md:flex">
        <div class="lg:w-6/12 px-5 ">
            <img class="rounded-full " src="{{asset('img/user.jpg')}}" alt="imagen de usuario">
            <div class=" flex justify-center pt-5">
            <p class="font-bold uppercase">{{ auth()->user()->name }}</p>
        </div> 
        </div>
    </div>
</div>

@endsection