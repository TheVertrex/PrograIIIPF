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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id('id_inscripcion');
            $table->timestamps();

            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_nivel');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_profesor');

            $table->dateTime('fecha_inscripcion');

            $table->foreign('id_alumno')
            ->references('id_alumno')
            ->on('alumnos')
            ->onDelete('cascade');

            $table->foreign('id_nivel')
            ->references('id_nivel')
            ->on('niveles')
            ->onDelete('cascade');

            $table->foreign('id_curso')
            ->references('id_curso')
            ->on('cursos')
            ->onDelete('cascade');

            $table->foreign('id_profesor')
            ->references('id_profesor')
            ->on('profesores')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
