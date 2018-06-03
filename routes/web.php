<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('register', ['as' => 'auth.register', 'uses' => 'AuthController@register']);
Route::post('register', ['as' => 'auth.register.store', 'uses' => 'AuthController@registerStore']);