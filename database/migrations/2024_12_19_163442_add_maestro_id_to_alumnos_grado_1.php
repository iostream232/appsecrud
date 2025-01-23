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
        Schema::table('alumnos_grado_1', function (Blueprint $table) {
            //
        // En la migración de alumnos_grado_1
   
     $table->foreignId('maestro_id')->nullable()->constrained('maestros')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alumnos_grado_1', function (Blueprint $table) {
            //
        });
    }
};
