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
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->id();
            $table->string('num_prontuario');
            $table->dateTime('dt_criacao');
            $table->dateTime('dt_atualizacao');
            $table->dateTime('dt_exclusao');
            $table->longText('observacoes');
            $table->unsignedBigInteger('criado_por');
            $table->unsignedBigInteger('id_paciente');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prontuarios');
    }
};
