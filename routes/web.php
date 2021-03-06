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
Route::get('', function() {
   return view('default');
});

Route::get('/layouts', function() {
   return view('default');
});

Route::resource('posts', 'PostController');

Route::get('posts/update/{post?}', 'PostController@update');

Route::get('posts/show/{post?}', 'PostController@show');
