<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('black', 'Auth\LoginController@blacklist');
    Route::post('insertar', "Auth\LoginController@insertar");
    Route::put('actualizar', 'Auth\LoginController@actualizar');
    Route::put('eliminar', 'Auth\LoginController@eliminar');
    Route::get('buscar', 'Auth\LoginController@buscar');
});
