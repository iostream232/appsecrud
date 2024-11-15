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
            $table->foreignId('alumno_id') // Establece la relación con la tabla alumnos_grado_1
            ->constrained('alumnos_grado_1') // Relación con alumnos_grado_1
            ->onDelete('cascade'); // Elimina los tipos de aprendizaje si se elimina el alumno
      $table->enum('estilo', ['visual', 'auditivo', 'kinestesico']); // Estilo de aprendizaje
      $table->enum('ritmo', ['rapido', 'moderado', 'lento']); // Ritmo de aprendizaje
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
