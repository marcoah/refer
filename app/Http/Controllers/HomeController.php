<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pieza;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('escritorio.principal');
    }

    public function settings(Request $request)
    {
        return view('escritorio.settings');
    }

    public function profile()
    {
        return view('escritorio.profile');
    }

    public function search($search){
        $search = urldecode($search);

        $numero = Pieza::where('NPRO','LIKE','%'.$search.'%');
        $descripcion = Pieza::where('DPRO','LIKE','%'.$search.'%');

        $resultado = Pieza::where('ZDOC', 'LIKE', '%'.$search.'%')
            ->union($numero)
            ->union($descripcion)
            ->paginate(10);

        if (count($resultado) == 0){
            return View('escritorio.busqueda')
            ->with('message', 'No hay resultados que mostrar')
            ->with('search', $search);
        } else {
            return View('escritorio.busqueda')
            ->with('resultados', $resultado)
            ->with('search', $search);
        }
    }
}
