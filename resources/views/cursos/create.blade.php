@extends('layouts.plantilla')

@section('title', 'Crear curso')

@section('content')
    <h1>Crear curso</h1>

    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            *<small>{{$message}}</small>
        @enderror

        <br>
        <label>
            Descripción:
            <textarea rows="5" name="description">{{old('description')}}</textarea>
        </label>
        @error('description')
            *<small>{{$message}}</small>
        @enderror
        <br>
        <label>
            Categoría:
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            *<small>{{$message}}</small>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
