@extends('layouts.plantilla')

@section('title', 'Editar curso ' . $curso->name)

@section('content')
    <h1>Editar curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            *<small>{{$message}}</small>
        @enderror

        <br>
        <label>
            Descripción:
            <textarea rows="5" name="description">{{old('description', $curso->description)}}</textarea>
        </label>
        @error('description')
            *<small>{{$message}}</small>
        @enderror

        <br>
        <label>
            Categoría:
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            *<small>{{$message}}</small>
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
