<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('post', 'Post');
Route::model('user', 'User');

Route::get('/', 'HomeController@index');

Route::resource('post', 'PostController');
// Route::get('/post/{post}', 'PostController@show');

Route::get('/tag/{name}', 'TagController@show');

Route::get('/author/{user}', 'AuthorController@show');