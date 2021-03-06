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

// Specify page to render on visiting the root URL
Route::get('/', function () {
    return view('welcome');
});

// Specify authentication routes
Auth::routes();

// Handles GET requests sending data to the page (default) 
Route::get('/forum', 'HomeController@index');

// Handle POST requests sending data to the page (location form)
Route::post('/forum', 'HomeController@index');

// Handle POST requests for sending data to posts table
Route::post('post/store', 'PostController@store');

// Handle POST requests for a particular post on posts table
Route::post('post/view', 'PostController@show');

// Handle GET requests for a particular post on posts table
Route::get('post/view', 'PostController@show');

Route::get('importExport', 'MaatwebsiteController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteController@importExcel');