<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// reiniciar el estado de los servicio
Route::post('/reset', 'ResetController@reset');
// obtener el balance de las cuentas
Route::get('/balance', 'BalanceController@show');
//
Route::post('/event', 'EventController@store');