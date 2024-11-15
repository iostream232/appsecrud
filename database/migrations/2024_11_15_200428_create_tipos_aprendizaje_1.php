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
        Schema::create('tipos_aprendizaje_1', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Campo para el nombre del alumno
            $table->enum('estilo', ['visual', 'auditivo', 'kinestesico']); // Opciones para el estilo de aprendizaje
            $table->enum('ritmo', ['rapido', 'moderado', 'lento']); // Opciones para el ritmo de aprendizaje
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_aprendizaje_1');
    }
};
