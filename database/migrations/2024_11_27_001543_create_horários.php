<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosDisponiveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_disponiveis', function (Blueprint $table) {
            $table->id('id_horario');
            $table->foreignId('id_profissional')->constrained('profissionais')->onDelete('cascade'); 
            $table->date('data'); 
            $table->time('hora_inicio'); 
            $table->time('hora_fim'); 
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
        Schema::dropIfExists('horarios_disponiveis');
    }
}
