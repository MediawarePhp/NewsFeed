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

Route::get('/vue', function () {
    return view('index.html');
});


Route::get('favorites/{id}','FavoritesController@index')->name('favorites');
Route::resource('Favorites','FavoritesController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


