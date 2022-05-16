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
  public function create(){
    return view('tecnico.create');
}

public function store(Request $request){
    Tecnico::create([ 
        'tec_login' => $request->login,
        'tec_senha'=> $request->senha,
        'tec_cpf' => $request->cpf,
        'tec_rg' => $request->rg,
        'tec_nome' => $request->nome,
        'tec_setor' => $request->setor,
        'tec_tel' => $request->telefone,
        'tec_email'=> $request->email,
        'tec_matricula' => $request->matricula,
        'tec_atrib' => $request->atrib,
    ]);
    return redirect()->back()->with('success', 'Operação realizada com sucesso!');
}

public function show($id){
  $tecnico= Tecnico::findOrFail($id); // precisa da Model
    return view('tecnico.show', ['tecnico' => $tecnico]);
}

public function edit($id){
  $tecnico= Tecnico::findOrFail($id); // precisa da Model
    return view('tecnico.edit', ['tecnico' => $tecnico]);
}

public function update(Request $request, $id){
  $tecnico= Tecnico::findOrFail($id);
    $tecnico->update([ 
      'tec_login' => $request->login,
      'tec_senha'=> $request->senha,
      'teccpf' => $request->cpf,
      'tec_rg' => $request->rg,
      'tec_nome' => $request->nome,
      'tec_setor' => $request->setor,
      'tec_tel' => $request->telefone,
      'tec_email'=> $request->email,
      'tec_matricula' => $request->matricula,
      'tec_atrib' => $request->atrib,
    ]);
    return redirect()->back()->with('success', 'Operação realizada com sucesso!');
}

public function delete($id){
  $tecnico= Tecnico::findOrFail($id); // precisa da Model
    return view('tecnico.delete', ['tecnico' => $tecnico]);
}
public function destroy($id){
    $tecnico= Tecnico::findOrFail($id); // precisa da Model
    $tecnico->delete();
    return redirect()->back()->with('success', 'Operação realizada com sucesso!');
}


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