<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    } 

    protected $fillable = ['emp_data_emprestimo','emp_data_devolucao','emp_descricao','emp_status','avaliacao','colab_id','colabResp_id','tec_id','equi_id'];
}
