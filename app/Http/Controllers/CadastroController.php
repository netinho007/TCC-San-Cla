<?php

namespace App\Http\Controllers;

use App\Models\cadastro;
use App\Http\Requests\StorecadastroRequest;
use App\Http\Requests\UpdatecadastroRequest;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Cadastro()
        {
            return view ('cadastro');
        }
}
