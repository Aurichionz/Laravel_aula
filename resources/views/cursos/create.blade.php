@extends('layout')

@section('content')
    <h1>Cadastrar Curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome do curso" required><br>
        <input type="number" name="duracao" placeholder="Duração (semestres)" required><br>
        <button type="submit">Salvar</button>
    </form>
@endsection
