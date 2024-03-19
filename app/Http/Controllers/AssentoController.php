<?php

namespace App\Http\Controllers;

use App\Models\Assento;
use App\Http\Requests\StoreAssentoRequest;
use App\Http\Requests\UpdateAssentoRequest;

class AssentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Assento::with('carro')->get();
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
    public function store(StoreAssentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Assento $assento)
    {
        $assento->load('carro');
        return $assento;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assento $assento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssentoRequest $request, Assento $assento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assento $assento)
    {
        //
    }
}
