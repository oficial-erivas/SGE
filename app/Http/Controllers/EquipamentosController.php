<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipamento;

class EquipamentosController extends Controller
{
    public function create(){
        return view('equipamentos.create');
    }

    public function store(Request $request){
        Equipamento::create([ //precisa da Model Equipamento para funcionar
            'equi_num_pat' => $request->numeroPatrimonio,
            'equi_empresa_assoc'=> $request->empresaAssociada,
            'equi_setor_origem' => $request->setorDeOrigem,
            'equi_setor_aloc' => $request->setorAlocado,
            'equi_data_aquisicao' => $request->dataDeAquisicao,
            'equi_valor_do_bem' => $request->valorDoBem,
            'status' => $request->status,
            'equi_nome'=> $request->nome,
            'equi_descricao' => $request->descricao,
        ]);
        return "Equipamento criado com sucesso";
    }

    public function show($id){
        $equipamento= Equipamento::findOrFail($id); // precisa da Model
        return view('equipamentos.show', ['equipamento' => $equipamento]);
    }

    public function edit($id){
        $equipamento= Equipamento::findOrFail($id); // precisa da Model
        return view('equipamentos.edit', ['equipamento' => $equipamento]);
    }

    public function update(Request $request, $id){
        $equipamento = Equipamento::findOrFail($id);
        $equipamento->update([ //precisa da Model Equipamento para funcionar
            'equi_num_pat' => $request->numeroPatrimonio,
            'equi_empresa_assoc'=> $request->empresaAssociada,
            'equi_setor_origem' => $request->setorDeOrigem,
            'equi_setor_aloc' => $request->setorAlocado,
            'equi_data_aquisicao' => $request->dataDeAquisicao,
            'equi_valor_do_bem' => $request->valorDoBem,
            'status' => $request->status,
            'equi_nome'=> $request->nome,
            'equi_descricao' => $request->descricao,
        ]);
        return "Equipamento atualizado com sucesso";
    }

    public function delete($id){
        $equipamento= Equipamento::findOrFail($id); // precisa da Model
        return view('equipamentos.delete', ['equipamento' => $equipamento]);
    }
    public function destroy($id){
        $equipamento= Equipamento::findOrFail($id); // precisa da Model
       $equipamento->delete();
        return "Equipamento excluído com sucesso";
    }
}
