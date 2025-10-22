<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    public function store(Request $request)
    {
        // Validação
        $request->validate([
            'nome_pet' => 'required|string|max:255',
            'especie' => 'required|string|max:50',
            'raca' => 'nullable|string|max:100',
            'idade' => 'nullable|integer|min:0',
            'peso' => 'nullable|numeric|min:0',
            'sexo' => 'nullable|in:macho,femea',
            'vacinas_em_dia' => 'nullable|in:sim,nao,nao_sei',
            'vermifugacao_em_dia' => 'nullable|in:sim,nao,nao_sei',
            'castrado' => 'nullable|in:sim,nao',
            'doencas_previas' => 'nullable|string',
            'temperamento' => 'nullable|in:calmo,agitado,medroso,agressivo,amigavel',
            'socializacao' => 'nullable|in:muito_social,social,neutro,agressivo',
            'comportamento_estranho' => 'nullable|string',
            'tipo_alimentacao' => 'nullable|in:racao,comida_caseira,mista,outro',
            'frequencia_alimentacao' => 'nullable|in:1_vez_dia,2_vezes_dia,3_vezes_dia,livre',
            'alergias' => 'nullable|string',
            'nome_tutor' => 'required|string|max:255',
            'telefone_tutor' => 'required|string|max:20',
            'email_tutor' => 'nullable|email',
            'endereco_tutor' => 'nullable|string',
            'motivo_consulta' => 'required|string',
            'urgencia' => 'nullable|in:baixa,media,alta,emergencia',
        ]);

        // Se o usuário estiver logado, associa a ele, senão null
        $userId = Auth::id();

        // Cria o pet
        $pet = Pet::create([
            'user_id' => $userId,
            'nome_pet' => $request->nome_pet,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'idade' => $request->idade,
            'peso' => $request->peso,
            'sexo' => $request->sexo,
            'vacinas_em_dia' => $request->vacinas_em_dia,
            'vermifugacao_em_dia' => $request->vermifugacao_em_dia,
            'castrado' => $request->castrado,
            'doencas_previas' => $request->doencas_previas,
            'temperamento' => $request->temperamento,
            'socializacao' => $request->socializacao,
            'comportamento_estranho' => $request->comportamento_estranho,
            'tipo_alimentacao' => $request->tipo_alimentacao,
            'frequencia_alimentacao' => $request->frequencia_alimentacao,
            'alergias' => $request->alergias,
        ]);

        // Cria a consulta
        Consultation::create([
            'pet_id' => $pet->id,
            'user_id' => $userId,
            'motivo_consulta' => $request->motivo_consulta,
            'urgencia' => $request->urgencia,
            'nome_tutor' => $request->nome_tutor,
            'telefone_tutor' => $request->telefone_tutor,
            'email_tutor' => $request->email_tutor,
            'endereco_tutor' => $request->endereco_tutor,
            'autorizacao_uso' => $request->has('autorizacao_uso'),
        ]);

        return redirect()->route('formulario')->with('success', 'Formulário enviado com sucesso! Entraremos em contato em breve.');
    }
}