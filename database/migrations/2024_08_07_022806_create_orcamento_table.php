<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id('idOrcamento');
            $table->unsignedBigInteger('IdManutencao');
            $table->unsignedBigInteger('IdFornecedor');
            $table->string('descricao');
            $table->string('status');
            $table->unsignedBigInteger('user_id'); // Chave estrangeira para o usuário
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
};
