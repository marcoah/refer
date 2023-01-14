<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PiezaController;

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

Auth::routes();



Route::group(['middleware' => 'auth', 'middleware' => 'verified'], function	() {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/settings', [HomeController::class, 'settings'])->name('settings');
    Route::post('profile/photo', [HomeController::class, 'updatePhoto']);

    Route::get('home/search/{search}', [HomeController::class, 'search']);
    Route::get('home/searchredirect', function(Request $request){
        $search = $request->input("search");
        if (empty($search)) return redirect()->back();
        $search = urlencode(e($search));
        $route = "home/search/$search";
        return redirect($route);
    });

    Route::resource('piezas', PiezaController::class);
    Route::get('/obtenerdatapiezas', [PiezaController::class, 'ObtenerData'])->name('piezas.obtenerdata');

});
