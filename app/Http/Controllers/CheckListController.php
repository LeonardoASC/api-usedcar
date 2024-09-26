<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
use App\Models\Item;
use App\Http\Requests\StoreCheckListRequest;
use App\Http\Requests\UpdateCheckListRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CheckList::all();
    }
    public function getLastChecklist()
    {
        $lastChecklist = Checklist::latest()->first();
        // $lastChecklist = Checklist::latest()->first()->makeHidden(['id', 'user_id', 'carro_id', 'created_at', 'updated_at']);
        return response()->json($lastChecklist);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados de entrada
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'carro_id' => 'required|exists:carros,id',
            'status' => 'boolean',
        ]);

        // Criação da CheckList
        $checkList = CheckList::create([
            'user_id' => $validatedData['user_id'],
            'carro_id' => $validatedData['carro_id'],
            'status' => $validatedData['status'] ?? false,
        ]);

        // Obter todos os IDs dos itens atuais
        $allItemIds = Item::pluck('id')->toArray();

        // Preparar dados para sincronização, incluindo 'status' padrão
        $syncData = [];
        foreach ($allItemIds as $itemId) {
            $syncData[$itemId] = [
                'status' => 'A verificar', // Ou outro valor padrão
            ];
        }
        // Sincronizar os itens com a CheckList, preenchendo timestamps e status
        $checkList->items()->sync($syncData);

        // Recarregar o modelo para incluir os itens associados
        $checkList->load('items');

        // Retorno da resposta
        return response()->json([
            'message' => 'CheckList criada com sucesso.',
            'data' => $checkList,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Carrega o checklist com os itens relacionados e os dados da tabela pivô
        $checkList = CheckList::with(['items' => function($query) {
            $query->select('items.id', 'items.nome');
        }])->findOrFail($id);

        // Retorna a resposta JSON
        return response()->json([
            'data' => $checkList
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CheckList $checkList)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'acessorio' => 'sometimes|in:Bom,Regular,Ruim',
            'arcondicionado' => 'sometimes|in:Bom,Regular,Ruim',
            'assento' => 'sometimes|in:Bom,Regular,Ruim',
            'cambio' => 'sometimes|in:Bom,Regular,Ruim',
            'documento' => 'sometimes|in:Bom,Regular,Ruim',
            'embreagem' => 'sometimes|in:Bom,Regular,Ruim',
            'espelho' => 'sometimes|in:Bom,Regular,Ruim',
            'farol' => 'sometimes|in:Bom,Regular,Ruim',
            'freio' => 'sometimes|in:Bom,Regular,Ruim',
            'lataria' => 'sometimes|in:Bom,Regular,Ruim',
            'motor' => 'sometimes|in:Bom,Regular,Ruim',
            'pedal' => 'sometimes|in:Bom,Regular,Ruim',
            'pneu' => 'sometimes|in:Bom,Regular,Ruim',
            'radio' => 'sometimes|in:Bom,Regular,Ruim',
            'sistema_eletrico' => 'sometimes|in:Bom,Regular,Ruim',
            'suspensao' => 'sometimes|in:Bom,Regular,Ruim',
            'vidro' => 'sometimes|in:Bom,Regular,Ruim',
        ]);


        $checklist = CheckList::findOrFail($id);
        $checklist->update($validated);

        return response()->json($checklist);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckList $checkList)
    {
        //
    }

    // public function getUserChecklists()
    // {
    //     $user = Auth::user();
    //     if (!$user) {
    //         return response()->json(['error' => 'User not authenticated'], 401);
    //     }

    //     $checklists = $user->checklists;
    //     return response()->json($checklists);
    // }
    public function getUserChecklists()
    {
        $userId = Auth::id();
        $checklists = CheckList::with('carro')->where('user_id', $userId)->get();
        return response()->json($checklists);
    }
}
