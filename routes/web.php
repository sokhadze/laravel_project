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

Route::get('', ['as' => 'index', 'uses' => 'FrontController@index']);
Route::get('register', ['as' => 'auth.register', 'uses' => 'AuthController@register']);
Route::get('login', ['as' => 'auth.login', 'uses' => 'AuthController@loginIndex']);
Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@logout']);
Route::post('login', ['as' => 'auth.login.store', 'uses' => 'AuthController@login']);
Route::post('register', ['as' => 'auth.register.store', 'uses' => 'AuthController@registerStore']);
Route::get('posts', ['as' => 'posts', 'uses' => 'FrontController@posts']);
Route::get('posts/create', ['as' => 'posts.create', 'uses' => 'FrontController@postCreate']);


Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('', ['as' => 'index', 'uses' => 'AdminController@index']);
    Route::get('login', ['as' => 'login.index', 'uses' => 'AdminAuthController@loginIndex']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'AdminAuthController@logout']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'AdminAuthController@login']);
    Route::get('users', ['as' => 'users', 'uses' => 'UserController@index']);
    Route::get('users/create', ['as' => 'users.create', 'uses' => 'UserController@create']);
    Route::get('users/{user}', ['as' => 'users.edit', 'uses' => 'UserController@edit']);
    Route::put('users/{user}', ['as' => 'users.put', 'uses' => 'UserController@put']);
    Route::delete('users/{user}', ['as' => 'users.destroy', 'uses' => 'UserController@destroy']);
    Route::post('users', ['as' => 'users.store', 'uses' => 'UserController@store']);
});
