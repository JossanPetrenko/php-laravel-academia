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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/treino', function () {
    return view('treino.treinos');
});
Route::get('/pessoa', function () {
    return view('pessoa.pessoas');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/treino/{id}', 'TreinoController@index');
