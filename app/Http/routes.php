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

Route::get('users', 'UsersController@getInfos');

Route::post('users', 'UsersController@postInfos');

Route::get('contact','ContactController@getForm');

Route::post('contact','ContactController@postForm');

Route::get('/', function () {
    return view('welcome');
});
