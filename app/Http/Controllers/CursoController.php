<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ // página principal
        return view('cursos.index');
    }

    public function create(){ // crear elemento
        return view('cursos.create');
    }

    public function show($curso){ // mostrar elemento
        return view('cursos.show', compact('curso'));
    }
}
