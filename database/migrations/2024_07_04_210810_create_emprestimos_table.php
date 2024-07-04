<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_cliente');//cria uma coluna para a chave estrangeira
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');//chave estrangeira para referenciar a tabela cliente
            $table->string('titulo');
            $table->dateTime('data_emprestimo');
            $table->dateTime('data_devo_prevista');
            $table->dateTime('data_devolucao');
            $table->decimal('valor_multa',8,2);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
