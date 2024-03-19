<?php

namespace App\Http\Controllers;

use App\Models\Freio;
use App\Http\Requests\StoreFreioRequest;
use App\Http\Requests\UpdateFreioRequest;

class FreioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Freio::with('carro')->get();
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
    public function store(StoreFreioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Freio $freio)
    {
        $freio->load('carro');
        return $freio;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Freio $freio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFreioRequest $request, Freio $freio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Freio $freio)
    {
        //
    }
}
