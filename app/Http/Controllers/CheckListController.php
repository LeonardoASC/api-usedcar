<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
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
        return response()->json($lastChecklist);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckListRequest $request)
    {
        $checklist = Checklist::create($request->validated());

        return response()->json([
            "success" => true,
            'message' => 'Checklist created successfully!',
            'checklist' => $checklist
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CheckList $checklist)
    {
        if ($checklist) {
            return response()->json($checklist);
        } else {
            return response()->json(['error' => 'Registro não encontrado']);
        }
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
