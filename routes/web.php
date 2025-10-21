<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Use CadastroController em vez de UserController
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Rotas simples para navegação
Route::get('/servicos', function () { return view('servicos'); })->name('servicos');
Route::get('/sobrenos', function () { return view('sobrenos'); })->name('sobrenos');
Route::get('/contato', function () { return view('contato'); })->name('contato');
Route::get('/formulario', function () { return view('formulario'); })->name('formulario');