<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Curso;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = Disciplina::with('curso')->get(); // já pega o nome do curso
        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        $cursos = Curso::all(); // necessário para o select
        return view('disciplinas.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        Disciplina::create($request->all());
        return redirect()->route('disciplinas.index')->with('success', 'Disciplina cadastrada com sucesso!');
    }

    public function edit(Disciplina $disciplina)
    {
        $cursos = Curso::all();
        return view('disciplinas.edit', compact('disciplina', 'cursos'));
    }

    public function update(Request $request, Disciplina $disciplina)
    {
        $disciplina->update($request->all());
        return redirect()->route('disciplinas.index')->with('success', 'Disciplina atualizada com sucesso!');
    }

    public function destroy(Disciplina $disciplina)
    {
        $disciplina->delete();
        return redirect()->route('disciplinas.index')->with('success', 'Disciplina excluída com sucesso!');
    }
}
