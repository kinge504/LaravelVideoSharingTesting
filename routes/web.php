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

Route::get('/home', 'PagesController@index');
Route::get('/browse', 'PagesController@browse');
Route::get('/upload', 'PagesController@upload');
Route::get('/about', 'PagesController@about');

Route::resource('videos', 'VideosController');
Auth::routes();



/* 
Route::get('/', function () {
    return view('welcome');
}); */
