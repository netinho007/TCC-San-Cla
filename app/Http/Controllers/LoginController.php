<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class LoginController extends Controller
{
    // 👇 ADICIONE ESTE MÉTODO (FALTANDO)
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login realizado com sucesso!');
        }

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

    // ESQUECI A SENHA - MOSTRAR FORMULÁRIO
    public function showForgotPassword()
    {
        return view('forgot-password');
    }

    // ENVIAR LINK DE REDEFINIÇÃO
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Verifica se o email existe
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Este e-mail não está cadastrado em nosso sistema.']);
        }

        // Gera token único
        $token = Str::random(64);

        // Salva/atualiza o token
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => $token,
                'created_at' => now()
            ]
        );

        // Redireciona diretamente para a página de redefinição
        return redirect()->route('password.reset', ['token' => $token])
            ->with('email', $request->email)
            ->with('success', 'Digite sua nova senha abaixo:');
    }

    // MOSTRAR FORMULÁRIO DE NOVA SENHA
    public function showResetForm(Request $request, $token = null)
    {
        return view('reset-password', [
            'token' => $token,
            'email' => $request->email ?? session('email')
        ]);
    }

    // PROCESSAR REDEFINIÇÃO DE SENHA
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'token' => 'required'
        ]);

        // Verifica se o token é válido
        $resetRecord = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$resetRecord) {
            return back()->withErrors(['email' => 'Token inválido ou expirado.']);
        }

        // Verifica se o token expirou (24 horas)
        $tokenAge = now()->diffInHours($resetRecord->created_at);
        if ($tokenAge > 24) {
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
            return back()->withErrors(['email' => 'Token expirado. Solicite um novo.']);
        }

        // Atualiza a senha do usuário
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Remove o token usado
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // 👇 MUDE ESTA LINHA - Redireciona para LOGIN com mensagem de sucesso
        return redirect()->route('login')->with('success', 'Senha redefinida com sucesso! Faça login com sua nova senha.');
    }
}
