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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehomeRequest $request, home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(home $home)
    {
        //
    }
}
