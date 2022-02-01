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

Route::get('/', 'App\Http\Controllers\AppController@headline');

//Book Routes
Route::get('/book', 'App\Http\Controllers\BookController@showcase');
Route::get('/book/manage', 'App\Http\Controllers\BookController@showAllBook');
Route::get('/book/create', 'App\Http\Controllers\BookController@bikin'); /* Tambah Data */
Route::post('/book/create', 'App\Http\Controllers\BookController@simpan');
Route::get('/book/{id}', 'App\Http\Controllers\BookController@edit');
Route::put('/book/{id}', 'App\Http\Controllers\BookController@update');
Route::delete('/book/{id}', 'App\Http\Controllers\BookController@hapus');
