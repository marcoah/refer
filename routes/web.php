<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::get('business', [App\Http\Controllers\HomeController::class, 'business'])->name('business');
    Route::get('settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');

    Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
    Route::resource('clientes', App\Http\Controllers\ClienteController::class);
    Route::resource('piezas', App\Http\Controllers\PiezaController::class);
});
