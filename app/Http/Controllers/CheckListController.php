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
        // Busca o último checklist com seus itens
        $lastChecklist = Checklist::with('items')
            ->latest()
            ->first();

        // Verifica se o checklist existe
        if (!$lastChecklist) {
            return response()->json(['message' => 'Nenhum checklist encontrado'], 404);
        }

        // Verifica se o status do checklist é 1
        $isChecklistStatusTrue = $lastChecklist->status === 1;

        // Verifica se todos os itens da checklist têm status diferente de "A verificar"
        $areAllItemsStatusNonZero = $lastChecklist->items->every(function ($item) {
            return $item->pivot->status !== 'A verificar';
        });

        // Retorna a resposta com as verificações
        return response()->json([
            // 'CheckList' => $lastChecklist,
            'CheckListStatus' => $isChecklistStatusTrue,
            'CheckListItemStatus' => $areAllItemsStatusNonZero,
        ]);
    }

    public function resumeLastChecklist()
    {
        // Busca o último checklist sem items
        $lastChecklist = CheckList::latest()->first();


        // $lastChecklist = CheckList::with('items')
        //     ->latest()
        //     ->first();

        // Verifica se o checklist existe
        if (!$lastChecklist) {
            return response()->json(['message' => 'Nenhum checklist encontrado'], 404);
        }

        // Retorna a resposta com as verificações
        return response()->json([
            'CheckList' => $lastChecklist,
        ]);
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

    // public function update(Request $request, $id)
    // {
    //     $checklist = CheckList::findOrFail($id);
    //     $checklist->update($validated);

    //     return response()->json($checklist);
    // }

    // public function update(Request $request, $id)
    // {
    //     // Encontrar a checklist pelo ID
    //     $checklist = Checklist::find($id);

    //     // Verificar se a checklist existe
    //     if (!$checklist) {
    //         return response()->json([
    //             'message' => 'Checklist não encontrada.'
    //         ], Response::HTTP_NOT_FOUND);
    //     }

    //     // Atualizar os campos permitidos
    //     $checklist->user_id = $request->input('user_id', $checklist->user_id);
    //     $checklist->carro_id = $request->input('carro_id', $checklist->carro_id);
    //     $checklist->status = $request->input('status', $checklist->status);

    //     // Salvar as alterações no banco de dados
    //     $checklist->save();

    //     // Retornar a checklist atualizada
    //     return response()->json([
    //         'message' => 'Checklist atualizada com sucesso.',
    //         'data' => $checklist
    //     ], 201);
    // }

    public function update(Request $request, $id)
{
    // Encontrar a checklist pelo ID
    $checklist = Checklist::find($id);

    // Verificar se a checklist existe
    if (!$checklist) {
        return response()->json([
            'message' => 'Checklist não encontrada.'
        ], 404);
    }

    // Validar os dados recebidos
    $validatedData = $request->validate([
        'user_id' => 'sometimes|integer|exists:users,id',
        'carro_id' => 'sometimes|integer|exists:carros,id',
        'status' => 'sometimes|boolean',
    ]);

    // Atualizar os campos com os dados validados
    $checklist->update($validatedData);

    // Retornar a checklist atualizada
    return response()->json([
        'message' => 'Checklist atualizada com sucesso.',
        'data' => $checklist
    ], 200);
}

    public function updateItemStatus(Request $request, $checkListId, $itemId)
    {
        // Validação dos dados de entrada
        $validatedData = $request->validate([
            'status' => 'required|in:Bom,Regular,Ruim,A verificar',
        ]);

        // Encontrar a CheckList especificada
        $checkList = CheckList::findOrFail($checkListId);

        // Verificar se o item existe na CheckList
        if (!$checkList->items()->where('items.id', $itemId)->exists()) {
            return response()->json([
                'message' => 'Item não encontrado na CheckList.',
            ], 404);
        }

        // Atualizar o status na tabela pivô
        $checkList->items()->updateExistingPivot($itemId, [
            'status' => $validatedData['status'],
            'updated_at' => now(),
        ]);

        // Retornar uma resposta de sucesso
        return response()->json([
            'message' => 'Status atualizado com sucesso.',
        ], 200);
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
        // Obtém o ID do usuário autenticado
        $userId = Auth::id();

        // Verifica se há um usuário autenticado
        if (!$userId) {
            return response()->json(['message' => 'Usuário não autenticado'], 401);
        }

        // Recupera todos os checklists do usuário autenticado com seus itens
        $checklists = CheckList::where('user_id', $userId)->get();

        // Verifica se o usuário possui checklists
        if ($checklists->isEmpty()) {
            return response()->json(['message' => 'Nenhum checklist encontrado para este usuário'], 404);
        }

        // Retorna os checklists em formato JSON
        return response()->json([
            'data' => $checklists
        ], 200);
    }
}
