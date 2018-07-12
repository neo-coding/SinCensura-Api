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



Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@Inicio')->name('inicio');
    
    Route::get('logout', function(){
        Auth::logout();
        return redirect()->route('login');
    });
    Route::prefix('bonos')->group(function(){
        Route::get('/', 'BonosController@index')->name('bonos');
        Route::get('/add', 'BonosController@create')->name('bonos.create');
        Route::post('/', 'BonosController@add')->name('bonos.add');
        Route::get('/{bono}', 'BonosController@select')->name('bonos.select');
        Route::put('/{bono}', 'BonosController@edit')->name('bonos.edit');
        Route::delete('/{bono}', 'BonosController@delete')->name('bonos.delete');
    });
    Route::prefix('eventos')->group(function(){
        Route::get('/', 'EventosController@index')->name('eventos');
        Route::get('/add', 'EventosController@create')->name('eventos.create');
        Route::post('/', 'EventosController@store')->name('eventos.add');
        Route::get('/{id}', 'EventosController@select')->name('eventos.select');
        Route::put('/{id}', 'EventosController@edit')->name('eventos.edit');
        Route::delete('/{id}', 'EventosController@delete')->name('eventos.delete');
    });
    Route::get('contacto', 'ContactoController@index')->name('contacto');
    Route::prefix('galeria', function(){
        Route::get('/', 'BonosController@index');
    });
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
