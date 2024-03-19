<?php

namespace App\Http\Controllers;

use App\Models\Pedal;
use App\Http\Requests\StorePedalRequest;
use App\Http\Requests\UpdatePedalRequest;

class PedalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pedal::with('carro')->get();
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
    public function store(StorePedalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedal $pedal)
    {
        $pedal->load('carro');
        return $pedal;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedal $pedal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePedalRequest $request, Pedal $pedal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedal $pedal)
    {
        //
    }
}
