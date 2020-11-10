<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorneiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torneios', function (Blueprint $table) {
            $table->id();
            $table->string('formato_id');
            $table->string('vencedor_id');
            $table->string('nome');
            $table->string('valor_inscricao');
            $table->string('dt_limite_inscricao');
            $table->string('dt_inicio');
            $table->string('qtd_jogadores');
            $table->string('premiacao');
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
        Schema::dropIfExists('torneios');
    }
}
