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
Route::get('auth/begin', 'Auth\LoginController@showLoginForm');
Route::post('auth/begin', 'Auth\LoginController@login');
Route::get('/login', function () {
      return view('auth.login');
});
Route::get('/home', function () {
      return view('auth.login');
});
Route::group(['middleware' => 'auth'], function()
{
  /*Route::get('/', function () {
      return view('main.index');
  });*/
  Route::get('/','LibrosController@getindex');



  Route::get('compra/{idLibro}','LibrosController@getCompra');



  Route::get('auth/logout', 'Auth\LoginController@logout');
  Route::post('auth/logout', 'Auth\LoginController@logout');
});
  Route::get('/signup', function () {
      return view('auth.register');
  });
