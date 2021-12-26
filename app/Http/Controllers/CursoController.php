<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ // página principal
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){ // crear elemento
        return view('cursos.create');
    }

    public function store(Request $request){ // almacenar elemento
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required',
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso->id);
    }

    public function show($id){ // mostrar elemento
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    // Equivalent amb menys codi
    // public function show(Curso $curso){ // mostrar elemento
    //     return view('cursos.show', compact('curso'));
    // }

    public function edit(Curso $curso){ // edit elemento
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){ // actualizar elemento
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required',
        ]);

        $curso->name = $request->name;
        $curso->description = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso->id);
    }
}
