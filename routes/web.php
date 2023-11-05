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

Route::get('/', 'PrincipalController@principal')->name('site.index')->middleware('log.acesso');

Route::get('/sobre-nos',  'SobreNosController@sobreNos')->name('site.sobrenos');

// Route::match(['get', 'post'], '/contato',  'ContatoController@contato')->name('site.contato');
Route::get('/contato',  'ContatoController@contato')->name('site.contato');
Route::post('/contato',  'ContatoController@salvar')->name('site.contato');

Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

// agrupamento de rotas

Route::middleware('log.acesso', 'autenticacao:padrao,visitante')->prefix('/app')->group(function() {
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');
    Route::get('/cliente', 'ClienteController@index')->name('app.cliente');

    Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
    Route::post('/fornecedor/listar', 'FornecedorController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/listar', 'FornecedorController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', 'FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', 'FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}/{msg?}', 'FornecedorController@editar')->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}/', 'FornecedorController@excluir')->name('app.fornecedor.excluir');

    Route::get('/produto', 'ProdutoController@index')->name('app.produto');


    Route::resource('produto', 'ProdutoController');
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
