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
    return view('home.welcome');
});

Route::get('/loremipsum', 'LoremIpsumController@getLoremIpsum');
Route::post('/loremipsum', 'LoremIpsumController@postLoremIpsum');

Route::get('/randomuser', 'RandomUserController@getUsers');
Route::post('/randomuser', 'RandomUserController@postUsers');

Route::get('/xkcdstylepassword', 'XkcdStylePasswordController@getPassword');
Route::post('/xkcdstylepassword', 'XkcdStylePasswordController@postPassword');
