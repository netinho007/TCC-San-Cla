<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);

Route::get('/serviços', [App\Http\Controllers\ServicosController::class, 'servicos']);

Route::get('/sobrenos', [App\Http\Controllers\SobrenosController::class, 'sobrenos']);

Route::get('/formulario', [App\Http\Controllers\FormularioController::class, 'formulario']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/cadastro', [App\Http\Controllers\CadastroController::class, 'cadastro']);


