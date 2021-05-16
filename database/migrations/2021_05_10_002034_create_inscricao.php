<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricao', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('inscricao')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('colegio_atual')->nullable();
            $table->string('serie')->nullable();
            $table->string('onde_ficou_sabendo')->nullable();
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
        Schema::dropIfExists('inscricao');
    }
}
