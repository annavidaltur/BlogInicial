<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ // página principal
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){ // crear elemento
        return view('cursos.create');
    }

    public function show($id){ // mostrar elemento
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }
}
