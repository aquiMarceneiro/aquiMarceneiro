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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function(){
	return view('home');
});


Route::get('/cadastrarUsuario', function(){
	return view('selecaoFuncao');
});

Route::get('cadastrarUsuario/formularioCliente', function(){
	return view('cadastro.formularioCliente');
});

Route::get('cadastrarUsuario/formularioMarceneiro', function(){
	return view('cadastro.formularioMarceneiro');
});

Route::post('/cadastrarUsuario/formularioCliente/cadastroCliente', 'UsuarioController@cadastrarUsuario');

Route::post('/cadastrarUsuario/formularioMarceneiro/cadastroMarceneiro', 'MarceneiroController@cadastrarMarceneiro');

Route::post('/home/minhaConta/alterarUsuario', 'UsuarioController@alterarUsuario');

Route::get('/buscarProfissional/maisInformacoes/{id}', 'BuscarProfissionalController@detalhesProfissional')->where('id','[0-9+]');

Route::get('/home/minhaConta', function(){
	return view('usuario.minhaConta');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home/buscarProfisional', 'BuscarProfissionalController@consultaDefault');

Route::post('/home/consultaProfissional', 'BuscarProfissionalController@consultaParametrizada');

