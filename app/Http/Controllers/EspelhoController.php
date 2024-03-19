<?php

namespace App\Http\Controllers;

use App\Models\Espelho;
use App\Http\Requests\StoreEspelhoRequest;
use App\Http\Requests\UpdateEspelhoRequest;

class EspelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Espelho::with('carro')->get();
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
    public function store(StoreEspelhoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Espelho $espelho)
    {
        $espelho->load('carro');
        return $espelho;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Espelho $espelho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEspelhoRequest $request, Espelho $espelho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Espelho $espelho)
    {
        //
    }
}
