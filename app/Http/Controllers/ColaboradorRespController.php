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
  public function create(){
    return view('colaboradorResp.create');
}

public function store(Request $request){
    ColaboradorResp::create([ 
        'colabResp_login' => $request->login,
        'colabResp_senha'=> $request->senha,
        'colabResp_cpf' => $request->cpf,
        'colabResp_rg' => $request->rg,
        'colabResp_nome' => $request->nome,
        'colabResp_setor' => $request->setor,
        'colabResp_tel' => $request->telefone,
        'colabResp_email'=> $request->email,
        'colabResp_matricula' => $request->matricula,
        'colabResp_atrib' => $request->atrib,
    ]);

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
        'colab_atrib' => $request->atrib
    ]);

    return "Colaborador criado com sucesso";
}

public function show($id){
    $colaboradorResp= ColaboradorResp::findOrFail($id); // precisa da Model
    return view('colaboradorResp.show', ['colaboradorResp' => $colaboradorResp]);
}

public function edit($id){
    $colaboradorResp= ColaboradorResp::findOrFail($id); // precisa da Model
    return view('colaboradorResp.edit', ['colaboradorResp' => $colaboradorResp]);
}

public function update(Request $request, $id){
    $colaboradorResp= ColaboradorResp::findOrFail($id);
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

    $colaboradorResp->update([ 
        'colabResp_login' => $request->login,
        'colabResp_senha'=> $request->senha,
        'colabResp_cpf' => $request->cpf,
        'colabResp_rg' => $request->rg,
        'colabResp_nome' => $request->nome,
        'colabResp_setor' => $request->setor,
        'colabResp_tel' => $request->telefone,
        'colabResp_email'=> $request->email,
        'colabResp_matricula' => $request->matricula,
    ]);

    return "Colaborador atualizado com sucesso";
}

public function delete($id){
    $colaboradorResp= ColaboradorResp::findOrFail($id); // precisa da Model
    return view('colaboradorResp.delete', ['colaboradorResp' => $colaboradorResp]);
}
public function destroy($id){
    $colaboradorResp= ColaboradorResp::findOrFail($id); // precisa da Model
    $colaboradorResp->delete();
    return "colaborador excluído com sucesso";
}

    public function getEquipamentos($id)// $id do colabResp
{
    $colaboradorResp= ColaboradorResp::findOrFail($id);
    $colaborador=Colaborador::where('colab_cpf', $colaboradorResp->colabResp_cpf)->first();
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
    $emprestimos = Emprestimo::where('colab_id', $colaborador->id)->where('emp_status', '!=','encerrado')->get();
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