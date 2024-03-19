<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use App\Http\Requests\StoreRadioRequest;
use App\Http\Requests\UpdateRadioRequest;

class RadioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Radio::with('carro')->get();
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
    public function store(StoreRadioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Radio $radio)
    {
        $radio->load('carro');
        return $radio;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Radio $radio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRadioRequest $request, Radio $radio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Radio $radio)
    {
        //
    }
}
