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

Route::get('layout', function(){
    return view('layout.master');
});

Route::get('dashboard', function(){
    return view('dashboard.index');
});

Route::get('dashboard2', function(){
    return view('dashboard.dashboard');
});

Route::get('kategori', function(){
    return view('category.index');
});

Route::get('table', function(){
    return view('category.index');
});

Route::post('inputdata/store','KategoryController@store');

Route::get('/hapus/destroy/{id}','KategoryController@destroy');

Route::post('/datakategori/update','KategoryController@update');

Route::get('/edit/edit/{id}','KategoryController@edit');

Route::get('query', 'KategoryController@search');

