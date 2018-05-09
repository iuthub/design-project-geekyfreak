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

Route::get('/', 'PagesController@index'); 
Route::get('/news', 'PagesController@news'); 
Route::get('/comics', 'PagesController@comics'); 
Route::get('/manga', 'PagesController@manga'); 
Route::get('/movies', 'PagesController@movies'); 
Route::get('/contacts','PagesController@contacts');

Route::resource('ComicPost','ComicsPostController');
Route::get('/ComicPost/{id}','ComicsPostController@page');

Route::resource('MangaPost','MangasPostController');
Route::get('/MangaPost/{id}','MangasPostController@page');


Route::resource('ManhwaPost','ManhwasPostController');
Route::get('/ManhwaPost/{id}','ManhwasPostController@page');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
