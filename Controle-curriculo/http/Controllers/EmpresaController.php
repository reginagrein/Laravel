<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller{
    
    public function index(){
        $empresas = Empresa::query()
            ->orderBy('nome')
            ->get();
            return view('empresas.listar', [
            'empresas' => $empresas
        ]);
    }

    public function create(){
        return view('empresas.adicionar');
    }

    public function edit($id){
        $empresa = Empresa::find($id);
        return view('empresas.editar',[
            'empresa' => $empresa

        ]);
    }

    public function update(Request $request, $id){
        $empresa = Empresa::find($id);
        $empresa->nome = $request->nome;
        $empresa->site = $request->site;
        $empresa->save();   
        return redirect()->route('listar_emp');
    }

    public function destroy(Request $request, $id){
        $empresa= Empresa::find($id);
        $empresa->delete(); 
        return redirect()->route('listar_emp');
    }

    public function store(Request $request){
        Empresa::create($request->all());
        return redirect()->route('listar_emp');
    }







}
