<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function	() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	Route::get('profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
	Route::get('settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');

	Route::resource('piezas', App\Http\Controllers\PiezaController::class);

    //Roles
    Route::resource('roles', App\Http\Controllers\RoleController::class);

    //Users
    Route::resource('users', App\Http\Controllers\UserController::class);

});
