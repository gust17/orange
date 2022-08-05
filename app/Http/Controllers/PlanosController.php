<?php

namespace App\Http\Controllers;

use App\Models\Planos;
use Illuminate\Http\Request;

class PlanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nome_pagina = 'Planos';
        $planos = Planos::all();

        return view('admin.planos.index',compact('planos','nome_pagina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nome_pagina = "Formulario Planos";
        return view('admin.planos.create',compact('nome_pagina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planos  $planos
     * @return \Illuminate\Http\Response
     */
    public function show(Planos $planos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planos  $planos
     * @return \Illuminate\Http\Response
     */
    public function edit(Planos $planos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planos  $planos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planos $planos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planos  $planos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planos $planos)
    {
        //
    }
}
