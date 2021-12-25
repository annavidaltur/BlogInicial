@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>Crear curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripción:
            <textarea rows="5" name="descripcion"></textarea>
        </label>
        <br>
        <label>
            Categoría:
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
