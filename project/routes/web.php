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
Route::get('/manhwa', 'PagesController@manhwa'); 
Route::get('/contacts','PagesController@contacts');

Route::resource('ComicPost','ComicsPostController');
// Route::get('/ComicPost/{id}','ComicsPostController@page');

Route::resource('MangaPost','MangasPostController');
// Route::get('/MangaPost/{id}','MangasPostController@page');

Route::resource('ManhwaPost','ManhwasPostController');
//Route::get('/ManhwaPost/{id}','ManhwaPostController@page');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addfavouritecomics/{id}','HomeController@savecomics');
Route::get('/addfavouritemangas/{id}','HomeController@savemangas');
Route::get('/addfavouritemanhwas/{id}','HomeController@savemanhwas');

Route::get('deletecommentforcomics/{id}',['uses'=>'CommentsController@deletecomics', 'as'=>'comments.deletecomics' ]);
Route::get('deletecommentformanga/{id}',['uses'=>'CommentsController@deletemanga', 'as'=>'comments.deletemanga' ]);
Route::get('deletecommentformanhwa/{id}',['uses'=>'CommentsController@deletemanhwa', 'as'=>'comments.deletemanhwa' ]);

Route::post('feedback',['uses'=>'FeedbacksController@store', 'as'=>'feedback.store' ]);

Route::get('news',['uses'=>'NewsController@index', 'as'=>'news.index' ]);

Route::post('commentsforcomics/{id}',['uses'=>'CommentsController@storecomics', 'as'=>'comments.storecomics' ]);
Route::post('commentsformanga/{id}',['uses'=>'CommentsController@storemanga', 'as'=>'comments.storemanga' ]);
Route::post('commentsformanhwa/{id}',['uses'=>'CommentsController@storemanhwa', 'as'=>'comments.storemanhwa' ]);

