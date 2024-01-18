<!-- Herencia de plantillas -->
@extends('layouts.plantilla')

<!-- Modificar la seccion de titulo -->
@section('title', 'Listado de plantillas')

<!-- Modificar la seccion del contenido(body) -->
@section('head')
    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Listado de Cursos</h1>
@endsection

@section('content')
    {{-- <h1>Listado de las plantillas new</h1> --}}
    <ul>
        @foreach ($cursos_a_mostrar as $i)
            <li>{{$i->name}}</li>
        @endforeach
    </ul>
    {{$cursos_a_mostrar->links()}}

    
@endsection