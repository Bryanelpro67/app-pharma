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
Schema::create('flujos_alternativos', function (Blueprint $table) {
    $table->id('id_flujo');
    $table->text('flujo_alternativo');
    $table->timestamp('fecha_creacion')->useCurrent();
    $table->timestamp('fecha_modificacion')->useCurrent()->useCurrentOnUpdate();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flujos_alternativos');
    }
};
