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
        Schema::create('niveles', function (Blueprint $table) {
            $table->id('id_nivel');
            $table->enum('nombre',['Principiantes I','Principiantes II','Avanzados I', 'Avanzados II']);
            $table->timestamps();
            $table->unsignedBigInteger('id_grado');

            $table->foreign('id_grado')->
            references('id_grado')
            ->on('grados')
            ->onDelete('cascade');


            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveles');
    }
};
