<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

/*     public function emprestimos()
    {
        return $this->hasMany(Emprestimo::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    } */

    protected $fillable = ['id','equi_num_pat','equi_empresa_assoc','equi_setor_origem','equi_setor_aloc','equi_data_aquisicao','equi_valor_do_bem','equi_descricao','equi_nome','status'];
}
