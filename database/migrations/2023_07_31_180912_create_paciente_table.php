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
        Schema::create('paciente', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->string('nome_mae');
            $table->string ('cns');
            $table->string('nome_pai');
            $table->string('genero');
            $table->dateTime('data_nasc');
            $table->string('cpf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paciente');
    }
};
