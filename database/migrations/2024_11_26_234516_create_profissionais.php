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
        Schema::create('profissionais', function (Blueprint $table) {
                $table->id();
                $table->string('nome', 100);
                $table->string('cpf', 11)->unique();
                $table->date('nascimento');
                $table->enum('sexo', ['M', 'F']);
                $table->string('bairro')->nullable();
                $table->string('cidade')->nullable();
                $table->string('estado')->nullable();
                $table->string('cep')->nullable();
                $table->string('especialidade', 100);
                $table->string('crm', 15)->unique();
                $table->string('telefone', 15)->unique();
                $table->string('email')->unique();
                $table->string('senha');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profissionais');
    }
};
