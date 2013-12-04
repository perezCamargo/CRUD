<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('index');
});

Route::get('editar', function(){
	$usuarioShow = DB::table('usuarios')->get();
			return View::make('editar')->with(['datos'=>$usuarioShow]);
	//return View::make('editar');
});

Route::post('create', 'crudController@saveCrud');


Route::post('update', 'crudController@updateCrud');

Route::get('delete/{id}', 'crudController@deleteCrud');

//Route::get('show', 'crudController@showCrud');