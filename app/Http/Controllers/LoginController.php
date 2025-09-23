<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
        {
            return view ('login');
        }
}
