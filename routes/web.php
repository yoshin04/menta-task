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



Route::get('/login', 'LoginController@index');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@post');

Route::get('todos','TodosController@index');
Route::post('todos','TodosController@store');
Route::post('/todos/state/{id}','TodosController@changeState');
Route::delete('/todos/{id}','TodosController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
