<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\endereco;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function store(Request $request)
    {
        // Validação
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:users,cpf',
            'dataNascimento' => 'required|date',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|min:6|confirmed',
            'cep' => 'required|string|max:9',
            'endereco' => 'required|string|max:255',
            'numero' => 'required|string|max:10',
            'complemento' => 'nullable|string|max:255',
            'bairro' => 'required|string|max:100',
            'cidade' => 'required|string|max:100',
            'estado' => 'required|string|max:2',
        ]);

        // Criação do usuário
        $user = user::create([
            'nome' => $validated['nome'],
            'cpf' => $validated['cpf'],
            'data_nascimento' => $validated['dataNascimento'],
            'telefone' => $validated['telefone'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['senha']),
        ]);

        // Criação do endereço associado
        $endereco = new endereco([
            'cep' => $validated['cep'],
            'endereco' => $validated['endereco'],
            'numero' => $validated['numero'],
            'complemento' => $validated['complemento'] ?? null,
            'bairro' => $validated['bairro'],
            'cidade' => $validated['cidade'],
            'estado' => $validated['estado'],
        ]);

        $user->endereco()->save($endereco);

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
