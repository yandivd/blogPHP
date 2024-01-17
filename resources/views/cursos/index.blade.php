<!-- Herencia de plantillas -->
@extends('layouts.plantilla')

<!-- Modificar la seccion de titulo -->
@section('title', 'Listado de plantillas')

<!-- Modificar la seccion del contenido(body) -->
@section('content')
    <h1>Listado de las plantillas new</h1>
    <ul>
        @foreach ($cursos_a_mostrar as $i)
            <li>{{$i->name}}</li>
        @endforeach
    </ul>
    {{$cursos_a_mostrar->links()}}

    
@endsection