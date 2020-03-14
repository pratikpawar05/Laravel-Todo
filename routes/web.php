<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index/','TodoController@index');
Route::get('/show/{id}','TodoController@show');
Route::get('/complete/{todo}','TodoController@complete');
Route::get('/create/','TodoController@create');
Route::post('/create-todo/','TodoController@createtodo');
Route::get('/update/{todo}','TodoController@update');
Route::get('/delete/{todo}','TodoController@deletetodo');
Route::post('/update-todo/{todo}','TodoController@updatetodo');
