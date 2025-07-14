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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Exemplo 1
// Route::resource('players', 'PlayerController');

// Exemplo 2
Route::get('/players', 'PlayerController@index');
Route::get('/players/create', 'PlayerController@create');
Route::post('/players', 'PlayerController@store');
Route::get('/players/{player}', 'PlayerController@show');
Route::get('/players/{player}/edit', 'PlayerController@edit');
Route::put('/players/{player}', 'PlayerController@update');
Route::delete('/players/{player}', 'PlayerController@destroy');

// Exemplo 3
// Route::prefix('players')->group(function(){
// Route::get(''
// , 'PlayerController@index');
// Route::get('create', 'PlayerController@create');
// Route::post(''
// , 'PlayerController@store');
// Route::get('{player}', 'PlayerController@show');
// Route::get('{player}/edit', 'PlayerController@edit');
// Route::put('{player}', 'PlayerController@update');
// Route::delete('{player}', 'PlayerController@destroy');
// });
