<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Http\Requests\StorehomeRequest;
use App\Http\Requests\UpdatehomeRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
        {
            return view ('Home');
        }
}