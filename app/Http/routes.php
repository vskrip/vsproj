<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('home');
    })->middleware('guest');

    Route::get('/categories', function () {
        return view('categories');
    })->middleware('guest');

    Route::get('/projects', function () {
        return view('projects');
    })->middleware('guest');

    Route::get('/contact', function () {
        return view('contact');
    })->middleware('guest');

    Route::get('/about', function () {
        return view('about');
    })->middleware('guest');


    // Route::get('/tasks', 'TaskController@index');
    // Route::post('/task', 'TaskController@store');
    // Route::delete('/task/{task}', 'TaskController@destroy');

    // Route::auth();

});
