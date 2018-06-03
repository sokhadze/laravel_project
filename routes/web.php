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


Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('', ['as' => 'index', 'uses' => 'AdminController@index']);
    Route::get('login', ['as' => 'login.index', 'uses' => 'AdminAuthController@loginIndex']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'AdminAuthController@login']);
});
