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
*/

Route::get('/', function () {
    return '...';
    return 'hello world Rabbit project 1 Rabbit project 2';
    return view('welcome');
});

Route::get('/remote', function () {
    return 'remote';
});
