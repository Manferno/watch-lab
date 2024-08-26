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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('tipo',100);
            $table->string('marca',100);
            $table->string('modelo',100);
            $table->string('numero_serie',100);
            $table->date('fecha_adquisicion');
            $table->string('estado',100);
            $table->string('ubicacion',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
