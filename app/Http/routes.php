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
    return view('welcome');
});

Route::post('inject', 'InjectController@inject');

Route::get('{table}', 'RestController@index');
Route::post('{table}', 'RestController@store');
Route::get('{table}/{id}', 'RestController@show');
Route::patch('{table}/{id}', 'RestController@update');
Route::put('{table}/{id}', 'RestController@update');
Route::delete('{table}/{id}', 'RestController@destroy');
