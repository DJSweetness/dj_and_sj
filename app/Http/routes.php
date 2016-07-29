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

Route::get('/', [
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


Route::get('/login', [
    'uses' => 'adminController@getLogin',
    'as' => 'login'
]);

Route::post('/index', [
    'uses' => 'adminController@postLogin',
    'as' => 'admin.login'
]);

Route::get('/index', [
    'uses' => 'adminController@getLogout',
    'as' => 'logout'
]);

/* Authentication needed */
Route::group([
       'prefix' => 'admin',
       'middleware' => 'auth'
    ], function() {
        
    Route::get('/index', [
        'uses' => 'adminController@getIndex',
        'as' => 'admin.index'
    ]);
});