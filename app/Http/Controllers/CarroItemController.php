<?php

namespace App\Http\Controllers;

use App\Models\CarroItem;
use App\Http\Requests\StoreCarroItemRequest;
use App\Http\Requests\UpdateCarroItemRequest;


class CarroItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return CarroItem::all();
        return CarroItem::with('carro')->get();
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
    public function store(StoreCarroItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarroItem $carroItem)
    {
        $carroItem->load('carro');
        return $carroItem;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarroItem $carroItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarroItemRequest $request, CarroItem $carroItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarroItem $carroItem)
    {
        //
    }

    public function buscarPorCarroEItem($carro_id, $item_id)
    {
        // Busca o item do carro com os relacionamentos 'carro' e 'item'
        $carroItem = CarroItem::where('carro_id', $carro_id)
            ->where('item_id', $item_id)
            ->with(['carro', 'item'])
            ->first();

        // Verifica se o item foi encontrado
        if (!$carroItem) {
            return response()->json(['message' => 'Item do carro não encontrado'], 404);
        }

        // Retorna as informações do item do carro
        return response()->json($carroItem);
    }
}
