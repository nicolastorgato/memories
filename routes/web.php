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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/memories', 'MemoriesController@index')->middleware('auth');

Route::post('/memories', 'MemoriesController@store');

Route::delete('/memory/{id}', 'MemoriesController@destroy')->middleware('auth');
