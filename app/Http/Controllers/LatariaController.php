<?php

namespace App\Http\Controllers;

use App\Models\Lataria;
use App\Http\Requests\StoreLatariaRequest;
use App\Http\Requests\UpdateLatariaRequest;

class LatariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Lataria::with('carro')->get();
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
    public function store(StoreLatariaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lataria $lataria)
    {
        $lataria->load('carro');
        return $lataria;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lataria $lataria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLatariaRequest $request, Lataria $lataria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lataria $lataria)
    {
        //
    }
}
