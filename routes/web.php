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

Route::view('/', 'home-full');
Route::view('stay-and-explore', 'hotel');
Route::view('faq', 'faq');
Route::view('terms', 'terms');
Route::post('subscribe','SubscriptionController@subscribe')->name('subscribe');
// Route::get('get-members','SubscriptionController@getMembers')->name('get-members');

// Meet-up routes
Route::get('meetup/{city}', 'MeetupController@show');