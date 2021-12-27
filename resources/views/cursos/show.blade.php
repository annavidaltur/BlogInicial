@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>página principal de curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar</a>
    <p>Categoría: {{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
