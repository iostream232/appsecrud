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
        Schema::create('tipos_aprendizaje_3', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del alumno
            $table->enum('estilo', ['visual', 'auditivo', 'kinestesico']); // Estilo de aprendizaje
            $table->enum('ritmo', ['rapido', 'moderado', 'lento']); // Ritmo de aprendizaje
            $table->unsignedBigInteger('alumno_id'); // Referencia a la tabla alumnos_grado_3
            $table->timestamps();

            $table->foreign('alumno_id')
                ->references('id')
                ->on('alumnos_grado_3')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_aprendizaje_3');
    }
};
