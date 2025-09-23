<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Http\Requests\StoreFormularioRequest;
use App\Http\Requests\UpdateFormularioRequest;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Formulario()
        {
            return view ('Formulario');
        }
}