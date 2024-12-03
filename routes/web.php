<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\serviciovehiculoController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;


Route::get('/', function () {
    return view('login');
});
Auth::routes();


Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('clientes', ClienteController::class);
Route::resource('vehiculos',  VehiculoController::class);
route::resource('servicios', ServicioController::class);
Route::resource('serviciosVehiculos', serviciovehiculoController::class);
Route::resource('inventarios', InventarioController::class);
