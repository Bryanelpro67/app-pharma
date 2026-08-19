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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('id_proyecto');
            $table->string('nombre_proyecto', 100);
            $table->text('funcionalidad_productos')->nullable();
            $table->text('restricciones')->nullable();
            $table->text('evolucion_previsible_sistema')->nullable();
            $table->string('estado', 50)->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamp('fecha_modificacion')->useCurrent()->useCurrentOnUpdate();
            
            $table->foreignId('id_cliente')->constrained('clientes', 'id_cliente')->onDelete('cascade');
        });
    } // <-- Esta llave es la que faltaba

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};