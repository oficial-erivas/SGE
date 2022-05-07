<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradorRespsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborador_resps', function (Blueprint $table) {
            $table->id();
            $table->string('colabResp_login');
            $table->string('colabResp_senha');
            $table->string('colabResp_cpf');
            $table->string('colabResp_rg');
            $table->string('colabResp_nome');
            $table->string('colabResp_setor');
            $table->string('colabResp_atrib');
            $table->string('colabResp_tel');
            $table->string('colabResp_email');
            $table->string('colabResp_matricula');
           // $table->primary(['colabResp_matricula']);
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
        Schema::dropIfExists('colaborador_resps');
    }
}
