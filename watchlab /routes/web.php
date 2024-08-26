<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


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