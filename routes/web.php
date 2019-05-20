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

Route::get('gameslist','GamesController@gamesListPublic')->middleware('auth');

Route::get('game/{id}','GamesController@getGame')->middleware('auth');

Route::post('game/{id}','GamesController@addComment')->middleware('auth');

Route::post('game/{idgame}/buy/{iduser}','UsersController@buyGame')->middleware('auth');

Route::get('dashboard','StatisticsController@getStats')->middleware('auth');

Route::get('dashboard/users','UsersController@userslistAdmin')->middleware('auth');

Route::delete('dashboard/users/{id}','UsersController@destroy')->middleware('auth');

Route::view('dashboard/games','admin_dash.games')->middleware('auth');

Route::get('dashboard/games','GamesController@gamesList')->middleware('auth');

Route::view('dashboard/addgame','admin_dash.addgame')->middleware('auth');

Route::post('dashboard/addgame','GamesController@addGame')->middleware('auth');

Route::get('dashboard/adddlc','GamesController@gamesListToDlcs')->middleware('auth');

Route::post('dashboard/adddlc','DlcsController@adddlc')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


