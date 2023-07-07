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

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos',  'SobreNosController@sobreNos');

Route::get('/contato',  'ContatoController@contato');

// parametro opcionais
// Route::get('/contato/{nome}/{categoria?}',  function($nome, $categoria = ''){
//     return "Estamos aqui " . $nome . " " . $categoria;
// });

Route::get('/contato/{nome}/{categoria_id}',  function(string $nome = 'Desconhecido', int $categoria = 1){
    return "Estamos aqui " . $nome . " " . $categoria;
})->where('categoria_id', '[0-9]+')->where('nome','[A-Za-z]+');
