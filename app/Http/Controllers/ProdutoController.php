<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create($request->all());
        return redirect()->route('produtos.index');
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        Produto::findOrFail($id)->update($request->all());
        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();
        return redirect()->route('produtos.index');
    }
}
