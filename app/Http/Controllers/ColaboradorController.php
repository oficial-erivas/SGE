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
  public function create(){
    return view('colaborador.create');
}

public function store(Request $request){
    Colaborador::create([ 
        'colab_login' => $request->login,
        'colab_senha'=> $request->senha,
        'colab_cpf' => $request->cpf,
        'colab_rg' => $request->rg,
        'colab_nome' => $request->nome,
        'colab_setor' => $request->setor,
        'colab_tel' => $request->telefone,
        'colab_email'=> $request->email,
        'colab_matricula' => $request->matricula,
        'colab_atrib' => $request->atrib,
    ]);
    return redirect()
    ->back()
    ->with('mensagem', 'Colaborador cadastrado com sucesso!');
}

public function show($id){
    $colaborador= Colaborador::findOrFail($id); // precisa da Model
    return view('colaborador.show', ['colaborador' => $colaborador]);
}

public function edit($id){
    $colaborador= Colaborador::findOrFail($id); // precisa da Model
    return view('colaborador.edit', ['colaborador' => $colaborador]);
}

public function update(Request $request, $id){
    $colaborador= Colaborador::findOrFail($id);
    $colaborador->update([ 
        'colab_login' => $request->login,
        'colab_senha'=> $request->senha,
        'colab_cpf' => $request->cpf,
        'colab_rg' => $request->rg,
        'colab_nome' => $request->nome,
        'colab_setor' => $request->setor,
        'colab_tel' => $request->telefone,
        'colab_email'=> $request->email,
        'colab_matricula' => $request->matricula,
    ]);
    return "Colaborador atualizado com sucesso";
}

public function delete($id){
    $colaborador= Colaborador::findOrFail($id); // precisa da Model
    return view('colaborador.delete', ['colaborador' => $colaborador]);
}
public function destroy($id){
    $colaborador= Colaborador::findOrFail($id); // precisa da Model
    $colaborador->delete();
    return "colaborador excluído com sucesso";
}

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
    $emprestimos = Emprestimo::where('colab_id', $id)->where('emp_status', '!=','encerrado')->get();
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