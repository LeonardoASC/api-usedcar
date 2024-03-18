<?php

namespace App\Http\Controllers;

use App\Models\Pneu;
use App\Http\Requests\StorePneuRequest;
use App\Http\Requests\UpdatePneuRequest;

class PneuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pneu::with('carro')->get();
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
    public function store(StorePneuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pneu $pneu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pneu $pneu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePneuRequest $request, Pneu $pneu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pneu $pneu)
    {
        //
    }
}
