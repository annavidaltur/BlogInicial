@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>página principal de curso {{$curso}}</h1>
@endsection