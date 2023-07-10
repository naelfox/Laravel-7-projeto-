<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos',  'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato',  'ContatoController@contato')->name('site.contato');
Route::get('/login',  function(){
    return 'Login';
})->name('login');

// agrupamento de rotas

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function () { return 'Clientes'; });
    Route::get('/fornecedores', function () { return 'Fornecedores'; });
    Route::get('/produtos', function () { return 'Produtos'; });
});


Route::get('/contato/{nome}/{categoria_id}',  function (string $nome = 'Desconhecido', int $categoria = 1) {
    return "Estamos aqui " . $nome . " " . $categoria;
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
