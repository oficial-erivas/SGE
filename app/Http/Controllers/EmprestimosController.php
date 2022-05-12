<?php

namespace App\Http\Controllers;
Use \Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Emprestimo;
use App\Models\Equipamento;
use App\Models\Colaborador;
use App\Models\ColaboradorResp;
use App\Models\Tecnico;

class EmprestimosController extends Controller
{
    public function create($equi_id, $colab_id){
        $equipamento= Equipamento::findOrFail($equi_id);
        $colaborador= Colaborador::findOrFail($colab_id);
        return view('emprestimos.create', ['equipamento' => $equipamento, 'colaborador'=>$colaborador]);
    }

    public function store(Request $request, $equi_id, $colab_id){
        $equipamento = Equipamento::findOrFail($equi_id);
        $colaboradorResp = ColaboradorResp::where('colabResp_setor', $equipamento->equi_setor_origem)->first();
        $tecnico = Tecnico::where('tec_setor', $equipamento->equi_setor_origem)->first();

        Emprestimo::create([ 
            'emp_data_devolucao' => $request->dataDeDevolucao,
            'emp_descricao'=> $request->descricao,
            'emp_status' => 'solicitadoEmprestimo',
            'emp_data_emprestimo' => Carbon::now(),
            'colab_id' => $colab_id,
            'colabResp_id' => $colaboradorResp->id,
            'tec_id' => $tecnico->id,
            'equi_id' => $equi_id,
            'avaliacao'=>' ',
        ]);
        return "Empréstimo solicitado, após liberação do Colaborador Responsável, técnico irá levar o equipamento";
    }

    public function show($id){
        $emprestimo= Emprestimo::findOrFail($id); 
        return view('emprestimos.show', ['emprestimo' => $emprestimo]);
    }

    public function solicitarDevolucao($emp_id, $equi_id){
        $equipamento= Equipamento::findOrFail($equi_id); 
        $emprestimo= Emprestimo::findOrFail($emp_id);
        if($emprestimo->emp_status!='emAndamento (liberado)'){
            return "Devolução Impossibilitada";
        }
        return view('emprestimos.confirm', ['equipamento' => $equipamento, 'emprestimo'=>$emprestimo]);
    }

    public function devolver($id){ //id do emprestimo
        $emprestimo= Emprestimo::findOrFail($id);
        $emprestimo->update([ 
            'emp_status' => 'solicitadaDevolucao',
        ]);
        return "Devolução do empréstimo solicitada, técnico irá recolher o equipamento";
    }

    public function liberar($id){ //id do emprestimo
        $emprestimo= Emprestimo::findOrFail($id);
        $emprestimo->update([ 
            'emp_status' => 'emAndamento (liberado)',
        ]);
        return "Emprestimo liberado, técnico será notificado para levar o equipamento";
    }
    public function entregar($id){ //id do emprestimo
        $emprestimo= Emprestimo::findOrFail($id);
        $emprestimo->update([ 
            'emp_status' => 'emAndamento (entregue)',
        ]);
        $equipamento= Equipamento::findOrFail($emprestimo->equi_id);
        $colaborador= Colaborador::findOrFail($emprestimo->colab_id);
        $equipamento->update([ 
            'equi_setor_aloc' =>$colaborador->colab_setor ,
        ]);
        return "Equipamento entregue";
    }

    public function confirmarDevolucao($id){ //id do emprestimo
        $emprestimo= Emprestimo::findOrFail($id);
        $emprestimo->update([ 
            'emp_status' => 'encerrado',
        ]);
        $equipamento= Equipamento::findOrFail($emprestimo->equi_id);
        $colaboradorResp= ColaboradorResp::findOrFail($emprestimo->colabResp_id);
        $equipamento->update([ 
            'equi_setor_aloc' =>$colaboradorResp->colabResp_setor ,
        ]); 
            return view('tecnico.avaliar', ['equipamento' => $equipamento, 'emprestimo'=>$emprestimo]);
    }
    public function avaliar(Request $request, $id){
        $equipamento = Equipamento::findOrFail($id);
        $equipamento->update([ 
            'avaliacao'=>$request->avaliacao,
        ]);
        return "Equipamento devolvido e avaliado com sucesso";
    }
}
