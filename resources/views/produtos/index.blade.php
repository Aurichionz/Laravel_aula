@extends('layout')

@section('content')
<h1>Lista de Produtos</h1>

<a class="btn" href="{{ route('produtos.create') }}">+ Novo Produto</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->preco }}</td>
            <td>{{ $produto->quantidade }}</td>
            <td>
                <a class="btn-edit" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
