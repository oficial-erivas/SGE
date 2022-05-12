<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Emprestimo;
use Illuminate\Http\Request;
use App\Models\Equipamento;
use App\Models\ColaboradorResp;
use App\Models\Tecnico;

class ColaboradorRespController extends Controller
{
  //Falta CRUD

    public function getEquipamentos($id)// $id do colabResp
{
    $equipamentos = Equipamento::where('status', 'disponivel')->get();
    $colaboradorResp= ColaboradorResp::findOrFail($id);
    // Repassando para a view
    return view('colaboradorResp.equipamentos', ['colaborador' => $colaboradorResp],compact('equipamentos'));
}

public function getEmprestimos($id)// $id do colabResp , todo colabResp tbm existe na tabela colab
{
    $colaboradorResp= ColaboradorResp::findOrFail($id);
    $colaborador=Colaborador::where('colab_cpf', $colaboradorResp->colabResp_cpf)->first();
    if($colaborador==null){
        $emprestimos=collect();
    }
    else{
    $emprestimos = Emprestimo::where('colab_id', $colaborador->id)->get();
    }
    $equipamentos=collect();
    $colaboradoresResp=collect();
    $tecnicos=collect();
    foreach ($emprestimos as $emprestimo){
    $equipamentos->push(Equipamento::findOrFail($emprestimo->equi_id));
    $colaboradoresResp->push(ColaboradorResp::findOrFail($emprestimo->colabResp_id));
    $tecnicos->push(Tecnico::findOrFail($emprestimo->tec_id));
    
}
// Repassando para a view
return view('colaboradorResp.emprestimos', ['colaborador' => $colaboradorResp],compact('equipamentos','colaboradoresResp','emprestimos','tecnicos') );

}

public function getLiberacoes($id)// $id do colabResp
{
    $colaboradorResp= ColaboradorResp::findOrFail($id);
    $matchThese = ['colabResp_id' => $id, 'emp_status' => 'solicitadoEmprestimo'];
    $emprestimos = Emprestimo::where($matchThese)->get();
    $equipamentos=collect();
    $colaboradores=collect();
    $tecnicos=collect();
    foreach ($emprestimos as $emprestimo){
    $equipamentos->push(Equipamento::findOrFail($emprestimo->equi_id));
    $colaboradores->push(Colaborador::findOrFail($emprestimo->colab_id));
    $tecnicos->push(Tecnico::findOrFail($emprestimo->tec_id));
    
}
// Repassando para a view
return view('colaboradorResp.liberacoes', ['colaborador' => $colaboradorResp],compact('equipamentos','colaboradores','emprestimos','tecnicos') );

}

}