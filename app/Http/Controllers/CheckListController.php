<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
use App\Http\Requests\StoreCheckListRequest;
use App\Http\Requests\UpdateCheckListRequest;
use Illuminate\Http\Request;

class CheckListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CheckList::all();
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

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckListRequest $request, CheckList $checkList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckList $checkList)
    {
        //
    }
}
