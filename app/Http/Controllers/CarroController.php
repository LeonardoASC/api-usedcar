<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Http\Requests\StoreCarroRequest;
use App\Http\Requests\UpdateCarroRequest;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostrar todos os carros
        return Carro::all();
    }

    /**
     * Display a listing of the resource.
     */
    public function indexFuel()
    {
        //mostrar carros ordenados pelo menor consumo
        return Carro::orderBy('km_litro', 'asc')->get();
    }

    /**
     * Display a listing of the resource.
     */
    public function indexFipe()
    {
        //mostrar carros ordenados pelo menor preço
        return Carro::orderBy('tabela_fipe', 'asc')->get();
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
    public function store(StoreCarroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Carro $carro)
    {
        $carro->load(
        'acessorio',
        'arcondicionado',
        'assento',
        'espelho',
        'farol',
        'lataria',
        'motor',
        'pneu',
        'radio',
        'documento',
        'freio',
        'suspensao',
        'embreagem',
        'pedal',
        'cambio',
        'vidro',
        'sistema_eletrico'
    );
        return $carro;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarroRequest $request, Carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carro $carro)
    {
        //
    }
}
