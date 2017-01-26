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
Route::get('/dashboard', 'HomeController@index');

// Handle POST requests sending data to the page (location form)
Route::post('/dashboard', 'HomeController@index');

// Handle POST requests for sending data to posts table
Route::post('post/store', 'PostController@store');

// Handle GET requests for a particular post on posts table
Route::post('post/view', 'PostController@show');