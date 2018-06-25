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


/* Public Routes */
Route::get('/','External\PagesController@home')->name('public_index');
Route::get('/contact','External\PagesController@contact')->name('contact');
Route::get('/about','External\PagesController@about')->name('about');
Route::get('/select_room','External\PagesController@select_room')->name('select_room');
Route::get('/hotels','External\PagesController@hotels')->name('hotels');
Route::get('/hotel_payment','External\PagesController@hotel_payment')->name('hotel_payment');
Route::get('/confirmation','External\PagesController@confirmation')->name('confirmation');

Route::get('/privacy','External\PagesController@privacy')->name('privacy');
Route::get('/flight_search','External\GuzzleController@flight_search')->name('flight_search');


Route::get('/dashboard','Dashboard\DashboardController@dashboard')->name('dashboard');

Route::get('/mybooking','Dashboard\DashboardController@mybooking')->name('mybooking');
Route::get('/setting','Dashboard\DashboardController@setting')->name('setting');
Route::post('update_user_info/{id}', 'Dashboard\DashboardController@update_user_info')->name('update_user_info');
Route::post('password_update/{id}', 'Dashboard\DashboardController@update_password')->name('update_password');
/* Authentication Routes */
Route::group(['middleware' => 'guest'], function () {
	Route::get('/signin', 'AuthenticationController@login_index')->name('signin');
	//register
	Route::post('/register', 'AuthenticationController@register_post')->name('register_post');
	//Login Post
	Route::post('/login', 'AuthenticationController@login_post')->name('login_post');
});
	Route::get('/logout_user', 'AuthenticationController@logout_user')->name('logout_user');