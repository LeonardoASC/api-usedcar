<?php

namespace App\Http\Controllers;

use App\Models\ArCondicionado;
use App\Http\Requests\StoreArCondicionadoRequest;
use App\Http\Requests\UpdateArCondicionadoRequest;

class ArCondicionadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ArCondicionado::with('carro')->get();
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
    public function store(StoreArCondicionadoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ArCondicionado $arCondicionado)
    {
        $arCondicionado->load('carro');
        return $arCondicionado;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArCondicionado $arCondicionado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArCondicionadoRequest $request, ArCondicionado $arCondicionado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArCondicionado $arCondicionado)
    {
        //
    }
}
