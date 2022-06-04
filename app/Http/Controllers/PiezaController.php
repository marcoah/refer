<?php

namespace App\Http\Controllers;

use App\Pieza;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class PiezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('piezas.index');
    }

    public function ObtenerData()
    {
        $piezas = Pieza::select(['*']);

        return Datatables::of($piezas)
            ->addColumn('action', function ($pieza) {
                return '<a class="btn btn-primary btn-sm" href="'.route('piezas.edit',$pieza->id).'" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
                <a class="btn btn-primary btn-sm" href="'.route('piezas.show',$pieza->id).'" data-toggle="tooltip" data-placement="top" title="Mostrar"><i class="fas fa-eye"></i></a>';
            })
            ->editColumn('id', '{{$id}}')
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function show(Pieza $pieza)
    {
        return view('piezas.show',compact('pieza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pieza $pieza)
    {
        return view('piezas.edit', compact('pieza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pieza $pieza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pieza $pieza)
    {
        //
    }
}
