<?php

namespace App\Http\Controllers;


use App\Empresa;
use App\Curriculo;
use Illuminate\Http\Request;

class CurriculoController extends Controller{
    
    public function index(Request $request, $empId) {
        $curriculos = Curriculo::query()
            ->where('empresa_id', $empId)
            ->orderBy('data')
            ->get();
        $empresa = Empresa::find($empId);
        return view('curriculos.listar', [
            'curriculos' => $curriculos,
            'empId' => $empId,
            'nomeEmp' => $empresa->nome
            
        ]);
    }

    public function create($empId){
        return view('curriculos.adicionar', [
            'empId' => $empId

        ]);
    }

    public function edit($empId, $id){
        $curriculo = Curriculo::find($id);
        return view ('curriculos.editar', [
            'curriculo' => $curriculo,
            'empId' => $empId

        ]);

    }

    public function update(Request $request, $empId, $id){
        $curriculo = Curriculo::find($id);
        $curriculo->data = $request->data;
        $curriculo->status = $request->status;
        $curriculo->save();
        return redirect()->route('listar_curriculo',[
            'empId' => $empId
        ]);
    }

    public function destroy($id, $empId){
        $curriculo = Curriculo::find($id);
        $curriculo->delete(); 
        return redirect()->route('listar_curriculo',[
            'empId' => $empId
        ]);
    }
    public function store(Request $request, $empId){
        $curriculo = new Curriculo($request->all());
        $empresa = Empresa::find($empId);
        $empresa->curriculos()->save($curriculo);
        return redirect()->route('listar_curriculo', [
            'empId' => $empId
        ]);
    }
}

