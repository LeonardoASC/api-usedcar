<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    //metodo para listar todos os comentarios
    public function index($carro_id)
    {
        $comentarios = Comentario::where('carro_id', $carro_id)->with('user')->get();
        return response()->json($comentarios);
    }

    //metodo para fazer um comentario
    public function store(Request $request)
    {
        $comentario = new Comentario();
        $comentario->user_id = $request->user_id;
        $comentario->carro_id = $request->carro_id;
        $comentario->comentario = $request->comentario;
        $comentario->save();
        return response()->json($comentario);
    }
    //metodo para atualizar um comentario
    public function update(Request $request, $id)
    {
        $comentario = Comentario::find($id);
        // $comentario->user_id = $request->user_id;
        // $comentario->carro_id = $request->carro_id;
        $comentario->comentario = $request->comentario;
        $comentario->save();
        return response()->json($comentario);
    }
    //metodo para deletar um comentario
    public function destroy($id)
    {
        $comentario = Comentario::find($id);
        $comentario->delete();
        return response()->json(['message' => 'comentario deletado']);
    }
}
