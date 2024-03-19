<?php

namespace App\Http\Controllers;

use App\Models\SistemaEletrico;
use App\Http\Requests\StoreSistemaEletricoRequest;
use App\Http\Requests\UpdateSistemaEletricoRequest;

class SistemaEletricoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SistemaEletrico::with('carro')->get();
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
    public function store(StoreSistemaEletricoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SistemaEletrico $sistemaEletrico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SistemaEletrico $sistemaEletrico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSistemaEletricoRequest $request, SistemaEletrico $sistemaEletrico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SistemaEletrico $sistemaEletrico)
    {
        //
    }
}
