<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

<<<<<<< HEAD
// Use CadastroController em vez de UserController
Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');
=======
Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);

Route::get('/servicos', [App\Http\Controllers\ServicosController::class, 'servicos']);

Route::get('/sobrenos', [App\Http\Controllers\SobrenosController::class, 'sobrenos']);

Route::get('/formulario', [App\Http\Controllers\FormularioController::class, 'formulario']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/cadastro', [App\Http\Controllers\CadastroController::class, 'cadastro']);


Route::get('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'showForgotPasswordForm']);
Route::post('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'sendResetLink']);
>>>>>>> fe71a59608c8d921c69eda0abdd1afff92fa1f9c

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Rotas simples para navegação
Route::get('/servicos', function () { return view('servicos'); })->name('servicos');
Route::get('/sobrenos', function () { return view('sobrenos'); })->name('sobrenos');
Route::get('/contato', function () { return view('contato'); })->name('contato');
Route::get('/formulario', function () { return view('formulario'); })->name('formulario');