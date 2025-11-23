@extends('layout')

@section('content')
    <h1>Disciplinas</h1>

    <a href="{{ route('disciplinas.create') }}" class="btn">Cadastrar Disciplina</a>

    <table>
        <tr>
            <th>Nome</th>
            <th>Aulas / Semana</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>

        @foreach ($disciplinas as $disciplina)
            <tr>
                <td>{{ $disciplina->nome }}</td>
                <td>{{ $disciplina->aulas }}</td>
                <td>{{ $disciplina->curso->nome }}</td>
                <td>
                  <a class="btn-edit" href="{{ route('disciplinas.edit', $disciplina->id) }}">Editar</a>

                    <form action="{{ route('disciplinas.destroy', $disciplina->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                       <button class="btn-delete" type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
