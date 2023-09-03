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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            // Ingresados
            $table->string('nombre');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('procedencia');
            $table->string('residencia');
            $table->string('ocupacion');
            $table->string('fuente_informacion');
            $table->string('grado_confiabilidad');
            $table->string('forma_llegada');
            //Foreing Key
            $table->foreignId('user_id')->nullable()->constrained();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
