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
    return view('home');
});

Route::get('/nous-contactez', 'IndustrieController@nous_contactez');

Route::get('/installationgrossemachine', 'IndustrieController@index');
Route::get('/a-propos', 'IndustrieController@a_propos');
Route::get('/shop', 'IndustrieController@shop');
Route::get('/services', 'IndustrieController@services');
Route::get('/autres-services', 'IndustrieController@autres_services');
Route::get('/installation-usine-de-transformation', 'IndustrieController@usine_transformation');
Route::get('/installation-imprimerie', 'IndustrieController@installation_imprimerie');
Route::get('/reparation-avion', 'IndustrieController@reparation_avion');
Route::get('/reparation-bateaux', 'IndustrieController@reparation_bateaux');

Route::get('/rentcar', 'IndustrieController@rentcar');
Route::get('/rentmoto', 'IndustrieController@rentmoto');
Route::get('/carsale', 'IndustrieController@carsale');
Route::get('/motosale', 'IndustrieController@motosale');

Route::get('/reservation-ticket', 'IndustrieController@reservation_ticket');

