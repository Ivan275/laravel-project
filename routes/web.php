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

Auth::routes();

Route::get('/userProfile', 'HomeController@index');

Route::get('/test', function() {
    $user = App\User::first();
    echo $user->name;
});

Route::post('/create', 'HomeController@store');