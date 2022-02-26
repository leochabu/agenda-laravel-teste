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

Route::middleware(['auth'])->group(function () 
{
    Route::get('/', 'ContatosController@index')->name('home');
    Route::get('/contatos/new', 'ContatosController@new');
    Route::post('/contatos/add', 'ContatosController@add');
    Route::get('/contatos/{usuario_gh}/projetos', 'ContatosController@projetos');
});


