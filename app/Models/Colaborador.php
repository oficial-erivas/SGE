<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    } 

    protected $fillable = ['id','colab_login','colab_senha','colab_cpf','colab_rg','colab_nome','colab_setor','colab_atrib','colab_tel','colab_email','colab_matricula'];
}
