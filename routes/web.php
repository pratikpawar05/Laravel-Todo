<?php

use Illuminate\Support\Facades\Route;
use Weidner\Goutte\GoutteServiceProvider;
use Goutte\Client;
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

Route::get('/index/', 'TodoController@index');
Route::get('/show/{id}', 'TodoController@show');
Route::get('/complete/{todo}', 'TodoController@complete');
Route::get('/create/', 'TodoController@create');
Route::post('/create-todo/', 'TodoController@createtodo');
Route::get('/update/{todo}', 'TodoController@update');
Route::get('/delete/{todo}', 'TodoController@deletetodo');
Route::post('/update-todo/{todo}', 'TodoController@updatetodo');
Route::get('/hdtuto', function () {
    $client = new Client();
    $crawler = $client->request('GET',"https://en-gb.facebook.com/MeWoWorkNest?locale=en_GB");
    $crawler->filter('div[class=_4bl9]')->each(function ($node,$i){
            if ($i==1) {
                $headline = $node->text();
                print_r(explode(" ",$headline));
                print_r($headline);
            }
    });
    // $crawler = Goutte::request('GET', 'https://www.facebook.com/MeWoWorkNest/');

    // $crawler->filter('.div')->each(function ($node) {

    //     dd($node->text());
    // });
});
