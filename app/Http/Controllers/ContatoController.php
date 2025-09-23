<?php

namespace App\Http\Controllers;

use App\Models\contato;
use App\Http\Requests\StorecontatoRequest;
use App\Http\Requests\UpdatecontatoRequest;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Contato()
        {
            return view ('Contato');
        }
}