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
            $table->string('emp_status'); // mudar para tipo ENUM
            $table->unsignedInteger('usuario_id')->index();
            $table->unsignedInteger('equipamento_id')->index();
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
