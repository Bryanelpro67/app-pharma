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
Schema::create('requerimientos_nofuncionales', function (Blueprint $table) {
    $table->id('id_req');
    $table->string('id_requerimiento', 10);
    $table->string('nombre', 100);
    $table->text('descripcion')->nullable();
    $table->string('prioridad', 50)->nullable();
    $table->string('categoria', 50)->nullable();
    $table->text('valor_objetivo')->nullable();
    $table->text('valor_aceptable')->nullable();
    $table->text('justificacion')->nullable();
    $table->text('riesgos')->nullable();
    $table->text('notas')->nullable();
    $table->timestamp('fecha_creacion')->useCurrent();
    $table->timestamp('fecha_modificacion')->useCurrent()->useCurrentOnUpdate();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requerimientos_nofuncionales');
    }
};
