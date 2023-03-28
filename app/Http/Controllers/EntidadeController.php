<?php

namespace App\Http\Controllers;

use App\Entidade;
use Illuminate\Http\Request;
use App\Cisterna;

class EntidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $entidades = Entidade::all();
        return view('entidades.index', compact('entidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidades = new Entidade();
        return view('entidades.create', compact('entidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entidade = new Entidade();
        $entidade->nome_fantasia = $request->get('nome_fantasia');
        $entidade->cnpj = $request->get('cnpj');
        $entidade->cep = $request->get('cep');
        $entidade->logradouro = $request->get('logradouro');
        $entidade->numero = $request->get('numero');
        $entidade->bairro = $request->get('bairro');
        $entidade->cidade = $request->get('cidade');
        $entidade->estado = $request->get('estado');
        $entidade->save();
        return redirect()->route('entidades.index')->with('success', 'Registro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function show(Entidade $entidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidade $entidade)
    {

        $cisternas_atendidas = Cisterna::where('entidade_id', $entidade->id)->get();
        return view('entidades.edit', compact('entidade', 'cisternas_atendidas' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entidade $entidade)
    {
        $entidade->nome_fantasia = $request->get('nome_fantasia');
        $entidade->cnpj = $request->get('cnpj');
        $entidade->cep = $request->get('cep');
        $entidade->logradouro = $request->get('logradouro');
        $entidade->numero = $request->get('numero');
        $entidade->bairro = $request->get('bairro');
        $entidade->cidade = $request->get('cidade');
        $entidade->estado = $request->get('estado');
        $entidade->save();
        return redirect()->route('entidades.index')->with('success', 'Registro salvo com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entidade  $entidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidade $entidade)
    {
        $entidade->delete();
        return redirect()->route('entidades.index')->with('success', 'Registro apagado com sucesso!');
    }
}
