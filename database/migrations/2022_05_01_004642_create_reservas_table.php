<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('res_data_emprestimo');
            $table->date('res_data_devolucao');
            $table->string('res_descricao'); 

            $table->unsignedBigInteger('colab_id')->index();
            $table->foreign('colab_id')->references('id')->on('colaboradors');

            $table->unsignedBigInteger('equi_id')->index();
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
        Schema::dropIfExists('reservas');
    }
}
