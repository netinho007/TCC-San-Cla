<?php

namespace App\Http\Controllers;

use App\Models\avaliacao;
use Illuminate\Http\Request;

class avaliacaoController extends Controller
{
    public function index()
    {
        return response()->json(avaliacao::with('user')->latest()->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'mensagem' => 'required|string|max:1000',
        ]);

        $avaliacao = avaliacao::create($data);

        return response()->json($avaliacao, 201);
    }

    public function destroy($id)
    {
        avaliacao::findOrFail($id)->delete();
        return response()->json(['message' => 'Avaliação excluída com sucesso']);
    }
}

