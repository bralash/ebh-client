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

Route::get('/', 'PagesController@index');
Route::get('donor', 'PagesController@donate');
Route::get('blood-drive', 'PagesController@bloodDrive');
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');
Route::get('find-donors', 'PagesController@donors');
Route::post('donors/add', 'PagesController@addDonor');
Route::get('guidelines', 'PagesController@guide');
Route::post('donor/search', 'PagesController@searchDonor');
