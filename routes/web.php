<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/signin', function () {
      return view('auth.login');
});
Route::get('/', function () {
      return view('auth.login');
});
Route::group(['middleware' => 'auth'], function()
{
  Route::get('/home','LibrosController@getindex');
  Route::get('compra/{idLibro}','LibrosController@getCompra');
  Route::post('compra/store', 'InsertController@store');
  Route::get('bookView/{idLibro}', 'LibrosController@getActivo');

  Route::get('/perfil/','PerfilController@index');

  Route::get('pago', function () {
      return view('auth.register');
  });
  //Route::post('form', array('as' => 'form', 'uses'=>'LibrosController@getPago'));

  Route::get('auth/logout', 'Auth\LoginController@logout');
  Route::post('auth/logout', 'Auth\LoginController@logout');
});
  Route::get('/signup', function () {
      return view('auth.register');
  });

Route::get('activos', 'LibrosController@getActivos');

Route::get('search', array('as'=>'search', 'uses'=>'SearchController@search'));
Route::get('autocomplete', array('as'=>'autocomplete', 'uses'=>'SearchController@autocomplete'));
