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

Route::get('/usuarios', 'UsuariosController@index');

Route::group(['middleware' => 'web'], function (){

	Route::get('/', 'HomeController@index');

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	Route::any('produtos', 'ProdutoController@lista');
	Route::any('produtos/novo', 'ProdutoController@novo');

	Route::any('produtos/salvar', 'ProdutoController@salvar');
	Route::any('produtos/{produto}/detalhe', 'ProdutoController@detalhe');
	Route::any('produtos/cencelar', 'ProdutoController@cencelar');


	Route::any('produtos/{produto}/editar', 'ProdutoController@editar');
	Route::patch('produtos/{produto}', 'ProdutoController@atualizar');

	Route::delete('produtos/{produto}', 'ProdutoController@deletar');	

	
});







