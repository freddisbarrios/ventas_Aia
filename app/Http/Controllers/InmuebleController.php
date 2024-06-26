<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inmuebles= inmueble::all();
        return view('inmuebles.proyectos',compact('inmuebles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inmuebles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ////dd($request->all());
        Inmueble::create($request->all());
        return redirect()->route('inmuebles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inmueble $inmueble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inmueble $inmueble)
    {
        return view('inmuebles.edit', compact('inmueble'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inmueble $inmueble)
    {
        $inmueble->update($request->all());
        return redirect()->route('inmuebles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inmueble $inmueble)
    {
        $inmueble->delete();
        return redirect()->route('inmuebles.index');
    }
}
