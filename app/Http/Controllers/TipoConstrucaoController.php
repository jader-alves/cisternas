<?php

namespace App\Http\Controllers;

use App\tipoConstrucao;
use Illuminate\Http\Request;

class tipoConstrucaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_construcoes = tipoConstrucao::all();
        return view('tipo_construcao.index', compact('tipo_construcoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_construcao = new tipoConstrucao();
        return view('tipo_construcao.create', compact('tipo_construcao'));
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
        $tipoConstrucao = new tipoConstrucao();
        $tipoConstrucao->nome = $nome;
        $tipoConstrucao->save();
        return redirect()->route('tipo_construcao.index')->with('success', 'Registro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipoConstrucao  $tipoConstrucao
     * @return \Illuminate\Http\Response
     */
    public function show(tipoConstrucao $tipoConstrucao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipoConstrucao  $tipoConstrucao
     * @return \Illuminate\Http\Response
     */
    public function edit(tipoConstrucao $tipoConstrucao)
    {
        return view('tipo_construcao.edit', compact('tipoConstrucao' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipoConstrucao  $tipoConstrucao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipoConstrucao $tipoConstrucao)
    {
        $nome = $request->get('nome');
        $tipoConstrucao->nome = $nome;
        $tipoConstrucao->save();
        return redirect()->route('tipo_construcao.index')->with('success', 'Registro salvo com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipoConstrucao  $tipoConstrucao
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipoConstrucao $tipoConstrucao)
    {
        $tipoConstrucao->delete();
        return redirect()->route('tipo_construcao.index')->with('success', 'Registro apagado com sucesso!');
    }
}
