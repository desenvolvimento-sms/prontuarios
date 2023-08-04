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
            $table->timestamp('dt_criacao');
            $table->timestamp('dt_atualizacao');
            $table->softDeletes('dt_exclusao')->nullable();
            $table->longText('observacoes')->nullable();
            $table->unsignedBigInteger('criado_por');
            $table->unsignedBigInteger('id_paciente');
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
