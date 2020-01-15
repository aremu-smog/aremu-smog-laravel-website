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

Route::get('/', 'PagesController@getHome');
Route::get('/about-me', 'PagesController@getAboutMe');
Route::get('/portfolio', 'PagesController@getPortfolio');
Route::get('/hire-me', 'PagesController@getHireMe');
Route::get('/reading-list', 'PagesController@getReadingList');
Route::get('/my-mind', 'PagesController@getMyMind');
Route::post('/hire-me/contact','ContactsController@submit');
