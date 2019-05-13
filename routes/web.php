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

Route::view('contact','contact');

Route::view('about','about');

Route::get('userslist','UsersController@userslist')->middleware('auth');

Route::get('user/{id}', 'UsersController@getUser')->middleware('auth');

Route::view('dashboard','admin.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
