<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\ProdutoController;

Route::get('/controller', [TesteController::class, 'mostrar']);

Route::get('/', function () {
    return redirect()->route('produtos.index');
});

Route::resource('produtos', ProdutoController::class);

use App\Http\Controllers\CursoController;

Route::resource('cursos', CursoController::class);

use App\Http\Controllers\DisciplinaController;

Route::resource('disciplinas', DisciplinaController::class);
