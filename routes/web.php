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
//Rutas Del Login
Route::get('/', 'LoginController@LoginIndex');
Route::post('/LoginAuth', 'LoginController@LoginAuth');
Route::get('/Logout', 'LoginController@Logout');

//Rutas Del Menu Desarrolladores
Route::get('/Developers', 'DeveloperController@index');

//Rutas Del Inventario
//Route::get('/Inventary', 'InventaryController@index');
//Route::match(['get', 'post'], 'inventary', 'inventaryController@store');
Route::Resource('/Inventary', 'inventaryController');
//Route::Post('/Inventaryadd', 'InventaryController@store');

//Route::get('Inventarydele_te/destroy/{id}', 'InventaryController@destroy');

//Route::get('/Inventary', 'InventaryController@index');
//Rutas De Los Canales
Route::Resource('/Channels', 'ChannelsController');

//Rutas De Prestamos
Route::Resource('/Loans', 'LoanController');

//Rutas De Graficos
Route::get('/Charts', 'ChartsController@index');

//Rutas De La Galeria
Route::get('/Gallery', 'GalleryController@index');
