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
        return "Empréstimo criado com sucesso";
    }
}
