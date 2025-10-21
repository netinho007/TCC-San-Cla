<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // DEBUG: Verifique se está chegando aqui
        \Log::info('Tentativa de login:', $request->all());

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // DEBUG: Verifique as credenciais
        \Log::info('Credenciais:', $credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            \Log::info('Login bem-sucedido para: ' . $request->email);
            return redirect()->route('home')->with('success', 'Login realizado com sucesso!');
        }

        \Log::warning('Login falhou para: ' . $request->email);
        return back()->withErrors([
            'email' => 'E-mail ou senha incorretos.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->with('success', 'Logout realizado com sucesso!');
    }
}