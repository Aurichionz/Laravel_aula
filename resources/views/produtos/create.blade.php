@extends('layout')

@section('content')
<h1>Cadastrar Produto</h1>

<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome"><br>
    <input type="number" step="0.01" name="preco" placeholder="Preço"><br>
    <input type="number" name="quantidade" placeholder="Quantidade"><br>
    <textarea name="descricao" placeholder="Descrição"></textarea><br>
    <button type="submit">Salvar</button>
</form>
@endsection
