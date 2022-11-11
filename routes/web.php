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
Route::resource('papeles', 'App\Http\Controllers\PapelController');
Route::resource('tipos_impresion', 'App\Http\Controllers\TipoImpresionController');
Route::resource('clientes', 'App\Http\Controllers\ClienteController');
Route::resource('productos', 'App\Http\Controllers\ProductoController');
Route::resource('ordenes', 'App\Http\Controllers\OrdenController');
// Route::get('/', function () {
//     return view('producto/index');
// });
