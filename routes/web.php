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
Route::get('/','External\PagesController@home')->name('public_index');
Route::get('/contact','External\PagesController@contact')->name('contact');
Route::get('/about','External\PagesController@about')->name('about');
Route::get('/select_room','External\PagesController@select_room')->name('select_room');
Route::get('/hotels','External\PagesController@hotels')->name('hotels');
Route::get('/hotel_payment','External\PagesController@hotel_payment')->name('hotel_payment');
Route::get('/confirmation','External\PagesController@confirmation')->name('confirmation');
Route::get('/flight_search','External\PagesController@flight_search')->name('flight_search');
Route::get('/privacy','External\PagesController@privacy')->name('privacy');

/* Authentication Routes */
Route::get('/signin','AuthenticationController@login_index')->name('new_login');

