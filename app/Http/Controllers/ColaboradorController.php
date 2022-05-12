<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Emprestimo;
use Illuminate\Http\Request;
use App\Models\Equipamento;
use App\Models\ColaboradorResp;
use App\Models\Tecnico;

class ColaboradorController extends Controller
{
  //Falta CRUD

    public function getEquipamentos($id)// $id do colab
{
    $equipamentos = Equipamento::where('status', 'disponivel')->get();
    $colaborador= Colaborador::findOrFail($id);
    // Repassando para a view
    return view('colaborador.equipamentos', ['colaborador' => $colaborador],compact('equipamentos'));
}

public function getEmprestimos($id)// $id do colab
{
    $colaborador= Colaborador::findOrFail($id);
    $emprestimos = Emprestimo::where('colab_id', $id)->get();
    $equipamentos=collect();
    $colaboradoresResp=collect();
    $tecnicos=collect();
    foreach ($emprestimos as $emprestimo){
    $equipamentos->push(Equipamento::findOrFail($emprestimo->equi_id));
    $colaboradoresResp->push(ColaboradorResp::findOrFail($emprestimo->colabResp_id));
    $tecnicos->push(Tecnico::findOrFail($emprestimo->tec_id));
    
}
// Repassando para a view
return view('colaborador.emprestimos', ['colaborador' => $colaborador],compact('equipamentos','colaboradoresResp','emprestimos','tecnicos') );

}

}