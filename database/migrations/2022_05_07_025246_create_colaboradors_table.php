<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradors', function (Blueprint $table) {
            $table->id();
            $table->string('colab_login');
            $table->string('colab_senha');
            $table->string('colab_cpf');
            $table->string('colab_rg');
            $table->string('colab_nome');
            $table->string('colab_setor');
            $table->string('colab_atrib');
            $table->string('colab_tel');
            $table->string('colab_email');
            $table->string('colab_matricula');
            //$table->primary(['colab_matricula']);
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
        Schema::dropIfExists('colaboradors');
    }
}
