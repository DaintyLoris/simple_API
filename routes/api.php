<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria', 'App\Http\Controllers\categoriaController@getCategoria');

Route::get('categoria/{id}', 'App\Http\Controllers\categoriaController@getCategoriaIndex');

Route::post('agregarCategoria', 'App\Http\Controllers\categoriaController@insertarCategoria');

Route::put('actualizarCategoria/{id}', 'App\Http\Controllers\categoriaController@actualizarCategoria');

Route::delete('eliminarCategoria/{id}', 'App\Http\Controllers\categoriaController@eliminarCategoria');