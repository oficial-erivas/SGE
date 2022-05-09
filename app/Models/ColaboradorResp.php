<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColaboradorResp extends Model
{
    use HasFactory;

    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }

    protected $fillable = ['id','colabResp_login','colabResp_senha','colabResp_cpf','colabResp_rg','colabResp_nome','colabResp_setor','colabResp_atrib','colabResp_tel','colabResp_email','colabResp_matricula'];
}
