<?php

namespace App\Http\Controllers;

use App\DataTables\PiezasDataTable;
use App\Models\Pieza;
use App\Http\Requests\StorePiezaRequest;
use App\Http\Requests\UpdatePiezaRequest;

class PiezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PiezasDataTable $dataTable)
    {
        //return view('piezas.index');

        return $dataTable->render('piezas.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('piezas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePiezaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePiezaRequest $request)
    {
        $request->validate([
            'NPRO'=>'required',
            'DPRO'=>'required'
        ]);

        Pieza::create($request->all());

        return redirect()->route('piezas.index')->with('success','pieza creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function show(Pieza $pieza)
    {
        return view('piezas.show',compact('pieza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pieza $pieza)
    {
        return view('piezas.edit', compact('pieza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePiezaRequest  $request
     * @param  \App\Models\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePiezaRequest $request, Pieza $pieza)
    {
        $request->validate([
            'NPRO'=>'required',
            'DPRO'=>'required'
        ]);

        $pieza->update($request->all());
        return redirect()->route('piezas.index')->with('success','pieza actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pieza $pieza)
    {
        $pieza->delete();
        return redirect()->route('piezas.index')->with('success','pieza eliminado correctamente.');
    }
}
