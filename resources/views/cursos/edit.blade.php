@extends('layout')

@section('content')
    <h1>Editar Curso</h1>

    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="nome" value="{{ $curso->nome }}" required><br>
        <input type="number" name="duracao" value="{{ $curso->duracao }}" required><br>
        <button type="submit">Atualizar</button>
    </form>
@endsection
