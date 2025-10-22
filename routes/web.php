<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Rotas de CADASTRO
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');

// Rotas DE LOGIN:
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rotas de ESQUECI SENHA
Route::get('/forgot-password', [LoginController::class, 'showForgotPassword'])->name('password.request');
Route::post('/forgot-password', [LoginController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [LoginController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [LoginController::class, 'resetPassword'])->name('password.update');

// Rotas de FORMULÁRIO PET
Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');
Route::post('/formulario', [PetController::class, 'store'])->name('pet.store');

// Rotas de Whats APP
Route::post('/send-whatsapp', [WhatsAppController::class, 'sendMessage'])->name('send.whatsapp');

// Rotas simples para navegação
Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/sobrenos', function () {
    return view('sobrenos');
})->name('sobrenos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');