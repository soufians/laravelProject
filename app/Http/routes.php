<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/', function () {
//    return '<h1>Heloo laravel</h1>';
//});



// get user by spicific id
// localhost/lsapp/public/users/22
// not connectied in users model could be anything
Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
});


// inter 2 paramter;
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'This is user '.$id.' '.$name;
});

//localhost/lsapp/public/about ==> localhost/lsapp/resources/pages/about.blade.php
    Route::get('/about', function () {
    return view('pages.about');
});
*/
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('posts','PostsController');
Route::auth('/');

Route::get('/dashboard', 'DashboardController@index');
