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

Route::get('/', function () {
    return view('welcome');
});


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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/', function(){
    	return view('welcome');
    });

    /*Route::get('/projet', function(){
        return View::make('projets.create');
    });*/

    Route::resource('/post', 'PostController');

    Route::resource('/project', 'ProjectController');

    Route::resource('/profile', 'ProfileController');

    Route::get('/admin', function(){
        return 'admin';
    })->middleware ('isadmin');



});
