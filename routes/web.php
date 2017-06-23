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


Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/create', 'NewsController@create')->name('news.create');
Route::post('/news/store', 'NewsController@store')->name('news.store');
Route::get('/news/{news}/show', 'NewsController@show')->name('news.show');
Route::get('/news/{news}/edit', 'NewsController@edit')->name('news.edit');
Route::put('/news/{news}/update', 'NewsController@update')->name('news.update');

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/{slug}', 'HomeController@show')->name('home.news');