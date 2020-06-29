<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('responsables','ResponsablesController');
Route::get('eliminaresponsable/{id}', 'ResponsablesController@destroy');
Route::get('editaresponsable/{id}', 'ResponsablesController@edit');
Route::post('actualizaresponsable', 'ResponsablesController@update');

Route::resource('tickets','TicketsController');
Route::get('eliminartickets/{id}', 'TicketsController@destroy');
Route::get('editarTicket/{id}', 'TicketsController@edit');
Route::post('actualizarTicket', 'TicketsController@update');

//Route::get('/', 'ResponsablesController@index');
//Route::get('/update', 'ResponsablesController@update');
//Route::get('/store', 'ResponsablesController@store');
//Route::get('/destroy', 'ResponsablesController@destroy');

