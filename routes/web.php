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
    return view('welcome');
});

Auth::routes();

// Route::get('/films', 'HomeController@index')->name('films');

Route::get('/films', 'FilmController@index');

Route::post('/films', 'FilmController@store');

Route::delete('/films/{films}', 'FilmController@destroy');

Route::get('/films/{id}/{kategori}/edit', 'FilmController@edit');

Route::put('/films/{id}', 'FilmController@update');


Route::get('/films/aksi', 'KategoriController@aksi');

Route::get('/films/horror', 'KategoriController@horror');

Route::get('/films/komedi', 'KategoriController@komedi');

Route::get('/films/romantis', 'KategoriController@romantis');

Route::get('/films/triler', 'KategoriController@triler');

