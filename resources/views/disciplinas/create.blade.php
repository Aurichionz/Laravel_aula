@extends('layout')

@section('content')
    <h1>Cadastrar Disciplina</h1>

    <form action="{{ route('disciplinas.store') }}" method="POST">
        @csrf

        <input type="text" name="nome" placeholder="Nome" required><br>
        <input type="number" name="aulas" placeholder="Aulas por semana" required><br>

        <select name="curso_id" required>
            <option value="">Selecione o curso</option>
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
            @endforeach
        </select><br>

        <button type="submit">Salvar</button>
    </form>
@endsection
