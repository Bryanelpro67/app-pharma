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
    Schema::create('requerimientos_funcionales', function (Blueprint $table) {
      $table->id('id_req');
      $table->string('id_requerimiento', 10);
      $table->string('nombre', 150);
      $table->text('descripcion')->nullable();
      $table->string('prioridad', 50)->nullable();
      $table->text('precondiciones')->nullable();
      $table->text('reglas_negocio')->nullable();
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
        Schema::dropIfExists('requerimientos_funcionales');
    }
};
