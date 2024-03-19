<?php

namespace App\Http\Controllers;

use App\Models\Embreagem;
use App\Http\Requests\StoreEmbreagemRequest;
use App\Http\Requests\UpdateEmbreagemRequest;

class EmbreagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Embreagem::with('carro')->get();
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
    public function store(StoreEmbreagemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Embreagem $embreagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Embreagem $embreagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmbreagemRequest $request, Embreagem $embreagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Embreagem $embreagem)
    {
        //
    }
}
