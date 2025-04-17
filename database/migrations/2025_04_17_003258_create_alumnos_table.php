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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('id_alumno');
            $table->string('nombre');
            $table->string('email');
            $table->string('numero');
            $table->string('direccion');
            $table->timestamps();
            $table->unsignedBigInteger('id_sucursal');

            $table->foreign('id_sucursal')
            ->references('id_sucursal')
            ->on('sucursales')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
