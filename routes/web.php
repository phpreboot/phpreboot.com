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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routes where user must be login in
Route::get('/user/article/new', 'ArticleController@new')->name('article-new');
Route::post('/user/article', 'ArticleController@store')->name('article-store');
Route::get('/article/{article}', 'ArticleController@show')->name('article-show');

Route::get('/adminlte/blank', 'AdminLtecontroller@blank');
