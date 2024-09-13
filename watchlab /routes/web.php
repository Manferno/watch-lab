<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

// Ruta para el HomeController
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

// Ruta para el DashboardController
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

// Ruta para la página principal
Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');

// Elimina la ruta duplicada para /home que apunta a la vista del dashboard
// Route::get('/home', function () {
//     return view('dashboard');
// });

Auth::routes();

// Elimina las rutas duplicadas o comentadas para el dashboard
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

//Route::get('/login', 'App\Http\Controllers\LoginController@index');
/*Route::get('/login', function () {
    return view('login');
});*/

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/perfil', 'App\Http\Controllers\PerfilController@index');
Route::get('/inventario', 'App\Http\Controllers\InventarioController@index');

Route::resource('/equipos', App\Http\Controllers\EquiposController::class);
Route::resource('/licencias', App\Http\Controllers\LicenciasController::class);