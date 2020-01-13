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

Route::get('/', 'PagesController@indexprincipal')->name('principal'); 

Route::get('/index','PagesController@indexp');

Route::post('/', 'HomeController@crear')->name('peliculas.crear');

// Route::get('/','PagesController@inicio')->('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/joker','HomeController@pelicula')->name('pelicula');
Route::get('home/butaca','HomeController@butaca')->name('butaca');
Route::get('home/joker/funcion','HomeController@funcion')->name('funcion');
Route::get('/home/{id}', 'HomeController@detalle')->name('peliculas.detalle');
Route::get('/home/editar/{id}', 'HomeController@editar')->name('peliculas.editar');
Route::put('/home/editar/{id}', 'HomeController@update')->name('peliculas.update');
Route::delete('eliminar/{id}', 'HomeController@eliminar')->name('peliculas.eliminar');