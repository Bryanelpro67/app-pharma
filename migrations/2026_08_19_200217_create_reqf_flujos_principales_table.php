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
Schema::create('reqf_flujos_principales', function (Blueprint $table) {
    $table->id();
    $table->foreignId('id_req')->constrained('requerimientos_funcionales', 'id_req')->onDelete('cascade');
    $table->foreignId('id_flujo')->constrained('flujos_principales', 'id_flujo')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reqf_flujos_principales');
    }
};
