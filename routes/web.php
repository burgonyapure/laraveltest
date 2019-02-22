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

Route::get('/','PagesController@getHome');

Route::get('/about','PagesController@getAbout');

Route::get('/contact','PagesController@getContact');

Route::post('/contact/submit','MessagesController@submit');

Route::get('/messages','MessagesController@getMessages');

Route::get('/admin','AdminController@index');

Route::get('/pacman','PagesController@getPacman');

Route::get('/2048','PagesController@get2048');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('newemailreq', function () {
    // Only verified users may enter...
})->middleware('verified');
