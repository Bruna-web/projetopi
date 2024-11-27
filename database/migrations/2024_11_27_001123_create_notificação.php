<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacoes', function (Blueprint $table) {
                $table->id('id_notificacao');
                $table->foreignId('id_paciente')->constrained('pacientes')->onDelete('cascade');
                $table->foreignId('id_profissional')->nullable()->constrained('profissionais')->onDelete('set null');
                $table->enum('tipo', ['SMS', 'email', 'push', 'outro'])->default('email');
                $table->text('mensagem');
                $table->timestamp('data_envio')->nullable();
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
        Schema::dropIfExists('notificacoes');
    }
}
