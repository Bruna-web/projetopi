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
        Schema::create('agendamentos', function (Blueprint $table) {
                $table->id(); 
                $table->string('nome-do-serviço', 100); 
                $table->integer('duracao')->default(30); 
                $table->foreignId('especialidade_id')->nullable()->constrained('especialidade'); 
                $table->integer('limite_atendimentos')->default(2);
                $table->boolean('requisicao_previa')->default(false);
                $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
