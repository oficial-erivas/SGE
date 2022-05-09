<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprestimo;
use App\Models\Equipamento;

class EmprestimosController extends Controller
{
    public function create($id){
        $equipamento= Equipamento::findOrFail($id);
        return view('emprestimos.create', ['equipamento' => $equipamento]);
    }

    public function store(Request $request, $id){//id é do equipamento
        Emprestimo::create([ 
            'emp_data_devolucao' => $request->dataDeDevolucao,
            'emp_descricao'=> $request->descricao,
            'emp_status' => 'solicitadoEmprestimo',
           /* 'emp_data_emprestimo' =>  data do sistema,
            'colab_id' => ,
            'colabResp_id' =>,
            'tec_id' => ,
            'equi_id' => ,*/
        ]);
        return "Equipamento criado com sucesso";
    }
}
