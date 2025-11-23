@extends('layout')

@section('content')
    <h1>Cursos</h1>

    <a href="{{ route('cursos.create') }}" class="btn">Cadastrar Curso</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Duração (semestres)</th>
            <th>Ações</th>
        </tr>

        @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nome }}</td>
                <td>{{ $curso->duracao }}</td>
                <td>
                  <a class="btn-edit" href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
                    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn-delete" type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
