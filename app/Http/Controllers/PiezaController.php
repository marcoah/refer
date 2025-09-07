<?php

namespace App\Http\Controllers;

use App\Models\Pieza;
use Illuminate\Http\Request;

class PiezaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $piezas = Pieza::all();
        return view('piezas.index', compact('piezas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('piezas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NPRO' => 'required',
            'DPRO' => 'required'
        ]);

        Pieza::create($request->all());

        return redirect()->route('piezas.index')->with('success', 'pieza creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pieza $pieza)
    {
        return view('piezas.show', compact('pieza'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pieza $pieza)
    {
        //
        return view('piezas.edit', compact('pieza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pieza $pieza)
    {
        $request->validate([
            'NPRO' => 'required',
            'DPRO' => 'required'
        ]);

        $pieza->update($request->all());
        return redirect()->route('piezas.index')->with('success', 'pieza actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pieza $pieza)
    {
        $pieza->delete();
        return redirect()->route('piezas.index')->with('success', 'pieza eliminado correctamente.');
    }
}
