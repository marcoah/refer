<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pieza;

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
        return view('home');
    }

    public function search($search){
        $search = urldecode($search);

        $razonsocial = Pieza::where('cliente_razon_social','LIKE','%'.$search.'%');
        $correo1 = Pieza::where('cliente_email1','LIKE','%'.$search.'%');

        $resultado = Pieza::where('cliente_email2', 'LIKE', '%'.$search.'%')
            ->union($razonsocial)
            ->union($correo1)
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
