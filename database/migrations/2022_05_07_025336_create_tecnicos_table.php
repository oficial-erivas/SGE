<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->id();
            $table->string('tec_login');
            $table->string('tec_senha');
            $table->string('tec_cpf');
            $table->string('tec_rg');
            $table->string('tec_nome');
            $table->string('tec_setor');
            $table->string('tec_atrib');
            $table->string('tec_tel');
            $table->string('tec_email');
            $table->string('tec_matricula');
            //$table->primary(['tec_matricula']);
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
        Schema::dropIfExists('tecnicos');
    }
}
