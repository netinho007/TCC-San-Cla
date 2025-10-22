<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
   // No WhatsAppController - método alternativo com API
public function sendViaAPI(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'message' => 'required|string|max:1000',
    ]);

    // Configurações da API do WhatsApp Business
    $phoneNumber = preg_replace('/[^0-9]/', '', $validated['phone']);
    $message = $this->formatMessage($validated);

    // Exemplo usando a API do WhatsApp Business
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('WHATSAPP_API_TOKEN'),
        'Content-Type' => 'application/json',
    ])->post('https://graph.facebook.com/v17.0/' . env('WHATSAPP_PHONE_ID') . '/messages', [
        'messaging_product' => 'whatsapp',
        'to' => $phoneNumber,
        'type' => 'text',
        'text' => [
            'body' => $message
        ]
    ]);

    if ($response->successful()) {
        return back()->with('success', 'Mensagem enviada com sucesso!');
    }

    return back()->with('error', 'Erro ao enviar mensagem. Tente novamente.');
}
}
