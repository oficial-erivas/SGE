<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('user_login');
            $table->string('user_senha');
            $table->string('user_cpf');
            $table->string('user_rg');
            $table->string('user_nome');
            $table->string('user_setor');
            $table->string('user_atrib');
            $table->string('user_tel');
            $table->string('user_email');
            $table->string('user_matricula');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
