<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proyectos_reqnf', function (Blueprint $table) {
            $table->unsignedInteger('id_proyecto');
            $table->unsignedInteger('id_req');

            $table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos');
            $table->foreign('id_req')->references('id_req')->on('requerimientos_nofuncionales');

            $table->primary(['id_proyecto', 'id_req']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyectos_reqnf');
    }
};