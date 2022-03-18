<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFazendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fazendas', function (Blueprint $table) {
            $table->id();

            $table->boolean('possui_casa');
            $table->boolean('possui_plantacao');
            $table->boolean('possui_animais');
            $table->unsignedBigInteger('imovel_id');
            $table->foreign('imovel_id')->references('id')->on('imoveis');

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
        Schema::dropIfExists('fazendas');
    }
}
