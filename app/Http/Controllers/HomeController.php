<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        return view('escritorio.profile', compact('user'));
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
