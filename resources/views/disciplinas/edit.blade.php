@extends('layout')

@section('content')
    <h1>Editar Disciplina</h1>

    <form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">
        @csrf @method('PUT')

        <input type="text" name="nome" value="{{ $disciplina->nome }}" required><br>
        <input type="number" name="aulas" value="{{ $disciplina->aulas }}" required><br>

        <select name="curso_id" required>
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}" {{ $curso->id == $disciplina->curso_id ? 'selected' : '' }}>
                    {{ $curso->nome }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Atualizar</button>
    </form>
@endsection
