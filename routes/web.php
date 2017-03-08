<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/gallery', 'PagesController@getGallery');
Route::get('/services', 'PagesController@getServices');
Route::get('/', 'PagesController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index');
