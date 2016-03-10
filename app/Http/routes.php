<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos' , 'ProdutoController@lista');

Route::get('/produtos/show/{id?}','ProdutoController@show')->where('id','[0-9]+');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/produtos/update/{id}','ProdutoController@getForUpdate');

Route::post('/produtos/atualizar/{id}', 'ProdutoController@update');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/clientes','ClienteController@lista');

Route::get('/clientes/novo','ClienteController@novo');

Route::post('/clientes/adiciona','ClienteController@adiciona');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/produtos' , 'ProdutoController@lista');

    Route::get('/clientes','ClienteController@lista');

});
