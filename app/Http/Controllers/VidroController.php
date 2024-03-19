<?php

namespace App\Http\Controllers;

use App\Models\Vidro;
use App\Http\Requests\StoreVidroRequest;
use App\Http\Requests\UpdateVidroRequest;

class VidroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Vidro::with('carro')->get();
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
    public function store(StoreVidroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vidro $vidro)
    {
        $vidro->load('carro');
        return $vidro;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vidro $vidro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVidroRequest $request, Vidro $vidro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vidro $vidro)
    {
        //
    }
}
