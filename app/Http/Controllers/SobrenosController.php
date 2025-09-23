<?php

namespace App\Http\Controllers;

use App\Models\sobrenos;
use App\Http\Requests\StoresobrenosRequest;
use App\Http\Requests\UpdatesobrenosRequest;

class SobrenosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sobrenos()
        {
            return view ('Sobrenos');
        }
}
