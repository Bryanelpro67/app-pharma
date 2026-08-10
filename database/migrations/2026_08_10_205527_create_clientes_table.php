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
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id_cliente');
            $table->string('nombre_empresa', 100);
            $table->string('correo_empresarial', 100)->unique();
            $table->integer('telefono_empresa');
            $table->string('persona_contacto', 100);
            $table->string('correo_contacto', 100)->unique();
            $table->integer('telefono_contacto');
            $table->integer('celular_contacto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
