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

Route::resource('cisternas', CisternaController::class);
Route::resource('entidades', EntidadeController::class);
Route::resource('tipo_construcao', TipoConstrucaoController::class);
Route::resource('tipo_material', TipoMaterialController::class);
