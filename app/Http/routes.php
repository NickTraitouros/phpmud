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

Route::resource('rooms', 'RoomController');
Route::get('builder/rooms/show/{x}/{y}/{mapId}',   array('as'=>'getMappedRoom',   'uses'=>'RoomController@getMappedRoom'));
Route::get('builder/rooms/create/{x}/{y}/{mapId}', array('as'=>'createMappedRoom','uses'=>'RoomController@create'));

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('hero/{id}', 'HeroController@show');

Route::get('build/{id}','MapController@showMap');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
