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

Route::get('/home', 'HomeController@index');
Route::get('/players', 'HomeController@players');

// Music Player Pages
Route::get('/players/music', 'MusicPlayersController@index');
Route::get('/players/edit', 'MusicPlayersController@edit');
Route::get('/players/launch', 'MusicPlayersController@launch');