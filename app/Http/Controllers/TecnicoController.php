<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Emprestimo;
use Illuminate\Http\Request;
use App\Models\Equipamento;
use App\Models\ColaboradorResp;
use App\Models\Tecnico;

class TecnicoController extends Controller
{
  //Falta CRUD


public function getEquiEntregar($id)// $id do tecnico
{
    $tecnico= Tecnico::findOrFail($id);
    $matchThese = ['tec_id' => $id, 'emp_status' => 'emAndamento (liberado)'];
    $emprestimos = Emprestimo::where($matchThese)->get();
    $equipamentos=collect();
    $colaboradores=collect();
    $colaboradoresResp=collect();
    foreach ($emprestimos as $emprestimo){
    $equipamentos->push(Equipamento::findOrFail($emprestimo->equi_id));
    $colaboradores->push(Colaborador::findOrFail($emprestimo->colab_id));
    $colaboradoresResp->push(ColaboradorResp::findOrFail($emprestimo->colabResp_id));
    
}
// Repassando para a view
return view('tecnico.paraEntregar', ['tecnico' => $tecnico],compact('equipamentos','colaboradores','emprestimos','colaboradoresResp') );

}


public function getEquiRecolher($id)// $id do tecnico
{
    $tecnico= Tecnico::findOrFail($id);
    $matchThese = ['tec_id' => $id, 'emp_status' => 'solicitadaDevolucao'];
    $emprestimos = Emprestimo::where($matchThese)->get();
    $equipamentos=collect();
    $colaboradores=collect();
    $colaboradoresResp=collect();
    foreach ($emprestimos as $emprestimo){
    $equipamentos->push(Equipamento::findOrFail($emprestimo->equi_id));
    $colaboradores->push(Colaborador::findOrFail($emprestimo->colab_id));
    $colaboradoresResp->push(ColaboradorResp::findOrFail($emprestimo->colabResp_id));
    
}
// Repassando para a view
return view('tecnico.paraRecolher', ['tecnico' => $tecnico],compact('equipamentos','colaboradores','emprestimos','colaboradoresResp') );

}

}