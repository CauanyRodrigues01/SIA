<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTerrenos extends Migration
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

            $table->string('frente');
            $table->string('lado');
            $table->boolean('agua');
            $table->boolean('luz');
            $table->unsignedBigInteger('imovel_id')->cascadeOnDelete();
            $table->foreign('imovel_id')->references('id')->on('imoveis')->cascadeOnDelete();

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
