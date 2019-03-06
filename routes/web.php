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

Route::get('kategory', function() {
	return "hello saya kategory";
});

Route::resource('kategory', 'KategoryController')->except(['destroy']);

Route::get('/kategory/tambah','KategoryController@tambah');

Route::post('/kategory/store','KategoryController@store');

