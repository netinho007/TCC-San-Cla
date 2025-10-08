<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    /**
     * Mostra o formulário de recuperação de senha
     */
    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }

    /**
     * Envia o link de recuperação de senha
     */
    public function sendResetLink(Request $request)
    {
        // Validação do email
        $request->validate([
            'email' => 'required|email|max:255'
        ], [
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'Digite um email válido.',
            'email.max' => 'O email não pode ter mais de 255 caracteres.'
        ]);

        $email = $request->input('email');

        // Verificar se o email existe no banco de dados
        $user = DB::table('users')->where('email', $email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email não encontrado em nossa base de dados.']);
        }

        // Gerar token de recuperação
        $token = Str::random(64);
        $expiresAt = Carbon::now()->addHours(24);

        // Salvar token no banco de dados
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $email],
            [
                'token' => $token,
                'created_at' => Carbon::now(),
                'expires_at' => $expiresAt
            ]
        );

        // Enviar email (simulação - em produção, configurar SMTP)
        try {
            // Aqui você pode implementar o envio real de email
            // Mail::to($email)->send(new ResetPasswordMail($token));
            
            // Por enquanto, vamos simular o envio
            \Log::info("Token de recuperação gerado para {$email}: {$token}");
            
            return back()->with('success', 'Instruções de recuperação enviadas para seu email!');
            
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Erro ao enviar email. Tente novamente mais tarde.']);
        }
    }

    /**
     * Mostra o formulário de redefinição de senha
     */
    public function showResetForm($token)
    {
        $resetToken = DB::table('password_reset_tokens')
            ->where('token', $token)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if (!$resetToken) {
            return redirect('/forgot-password')->withErrors(['token' => 'Token inválido ou expirado.']);
        }

        return view('reset-password', ['token' => $token]);
    }

    /**
     * Processa a redefinição de senha
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ], [
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.',
            'password.confirmed' => 'As senhas não coincidem.',
            'password_confirmation.required' => 'Confirmação de senha é obrigatória.'
        ]);

        $token = $request->input('token');
        $password = $request->input('password');

        // Verificar se o token é válido
        $resetToken = DB::table('password_reset_tokens')
            ->where('token', $token)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if (!$resetToken) {
            return back()->withErrors(['token' => 'Token inválido ou expirado.']);
        }

        // Atualizar senha do usuário
        DB::table('users')
            ->where('email', $resetToken->email)
            ->update([
                'password' => bcrypt($password),
                'updated_at' => Carbon::now()
            ]);

        // Remover token usado
        DB::table('password_reset_tokens')
            ->where('token', $token)
            ->delete();

        return redirect('/login')->with('success', 'Senha redefinida com sucesso! Faça login com sua nova senha.');
    }
}
