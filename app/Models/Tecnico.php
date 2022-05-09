<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    use HasFactory;

    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }

    protected $fillable = ['id','tec_login','tec_senha','tec_cpf','tec_rg','tec_nome','tec_setor','tec_atrib','tec_tel','tec_email','tec_matricula'];
}
