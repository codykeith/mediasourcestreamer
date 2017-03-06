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

//All Players

Route::get('/players', 'HomeController@players');

// Music Player Pages

Route::get('/players/music', 'MusicPlayersController@index');
Route::get('/players/music/edit', 'MusicPlayersController@edit');
Route::get('/players/music/launch', 'MusicPlayersController@launch');
Route::get('/players/music/device', 'MusicPlayersController@device');
Route::get('/players/music/contenteditor', 'MusicPlayersController@contenteditor');

// Digital Signage Players

Route::get('/players/digitalsignage', 'DSPlayersController@index');
Route::get('/players/digitalsignage/edit', 'DSPlayersController@edit');
Route::get('/players/digitalsignage/launch', 'DSPlayersController@launch');
Route::get('/players/digitalsignage/device', 'DSPlayersController@device');
Route::get('/players/digitalsignage/contenteditor', 'DSPlayersController@contenteditor');

// Interactive Display Players

Route::get('/players/interactivedisplay', 'IDPlayersController@index');
Route::get('/players/interactivedisplay/edit', 'IDPlayersController@edit');
Route::get('/players/interactivedisplay/launch', 'IDPlayersController@launch');
Route::get('/players/interactivedisplay/device', 'IDPlayersController@device');
Route::get('/players/interactivedisplay/device', 'IDPlayersController@contenteditor');

//Account Pages
Route::get('/account', 'AccountController@index');
Route::get('/account/rates', 'AccountController@rates');
