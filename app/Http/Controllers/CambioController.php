<?php

namespace App\Http\Controllers;

use App\Models\Cambio;
use App\Http\Requests\StoreCambioRequest;
use App\Http\Requests\UpdateCambioRequest;

class CambioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cambio::with('carro')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCambioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cambio $cambio)
    {
        $cambio->load('carro');
        return $cambio;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cambio $cambio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCambioRequest $request, Cambio $cambio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cambio $cambio)
    {
        //
    }
}
