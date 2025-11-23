<h1>Editar Produto</h1>

<form action="{{ route('produtos.update', $produto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $produto->nome }}"><br>
    <input type="number" step="0.01" name="preco" value="{{ $produto->preco }}"><br>
    <input type="number" name="quantidade" value="{{ $produto->quantidade }}"><br>
    <textarea name="descricao">{{ $produto->descricao }}</textarea><br>
    <button type="submit">Atualizar</button>
</form>
