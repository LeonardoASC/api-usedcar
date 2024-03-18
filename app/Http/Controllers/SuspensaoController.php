<?php

namespace App\Http\Controllers;

use App\Models\Suspensao;
use App\Http\Requests\StoreSuspensaoRequest;
use App\Http\Requests\UpdateSuspensaoRequest;

class SuspensaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Suspensao::with('carro')->get();
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
    public function store(StoreSuspensaoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Suspensao $suspensao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suspensao $suspensao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuspensaoRequest $request, Suspensao $suspensao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suspensao $suspensao)
    {
        //
    }
}
