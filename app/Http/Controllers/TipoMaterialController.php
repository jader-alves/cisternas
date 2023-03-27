<?php

namespace App\Http\Controllers;

use App\TipoMaterial;
use Illuminate\Http\Request;

class TipoMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_materiais = TipoMaterial::all();
        return view('tipo_material.index', compact('tipo_materiais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_material = new TipoMaterial();
        return view('tipo_material.create', compact('tipo_material'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->get('nome');
        $tipoMaterial = new TipoMaterial();
        $tipoMaterial->nome = $nome;
        $tipoMaterial->save();
        return redirect()->route('tipo_material.index')->with('success', 'Registro criado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoMaterial  $tipoMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(TipoMaterial $tipoMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoMaterial  $tipoMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoMaterial $tipoMaterial)
    {
        return view('tipo_material.edit', compact('tipoMaterial' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoMaterial  $tipoMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoMaterial $tipoMaterial)
    {
        $nome = $request->get('nome');
        $tipoMaterial->nome = $nome;
        $tipoMaterial->save();
        return redirect()->route('tipo_material.index')->with('success', 'Registro salvo com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoMaterial  $tipoMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoMaterial $tipoMaterial)
    {

        $tipoMaterial->delete();
        return redirect()->route('tipo_material.index')->with('success', 'Registro apagado com sucesso!');

    }
}
