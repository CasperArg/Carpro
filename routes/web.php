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



Route::get('/autos/detail/{id}', 'CarController@mostrardetalle');
Route::get('/autos/delete/{id}', 'CarController@eliminarauto');
Route::get('/autos/{busqueda?}/{que?}', 'CarController@mostraralgo');
Route::get('/crearauto', 'CarController@formularioalta');
Route::get('/altadeauto', 'Carcontroller@altadeauto');
Route::get('/actualizarauto/{id}', 'CarController@actualizarauto');




Route::get('/casas/detail/{id}', 'HouseController@mostrardetalle');
Route::get('/casas/delete/{id}', 'HouseController@eliminarcasa');
Route::get('/casas/{busqueda?}/{que?}', 'HouseController@mostraralgo');

Route::get('/crearcasa', 'HouseController@formularioalta');

Route::get('/altadecasa', 'HouseController@altadecasa');
Route::get('/actualizarcasa/{id}', 'HouseController@actualizarcasa');



Route::resource('/jugadores', 'PlayerController');