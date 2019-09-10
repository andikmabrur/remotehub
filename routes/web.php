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

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/events', 'PagesController@getEvents');
Route::get('/contact', 'PagesController@getContact');
Route::get('/services', 'PagesController@getServices');

Route::post('/contact/store', 'MessageController@store');
