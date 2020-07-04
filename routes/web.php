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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//    return view('adminlte.master');
// });

Route::get('/', function(){
   return view('welcome');
});

// Latihan

Route::get('/items', 'ItemController@index');
Route::get('/items/create', 'ItemController@create');
Route::post('/items', 'ItemController@store');

// Ask

Route::get('/pertanyaan', 'Larahub\PertanyaanController@index');
Route::get('/pertanyaan/create', 'Larahub\PertanyaanController@create');
Route::post('/pertanyaan', 'Larahub\PertanyaanController@store');
Route::get('/pertanyaan/{id}', 'Larahub\PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit', 'Larahub\PertanyaanController@edit');
Route::put('/pertanyaan/{id}', 'Larahub\PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'Larahub\PertanyaanController@destroy');

// Answer

Route::get('/jawaban/{pertanyaan_id}/create', 'Larahub\JawabanController@create');
Route::post('/jawaban/{pertanyaan_id}', 'Larahub\JawabanController@store');