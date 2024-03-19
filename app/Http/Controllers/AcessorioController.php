<?php

namespace App\Http\Controllers;

use App\Models\Acessorio;
use App\Http\Requests\StoreAcessorioRequest;
use App\Http\Requests\UpdateAcessorioRequest;

class AcessorioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Acessorio::with('carro')->get();
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
    public function store(StoreAcessorioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Acessorio $acessorio)
    {
        $acessorio->load('carro');
        return $acessorio;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acessorio $acessorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAcessorioRequest $request, Acessorio $acessorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acessorio $acessorio)
    {
        //
    }
}
