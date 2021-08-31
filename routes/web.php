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
Route::post('/matches/create','MatchesController@store');
Route::delete('/matches/remove/{id}','MatchesController@destroy')->name('match_remove');
