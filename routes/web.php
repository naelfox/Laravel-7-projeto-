<?php

use App\Http\Middleware\LogAcessoMiddleware;
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

Route::middleware(LogAcessoMiddleware::class)->get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos',  'SobreNosController@sobreNos')->name('site.sobrenos');

// Route::match(['get', 'post'], '/contato',  'ContatoController@contato')->name('site.contato');
Route::get('/contato',  'ContatoController@contato')->name('site.contato');
Route::post('/contato',  'ContatoController@salvar')->name('site.contato');

Route::get('/login',  function(){
    return 'Login';
})->name('login');

// agrupamento de rotas

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function () { return 'Clientes'; })->name('app.fornecedores');;
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function () { return 'Produtos'; })->name('app.fornecedores');;
});

// rotas dinamicas
Route::get('/contato/{nome}/{categoria_id}',  function (string $nome = 'Desconhecido', int $categoria = 1) {
    return "Estamos aqui " . $nome . " " . $categoria;
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

//
Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');


Route::fallback(function(){
    echo 'A rota acessada não existe';
});

//metodo redirect na route
// Route::redirect('/rota2', '/rota1');

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');
