<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->date('emp_data_emprestimo');
            $table->date('emp_data_devolucao');
            $table->string('emp_descricao'); 
            $table->enum('emp_status',['solicitadoEmprestimo', 'emAndamento (liberado)', 'solicitadaDevolucao', 'encerrado']); // mudar para tipo ENUM
            $table->string('avaliacao');

            $table->unsignedBigInteger('colab_id');
            $table->foreign('colab_id')->references('id')->on('colaboradors');

            $table->unsignedBigInteger('colabResp_id');
            $table->foreign('colabResp_id')->references('id')->on('colaborador_resps');

            $table->unsignedBigInteger('tec_id');
            $table->foreign('tec_id')->references('id')->on('tecnicos');
            
            $table->unsignedBigInteger('equi_id');
            $table->foreign('equi_id')->references('id')->on('equipamentos');
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
        Schema::dropIfExists('emprestimos');
    }
}
