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
        Schema::create('alumnos_grado_2', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_alumno');  // Nombre completo del alumno
            $table->string('nombre_tutor_1');  // Nombre completo del primer tutor
            $table->string('telefono_tutor_1');  // Número de contacto del primer tutor
            $table->string('nombre_tutor_2');  // Nombre completo del segundo tutor
            $table->string('telefono_tutor_2');  // Número de contacto del segundo tutor
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos_grado_2');
    }
};
