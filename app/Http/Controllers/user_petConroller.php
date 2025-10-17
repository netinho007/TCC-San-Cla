<?php

namespace App\Http\Controllers;

use App\Models\user_pet;
use Illuminate\Http\Request;

class user_petController extends Controller
{
    public function index()
    {
        return response()->json(user_pet::with('user')->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:50',
            'raca' => 'nullable|string|max:100',
            'idade' => 'nullable|integer',
            'peso' => 'nullable|numeric',
            'sexo' => 'required|in:Macho,Fêmea',
            'vacinas_em_dia' => 'boolean',
            'vermifugo_em_dia' => 'boolean',
            'castrado' => 'boolean',
            'doencas_previas' => 'nullable|string',
            'temperamento' => 'nullable|string',
            'comportamento_outros_animais' => 'nullable|string',
            'comportamento_estranho' => 'nullable|string',
            'tipo_alimentacao' => 'nullable|string',
            'frequencia_alimentacao' => 'nullable|string',
            'alergias_alimentares' => 'nullable|string',
            'motivo_consulta' => 'required|string',
            'nivel_urgencia' => 'required|in:Baixo,Médio,Alto',
        ]);

        $pet = user_pet::create($data);

        return response()->json($pet, 201);
    }

    public function show($id)
    {
        $pet = user_pet::with('user')->findOrFail($id);
        return response()->json($pet);
    }

    public function update(Request $request, $id)
    {
        $pet = user_pet::findOrFail($id);

        $data = $request->validate([
            'nome' => 'sometimes|string|max:255',
            'especie' => 'sometimes|string|max:50',
            'raca' => 'nullable|string|max:100',
            'idade' => 'nullable|integer',
            'peso' => 'nullable|numeric',
            'vacinas_em_dia' => 'boolean',
            'vermifugo_em_dia' => 'boolean',
            'castrado' => 'boolean',
            'motivo_consulta' => 'sometimes|string',
            'nivel_urgencia' => 'sometimes|in:Baixo,Médio,Alto',
        ]);

        $pet->update($data);

        return response()->json($pet);
    }

    public function destroy($id)
    {
        user_pet::findOrFail($id)->delete();
        return response()->json(['message' => 'Pet removido com sucesso']);
    }
}
