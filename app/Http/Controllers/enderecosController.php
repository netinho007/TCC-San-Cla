<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\endereco;
use Illuminate\Http\Request;

class enderecoController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'cep' => 'required|string|max:10',
            'endereco' => 'required|string|max:255',
            'numero' => 'required|string|max:10',
            'complemento' => 'nullable|string|max:255',
            'cidade' => 'required|string|max:100',
            'estado' => 'required|string|max:2',
        ]);

        $endereco = endereco::create($data);

        return response()->json($endereco, 201);
    }

    public function update(Request $request, $id)
    {
        $endereco = endereco::findOrFail($id);

        $data = $request->validate([
            'cep' => 'sometimes|string|max:10',
            'endereco' => 'sometimes|string|max:255',
            'numero' => 'sometimes|string|max:10',
            'complemento' => 'nullable|string|max:255',
            'cidade' => 'sometimes|string|max:100',
            'estado' => 'sometimes|string|max:2',
        ]);

        $endereco->update($data);

        return response()->json($endereco);
    }

    public function destroy($id)
    {
        endereco::findOrFail($id)->delete();
        return response()->json(['message' => 'Endereço excluído com sucesso']);
    }
}

