<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Olá, seja bem-vindo ao curso!';
// });
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', 'LoginController@login')->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', 'ClientesController@clientes')->name('app.clientes');
    Route::get('/fornecedores', 'FornecedoresController@index')->name('app.fornecedores');
    Route::get('/produtos', 'ProdutosController@produtos')->name('app.produtos');
});

Route::get('teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe, <a href="'.route('site.index').'">clique aqui</a> para ir para a página inicial';
});
// Route::get('/contato/{nome}/{categoria}', function(string $nome, string $categoria) {
//     echo "Estamos aqui: $nome. - $categoria";
// });

