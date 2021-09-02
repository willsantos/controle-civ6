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

Route::get('/matches','MatchesController@index')->name('list_matches');
Route::get('/matches/create','MatchesController@create')->name('form_match_create');;
Route::get('/matches/{id}','MatchesController@show')->name('show_match');
Route::post('/matches/create','MatchesController@store');
route::get('/matches/update/{id}','MatchesController@formUpdate')->name('form_match_update');
Route::patch('/matches/{id}','MatchesController@update')->name('update_match');
Route::delete('/matches/remove/{id}','MatchesController@destroy')->name('match_remove');
