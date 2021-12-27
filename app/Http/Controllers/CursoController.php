<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){ // página principal
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){ // crear elemento
        return view('cursos.create');
    }

    public function store(StoreCurso $request){ // almacenar elemento
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso = Curso::create($request->all()); // Fa el mateix que el mazacote anterior
        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){ // mostrar elemento
        return view('cursos.show', compact('curso'));
    }

    // Equivalent amb més codi
    // public function show($id){ // mostrar elemento
    //     $curso = Curso::find($id);
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

        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso){ // eliminar elemento
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
