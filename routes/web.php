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

//rota da tabela carros

//Route::get('/carros', 'carroController@index')->name('carros.index');

Route::resource('carros', 'carroController');

//rota da revisao

Route::get('/revisões', 'revisaoController@index')->name('revisoes.index');


