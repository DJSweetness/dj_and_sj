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

Route::get('/', function() {
    return view('index');
});

Route::get('/DJandSJ', [
    'uses' => 'mainController@getIndex',
    'as' => 'index'
]);

Route::get('/artwork', [
    'uses' => 'mainController@getArtwork',
    'as' => 'artwork'
]);

Route::get('/music', [
    'uses' => 'mainController@getMusic',
    'as' => 'music'
]);
