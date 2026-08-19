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
Schema::create('reqf_criterios_aceptacion', function (Blueprint $table) {
    $table->id();
    $table->foreignId('id_req')->constrained('requerimientos_funcionales', 'id_req')->onDelete('cascade');
    $table->foreignId('id_criterio')->constrained('criterios_aceptacion', 'id_criterio')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reqf_criterios_aceptacion');
    }
};
