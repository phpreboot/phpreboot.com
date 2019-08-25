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

Auth::routes(['verify' => true]);

// Routes where user must be login in
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/user/article/new', 'ArticleController@new')->name('article-new')->middleware('verified');
    Route::post('/user/article', 'ArticleController@store')->name('article-store');
    Route::post('/article/{article}/comment', 'CommentController@new')->name('comment-new');
});

Route::get('/article/{article}', 'ArticleController@show')->name('article-show');

Route::get('/adminlte/blank', 'AdminLtecontroller@blank');
