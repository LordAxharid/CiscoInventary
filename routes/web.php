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

Route::get('/', 'studentsController@index');

Route::get('/inventary', 'inventaryController@index');
Route::get('/channels', 'ChannelsController@index');
Route::get('/loans', 'LoansController@index');
Route::get('/charts', 'ChartsController@index');
Route::get('/gallery', 'GalleryController@indx');

