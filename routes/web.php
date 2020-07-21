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

Route::get('/', function () {
    return view('index');
});

Route::get('/ES', function () {
    return view('index');
});

Route::get('/EN', function () {
    return view('indexEN');
});

Route::get('/{vista}', 'ViewController@vistas');

Route::get('/EN/{vista}', 'ViewENController@vistasEN');

Route::post('/contacto/enviar', 'ContactoController@enviar');
