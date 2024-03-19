<?php

namespace App\Http\Controllers;

use App\Models\Farol;
use App\Http\Requests\StoreFarolRequest;
use App\Http\Requests\UpdateFarolRequest;

class FarolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Farol::with('carro')->get();
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
    public function store(StoreFarolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Farol $farol)
    {
        $farol->load('carro');
        return $farol;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Farol $farol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFarolRequest $request, Farol $farol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Farol $farol)
    {
        //
    }
}
