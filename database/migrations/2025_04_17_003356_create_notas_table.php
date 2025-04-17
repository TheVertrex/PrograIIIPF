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
        Schema::create('notas', function (Blueprint $table) {
            $table->id('id_nota');
            $table->timestamps();

            $table->unsignedBigInteger('id_inscripcion');

            $table->foreign('id_inscripcion')
            ->references('id_inscripcion')
            ->on('inscripciones')
            ->onDelete('cascade');

            $table->integer('punteo');
            $table->text('observacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
