<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaApartamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('anunciante');
            $table->string('endereço');
            //fotos
            $table->float('valor');
            $table->integer('andar');
            $table->string('nome_do_predio');
            $table->text('predio_descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartamentos');
    }
}
