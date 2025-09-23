<?php

namespace App\Http\Controllers;

use App\Models\servicos;
use App\Http\Requests\StoreservicosRequest;
use App\Http\Requests\UpdateservicosRequest;

class ServicosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function servicos()
        {
            return view ('Servicos');
        }
}
