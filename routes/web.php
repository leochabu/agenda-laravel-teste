<?php

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


Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

//rotas protegidas
Route::middleware(['auth'])->group(function () 
{
    //rotas de usuario
    Route::get('/', 'ContatosController@index');
    Route::get('/contatos/new', 'ContatosController@new');
    Route::post('/contatos/add', 'ContatosController@add');
    Route::get('/contatos/{usuario_gh}/projetos', 'ContatosController@projetos');
});

//rotas de contatos
// Route::get('/contatos/criar', 'ContatosController@create')->name('criar_contato');
// Route::post('/contatos/criar', 'ContatosController@store')->name('criar_contato');
// Route::get('/{id}/contatos', 'ContatosController@index')->name('contatos');
