<?php

use Illuminate\Http\Request;
use App\Bono;
use App\Evento;
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
Route::get('/bonos', function(){
    return response()->json(Bono::all());
});

Route::get('/eventos', function(){
    return response()->json(Evento::all());
})->middleware('cors');

Route::post('/contacto', 'ContactoController@store')->middleware('cors');