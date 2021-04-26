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
Route::get('/Inventory', 'inventoryController@index');
Route::post('/Inventory/AddItem', 'inventoryController@AddInventory');
Route::post('/Inventory/UpdAddLoan/{id}', 'inventoryController@joinToLoan_AfterLoan');
Route::post('/Inventory/EditItem/{id}', 'inventoryController@update');

//Rutas De Prestamos
Route::get('/loans', 'LoanController@index');

//Rutas De Los Canales
Route::Resource('/Channel', 'ChannelsController');

//Rutas De Graficos
Route::get('/Charts', 'ChartsController@ChartLoanChannels');

//Rutas De La Galeria
Route::get('/Gallery', 'GalleryController@index');


