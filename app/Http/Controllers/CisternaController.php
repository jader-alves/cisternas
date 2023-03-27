<?php

namespace App\Http\Controllers;

use App\Cisterna;
use App\Entidade;
use App\TipoMaterial;
use App\TipoConstrucao;
use App\CisternaMaterial;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class CisternaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisternas = Cisterna::all();
        return view('cisternas.index', compact('cisternas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidades = Entidade::all();
        $tipo_material = TipoMaterial::all();
        $tipo_construcao = TipoConstrucao::all();
        $cisterna = new Cisterna();
        return view('cisternas.create', compact('cisterna', 'entidades', 'tipo_material','tipo_construcao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $cisterna = new Cisterna();
        $cisterna->nome = $request->get('nome');
        $cisterna->data_inauguracao = $request->get('data_inauguracao');
        $cisterna->tipo_construcao_id = $request->get('tipo_construcao_id');
        $cisterna->entidade_id = $request->get('entidade_id');
        $cisterna->localizacao = $request->get('localizacao');
        $cisterna->coordenadas = $request->get('coordenadas');
        $cisterna->cep = $request->get('cep');
        $cisterna->cidade = $request->get('cidade');
        $cisterna->estado = $request->get('estado');
        if ($cisterna->save()){
            $materiais = $request->get('tipo_material');
            foreach($materiais as $tipo_material_id=>$v){
                $material = new CisternaMaterial();
                $material->tipo_material_id = $tipo_material_id;
                $material->cisterna_id = $cisterna->id;
                $material->save();
            }
        }

        return redirect()->route('cisternas.index')->with('success', 'Registro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cisterna  $cisterna
     * @return \Illuminate\Http\Response
     */
    public function show(Cisterna $cisterna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cisterna  $cisterna
     * @return \Illuminate\Http\Response
     */
    public function edit(Cisterna $cisterna)
    {
        $entidades = Entidade::all();
        $tipo_material = TipoMaterial::all();
        $tipo_construcao = TipoConstrucao::all();
        return view('cisternas.edit', compact('cisterna', 'entidades', 'tipo_material', 'tipo_construcao'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cisterna  $cisterna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cisterna $cisterna)
    {
        $cisterna->nome = $request->get('nome');
        $cisterna->data_inauguracao = $request->get('data_inauguracao');
        $cisterna->tipo_construcao_id = $request->get('tipo_construcao_id');
        $cisterna->entidade_id = $request->get('entidade_id');
        $cisterna->localizacao = $request->get('localizacao');
        $cisterna->coordenadas = $request->get('coordenadas');
        $cisterna->cep = $request->get('cep');
        $cisterna->cidade = $request->get('cidade');
        $cisterna->estado = $request->get('estado');
        if ($cisterna->save()){
            CisternaMaterial::where('cisterna_id', $cisterna->id)->delete();
            $materiais = $request->get('tipo_material');
            foreach($materiais as $tipo_material_id=>$v){
                $material = new CisternaMaterial();
                $material->tipo_material_id = $tipo_material_id;
                $material->cisterna_id = $cisterna->id;
                $material->save();
            }
        }

        return redirect()->route('cisternas.index')->with('success', 'Registro atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cisterna  $cisterna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cisterna $cisterna)
    {
        $cisterna->delete();
        return redirect()->route('cisternas.index')->with('success', 'Registro apagado com sucesso!');
    }
}
