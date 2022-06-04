<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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

Auth::routes(['verify' => false, 'register' => false ]);

Route::group(['middleware' => 'auth', 'middleware' => 'verified'], function	() {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get("home/search/{search}", "HomeController@search");
    Route::get('home/searchredirect', function(Request $request){
        $search = $request->input("search");
        if (empty($search)) return redirect()->back();
        $search = urlencode(e($search));
        $route = "home/search/$search";
        return redirect($route);
    });

    Route::resource('piezas', 'PiezaController');
    Route::get('/obtenerdatapiezas', 'PiezaController@ObtenerData')->name('piezas.obtenerdata');

});
