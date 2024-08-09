<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id'); // Referência ao usuário
            $table->unsignedBigInteger('fornecedor_id'); // Referência ao fornecedor
            $table->unsignedBigInteger('manutencao_id'); // Referência à equipe de manutenção
            $table->string('descricao');
            $table->string('status');
            $table->timestamps();

            // Adicionar chaves estrangeiras
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores')->onDelete('cascade');
            $table->foreign('manutencao_id')->references('id')->on('manutencaos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orcamentos');
    }
};
