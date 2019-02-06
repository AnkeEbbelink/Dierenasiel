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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/', 'PagesController@home');
Route::get('/voorpagina','PagesController@voorpagina');
Route::get('/invoer', 'PagesController@invoer');

Route::get('/cats', 'CatsController@index');
Route::post('/cats', 'CatsController@store');
Route::get('/cats/create', 'CatsController@create');









