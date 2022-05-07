<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('equi_num_pat');
            //$table->primary(['equi_num_pat']);
            $table->string('equi_empresa_assoc');
            $table->string('equi_setor_origem');
            $table->string('equi_setor_aloc');
            $table->date('equi_data_aquisicao');            
            $table->float('equi_valor_do_bem');
            $table->string('equi_descricao');            
            $table->string('equi_nome');
            $table->enum('status', ['disponivel', 'indisponivel']);     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipamentos');
    }
}
