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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/zara', 'TumbasoController@index')->name('zara.index');
Route::get('/create','TumbasoController@create');
//Route::post('/tumbaso', 'TumbasoController@store')->name('tumbaso.store');
Route::post('/upload_proses', 'TumbasoController@proses_upload');
Route::get('/edit/{id}', 'TumbasoController@edit')->name('tumbaso.edit');
Route::post('/edit/update/{id}', 'TumbasoController@update');
Route::get('/destroy/{id}', 'TumbasoController@destroy')->name('tumbaso.destroy');
