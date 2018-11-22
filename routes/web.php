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
    return view('welcome');
});

Route::get('login', 'Auth_oath\LoginController@index');


Route::get('register', 'Auth_oath\RegisterController@index');
Route::post('register_process', 'Auth_oath\RegisterController@register_process');



