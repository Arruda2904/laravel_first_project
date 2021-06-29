<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Olá, seja bem-vindo ao curso!';
// });
Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
Route::get('/contato/{nome}', function(string $xyz) {
    echo 'Estamos aqui:'.$xyz;
});
